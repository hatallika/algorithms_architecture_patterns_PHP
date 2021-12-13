<?php
function isCorrect($string)

{
    $len = mb_strlen($string, 'UTF-8');
    $stack = new SplStack();

    //будем проверять по четным или нечетным индексам скобок чтобы понять открытые они или закрытые
    // первые символы пропускаем, чтобы при поиске индекса не получить 0 как false
    $br = "00(){}[]";

    for ($i = 0; $i < $len; $i++) {
        $symbol = mb_substr($string, $i, 1, 'UTF-8');

        $ind = strpos($br, $symbol,2); //смещение 2, чтобы исключить индекс 0 == false
        //если скобка найдена
        if ($ind) {
            //проверяем какая это скобка четный индекс - открывающая, нечетный закрывающая
            if ($ind & 1) {
                // закрывающая скобка, проверяем стек
                // стек пуст - плохо, если не пуст, то извлекаем из стека
                if ($stack->count() == 0) return "Ошибка";
                $last = $stack->top();
                // если не соответствует закрывающей скобке - тоже плохо
                if ($last != $br[$ind - 1]) return "Ошибка";
                $stack->pop();
            } else {
                //закрывающую скобку помещаем в стек
                $stack->push($symbol);
            }
        }
    }

    return  !$stack->count();
}

echo isCorrect("{([sdsds])}");
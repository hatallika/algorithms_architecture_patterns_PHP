<?php
class BinaryNode
{
    public $value;
    public $left = null;
    public $right = null;

    public function __construct($value)
    {
        $this->value = $value;
    }

}

class BinaryTree
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function insert($value){
        $node = new BinaryNode($value);

        if ($this->root === null) {
            $this->root = $node;
        } else { // вставить или вправо или влево node in root, передать ссылку на родителя
            $this->insertNode($node, $this->root);
        }
    }

    private function insertNode(BinaryNode $node, &$rootSubTree) // поддерево по ссылке
    {
        //проверим должны ли опускаться дальше
        if ($rootSubTree === null) {
            $rootSubTree = $node;
        } elseif ($rootSubTree->value < $node->value){ // куда деть равные элементы
            $this->insertNode($node, $rootSubTree->right);
        } else {
            $this->insertNode($node, $rootSubTree->left);
        }
    }

    public function &findNode($value, ?BinaryNode &$rootSubtree): ?BinaryNode
    {
        //закончим поиск если
        if ($rootSubtree === null || $rootSubtree->value == $value){
            return $rootSubtree;
        }
        //если искомое значение меньше чем значение ноды запускаем функцию поиска в левой ноде
        if ($rootSubtree->value > $value){
            return $this->findNode($value, $rootSubtree->left);
        } // иначе в правой
        return $this->findNode($value, $rootSubtree->right);
    }

    // Метод рекурсивного удаления, найденого нода из дерева
    public function deleteNode(BinaryNode &$node)
    {
        // Если у узла нет потомков, удаляем его
        if(is_null($node->right) && is_null($node->left)) {
            $node = null;
            // Если у узла нет левого поддерева, заменяем его правым поддеревом
        } elseif (is_null($node->left)){
            $node = $node->right; //
            // Если у узла нет правого поддерева, заменяем его левым поддеревом
        } elseif (is_null($node->right)){
            $node = $node->left; //

            // Если у узла есть оба потомка
        } else {
            // 1 Вариант Если у правого поддерева нет левого потомка, то заменяем удаляемый узел правым потомком, сохраняя левую ветвь удаляемого узла
             //if(is_null($node->right->left))
            //2 Вариант Если у левого поддерева нет правого потомка, то заменяем узел левым потомком сохранив правую ветвь
            if(is_null($node->left->right))
             {
                 //Первый вариант из статьи
                 //$node->right->left = $node->left; // сохранили левую ветку удаляемого узла в ноде, которым будем заменять удаляемое значение
                 //$node = $node->right; // заменили правым потомком

                 //Второй вариант из методички
                 // вставляем значение из левой ветки удаляемого узла, с сохранением правой ветки
                 $node->left->right = $node->right;
                 $node = $node->left;


             } else
                 //1 вариант
                 // если у правого поддерева есть левый потомок, то копируем его значение в удаляемый узел и рекурсивно удаляем
                //2 вариант
                //если у левого поддерева есть правый потомок, то копируем его значение в удаляемый узел и рекурсивно удаляем
             {
                 //$node->value = $node->right->left->value;
                 //$this->deleteNode($node->right->left);

                 //у левого поддерева есть правый потомок
                 $node->value = $node->left->right->value;
                 $this->deleteNode($node->left->right);
             }
        }

    }

    public function delete($value)
    {
        //если находимся наверху (если пустой)
        if($this->root === null) {
            throw new Exception("Дерево пустое");
        }
        //Ищем нод в дереве
        $node = &$this->findNode($value, $this->root);

        //если нод с заданным значением найден - удаляем рекурсивно
        if($node){
            $this->deleteNode($node);
        } else {
            throw new Exception("Число не найдено");
        }

    }

}



$tree = new BinaryTree();
//$tree->insert(8);
//$tree->insert(5);
//$tree->insert(10);
//$tree->insert(6);
//$tree->insert(3);
//$tree->insert(9);
//$tree->insert(11);
//
//$tree->delete(10);
//$tree->delete(9);
//$tree->delete(8);


$tree->insert(30);
$tree->insert(18);
$tree->insert(16);
$tree->insert(20);
$tree->insert(45);
$tree->insert(38);
$tree->insert(48);
$tree->insert(14);

$tree->delete(45);



//echo $tree->findNode(3, $tree->root)->value;

echo"<pre>";
print_r($tree);
//var_dump($tree);

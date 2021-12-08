<?php

/**
 * Классы Получателей содержат некую важную бизнес-логику. Они умеют выполнять
 * все виды операций, связанных с выполнением запроса. Фактически, любой класс
 * может выступать Получателем.
 */
class Receiver
{
    public String $text = "Некоторый текст";
    public String $clipboard;


    public function __construct(string $text)
    {
        $this->text = $text;
    }


    public function getSelected(int $first_position, int $second_position): void
    {
        echo "Исходный текст: {$this->text}" . PHP_EOL;
        $this->clipboard = mb_substr($this->text, $first_position, $second_position - $first_position);
        echo "Редактор: Скопирован в буфер $this->clipboard" . PHP_EOL;

    }

    public function insert(int $first_position):void
    {
        echo "Редактор: Вставляю текст из буфера обмена: {$this->clipboard}" . PHP_EOL;
        $this->text = $this->mb_substr_replace($this->text, $this->clipboard, $first_position, 0);
        echo "Результат: {$this->text}" . PHP_EOL;
    }

    public function deleteSelection(int $first_position, int $second_position): void{
        echo "Редактор: Вырезаю выделенный текст, сохраняю в буфер обмена" . PHP_EOL;
        $this->clipboard = mb_substr($this->text, $first_position, $second_position - $first_position);
        $this->text = $this->mb_substr_replace($this->text, '', $first_position, mb_strlen($this->clipboard));
        echo "Результат: {$this->text}. Вырезан {$this->clipboard}" . PHP_EOL;
    }

    public function mb_substr_replace($original, $replacement, $position, $length): string
    {
        $startString = mb_substr($original, 0, $position, "UTF-8");
        $endString = mb_substr($original, $position + $length, mb_strlen($original), "UTF-8");

        $out = $startString . $replacement . $endString;

        return $out;
    }


}
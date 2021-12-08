<?php

/**
 * Но есть и команды, которые делегируют более сложные операции другим объектам,
 * называемым «получателями».
 */
class PastCommand implements Command
{

    private Receiver $receiver;

    private int $first_position;
    private int $second_position;

    public function __construct(Receiver $receiver, $first_position, $second_position = null)
    {
        $this->receiver = $receiver;
        $this->first_position = $first_position;
        $this->second_position = $second_position;
    }

    /**
     * Команды могут делегировать выполнение любым методам получателя.
     */
    public function execute(): bool
    {
        echo "-- Вставка: передано редактору." .PHP_EOL;
        $this->receiver->insert($this->first_position);
        return true;
    }

    public function unExecute(): bool
    {
        echo "-- Отменить вставленный объект: передано редактору." . PHP_EOL;
        var_dump($this->first_position, $this->first_position + mb_strlen($this->receiver->clipboard));
        $this->receiver->deleteSelection($this->first_position, $this->first_position + mb_strlen($this->receiver->clipboard)+1);
        return false;
    }


}
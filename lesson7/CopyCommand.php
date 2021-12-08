<?php

/**
 * Но есть и команды, которые делегируют более сложные операции другим объектам,
 * называемым «получателями».
 */
class CopyCommand implements Command
{

    private Receiver $receiver;

    private int $first_position;
    private int $second_position;

    public function __construct(Receiver $receiver, $first_position, $second_position)
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
        echo "-- Копирование: передано редактору." . PHP_EOL;
        $this->receiver->getSelected($this->first_position, $this->second_position);
        return false;
    }
}
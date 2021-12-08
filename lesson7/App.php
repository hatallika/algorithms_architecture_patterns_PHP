<?php

/**
 * Отправитель связан с одной или несколькими командами. Он отправляет запрос
 * команде.
 */
class App
{
    private Command $onStart;
    private array $commands = [];
    private int $currentCommandLine;

    public function __construct()
    {
        $this->currentCommandLine = 0;
    }

    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }

    /**
     * Отправитель не зависит от классов конкретных команд и получателей.
     * Отправитель передаёт запрос получателю косвенно, выполняя команду.
     */

    public function edit(Command $command): void
    {
        $this->onStart = $command;

        echo "Запускаю команду: " . PHP_EOL;

        //если command true - записываем в архив команд
        if ($command instanceof Command) {

            if($command->execute()) {
                $this->commands[] = $command;
                $this->currentCommandLine++;
            };
        }
    }

    public function undo(int $levels) {
        echo "Отменить $levels операций" . PHP_EOL;

        for ($i = 0; $i < $levels; $i++) {

            if($this->currentCommandLine > 0){

                $this->commands[--$this->currentCommandLine]->unExecute();
            }
        }
    }



    public function redo(int $levels) {
        echo "Вернуть $levels операций" . PHP_EOL;


        for ($i = 0; $i< $levels; $i++) {
            if($this->currentCommandLine < count($this->commands)){

                $this->commands[$this->currentCommandLine++]->execute();
            }
        }
    }

}
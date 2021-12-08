<?php
spl_autoload_register(function ($className){
    require_once $className . ".php";
});

$app = new App();
$receiver = new Receiver("привет это редактируемый текст");
$app->edit(new CopyCommand($receiver, "0", "6"));
$app->edit(new PastCommand($receiver, "0", 0));
$app->edit(new CutCommand($receiver, "31", "36"));

$app->undo(2);




<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$message = "Добрый день! Вы подписаны на рассылку";
$notifier = new EmailNotifier(new SMSNotifier(new BaseNotifier()));
$notifier = new ChromeNotifier($notifier);
$notifier->send($message);


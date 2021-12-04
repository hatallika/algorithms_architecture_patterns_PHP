<?php
spl_autoload_register(function ($class) {
    include $class.'.php';
});

$orderDetails = new OrderDetails(1200, '5775445664');
function testStrategy($orderDetails){
    $order = new Order($orderDetails);

    echo "Оплата Qiwi" . PHP_EOL;
    $order->pay(new QiwiPayment());

    echo "Оплата Yandex" . PHP_EOL;
    $order->pay(new YaPayment());

    echo "Оплата WebMoney" . PHP_EOL;
    $order->pay(new WebMoneyPayment());
}
testStrategy($orderDetails);
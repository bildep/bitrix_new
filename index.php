<?php
use Bitrix\Main\Context,
    Bitrix\Currency\CurrencyManager,
    Bitrix\Sale\Order,
    Bitrix\Sale\Basket,
    Bitrix\Sale\Delivery,
    Bitrix\Sale\PaySystem;

Bitrix\Main\Loader::includeModule("sale");
Bitrix\Main\Loader::includeModule("catalog");
Bitrix\Main\Loader::includeModule("iblock");

$orderId = 47459;
$order = Bitrix\Sale\Order::load($orderId);

$paymentCollection = $order->getPaymentCollection();

$onePayment = $paymentCollection[0];
$onePayment->setPaid("Y");
$order->save();

<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'bootstrap.php';

include("model/database.php"); 

if (empty($_GET['paymentId']) || empty($_GET['PayerID'])) {
    throw new Exception('The response is missing the paymentId and PayerID');
}

$paymentId = $_GET['paymentId'];
$payment = Payment::get($paymentId, $apiContext);

$execution = new PaymentExecution();
$execution->setPayerId($_GET['PayerID']);

try {
    // Take the payment
    $payment->execute($execution, $apiContext);

    try {
        $db = new mysqli($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['name']);

        $payment = Payment::get($paymentId, $apiContext);

        $data = [
            'transaction_id' => $payment->getId(),
            'payment_amount' => $payment->transactions[0]->amount->total,
            'payment_status' => $payment->getState(),
            'invoice_id' => $payment->transactions[0]->invoice_number
        ];
        if (addPayment($data) !== false && $data['payment_status'] === 'approved') {
            // Payment successfully added, redirect to the payment complete page.
            $a = new DB();
            $result1 = $a->orderupdate($payment->transactions[0]->invoice_number,$data['payment_status'],$payment->transactions[0]->amount->total,$payment->getId(), 'Order Placed');
            header('location:order-placed.php');
            exit(1);
        } else {
            // Payment failed
            $status ='failed';
            $a = new DB();
            $result1 = $a->orderupdate($payment->transactions[0]->invoice_number,$status,$payment->transactions[0]->amount->total,$payment->getId(), 'Cancel');
            header('location:order-cancel.php');

        }

    } catch (Exception $e) {
        // Failed to retrieve payment from PayPal

    }

} catch (Exception $e) {
    // Failed to take payment

}

/**
 * Add payment to database
 *
 * @param array $data Payment data
 * @return int|bool ID of new payment or false if failed
 */
function addPayment($data)
{
    

    return true;
}

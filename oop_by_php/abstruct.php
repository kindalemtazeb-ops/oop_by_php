<?php

// Abstract Parent Class
abstract class PaymentProcess {
    // Abstract method (has no body, just a signature)
    abstract public function pay($amount);

    // Regular method (can be shared normally)
    public function showReceiptHeader() {
        return "--- Official Payment Receipt ---<br>";
    }
}

// Child Class 1: Credit Card Payment
class CreditCardPayment extends PaymentProcess {
    // Must implement the abstract method
    public function pay($amount) {
        return "Successfully paid $" . $amount . " using Credit Card.<br>";
    }
}

// Child Class 2: PayPal Payment
class PayPalPayment extends PaymentProcess {
    // Must implement the abstract method
    public function pay($amount) {
        return "Successfully paid $" . $amount . " using PayPal.<br>";
    }
}

// ---------------------------------------------------------

// Trying to do this will cause an ERROR: $payment = new PaymentProcess(); 

// Instead, we use the child classes:
$ccPayment = new CreditCardPayment();
echo $ccPayment->showReceiptHeader();
echo $ccPayment->pay(150);

echo "<br>";

$paypalPayment = new PayPalPayment();
echo $paypalPayment->showReceiptHeader();
echo $paypalPayment->pay(75);

?>
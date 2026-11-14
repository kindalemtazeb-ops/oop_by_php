<?php

// Define a Trait with reusable functionality
trait MessageSender {
    public function sendNotification($user, $msg) {
        return "Notification sent to $user: '$msg'<br>";
    }
}

// Class 1 uses the trait
class UserAccount {
    use MessageSender;
    public $username = "Kindalem";
}

// Unrelated Class 2 also uses the exact same trait
class OrderSystem {
    use MessageSender;
    public $orderId = 101;
}

// ---------------------------------------------------------
// Testing Traits
$user = new UserAccount();
echo $user->sendNotification($user->username, "Your account has been created.");

$order = new OrderSystem();
echo $order->sendNotification("Customer", "Your order #" . $order->orderId . " is ready.");

?>
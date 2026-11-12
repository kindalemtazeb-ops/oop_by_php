<?php 
class BankAccount {
    // Optional: initialize balance to 0 so it doesn't start as null
    private $balance = 0;

    public function deposit($amount) {
        if ($amount > 100) {
            $this->balance += $amount; // Changed -= to += for deposit
            echo "Successfully deposited: " . $amount . "<br>";
        } else {
            echo "Deposit amount must be greater than 100!<br>";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

// Creating the object
$bankAccount = new BankAccount();
$bankAccount->deposit(300);

// Displaying the total balance using the getter
echo "Total balance in the account is: " . $bankAccount->getBalance();
?>
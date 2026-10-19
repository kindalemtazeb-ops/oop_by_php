<?php
//class
class bankaccount{
    //encapsulation
    protected string $accountholder;
    protected float $balance;
    //constructor
    public function __construct(string $name,float $initialbalance){
  $this->accountholder=$name;
  $this->balance=$initialbalance;
    }
    //mone deposit methode
    public function deposite(float $amount):void{
       if($amount>0){
        $this->balance+=$amount;
        echo "{$this->accountholder} deposited {$amount}. New balance is {$this->balance}<br>";
       }
       
    }
    public function withdraw(float $amount):void{
        if($amount>0 and $amount<=$this->balance){
            $this->balance-=$amount;
            echo "{$this->accountholder} withdrew {$amount}. New balance is {$this->balance}<br>";
    }else{
        echo "Insufficient balance for {$this->accountholder}. Current balance is {$this->balance}<br>";
    }
    }
    public function getbalance():float{
        return $this->balance;
    }
    public function getaccountholder():string{
        return $this->accountholder;
    }
}
class savingsaccount extends bankaccount{
    private float $interestRate;
    public function __construct(string $name,float $initialbalance,float $interestRate){
        parent::__construct($name,$initialbalance);
        $this->interestRate=$interestRate;
    }
    public function addinterest():void{
        $interest=$this->balance*($this->interestRate/100);
        $this->balance+=$interest;
        echo "{$this->accountholder} earned {$interest} in interest. New balance is {$this->balance}<br>";
    }
}
echo "<h1>Bank Account Example</h1>";
$account1=new bankaccount("John Doe",1000);
echo "{$account1->getaccountholder()} has an initial balance of {$account1->getbalance()}<br>";
$account1->deposite(500);
$account1->withdraw(200);
echo "{$account1->getaccountholder()} has a final balance of {$account1->getbalance()}<br>";
echo "<h1>saving account</h1>";
$saving1=new savingsaccount("Jane Smith",2000,2.5);
echo "{$saving1->getaccountholder()} has an initial balance of {$saving1->getbalance()}<br>";
$saving1->deposite(1000);
$saving1->addinterest();
ECHO "{$saving1->getaccountholder()} has a final balance of {$saving1->getbalance()}<br>";



?>
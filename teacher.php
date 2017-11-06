<?php

class BankAccount{
public $accountNumber;

public function __construct($accountNumber)
{

$this->accountNumber = $accountNumber;

}
}
$compteBancaireAmelie = new BankAccount ("4567890");
var_dump ($compteBancaireAmelie);

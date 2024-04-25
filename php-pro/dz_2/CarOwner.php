<?php


class CarOwner extends BaseEntity {
    private $phoneNumber;
    private $email;
    private $car;

    public function __construct($name, $phoneNumber, $email, $car) {
        parent::__construct($name);
        $this->phoneNumber = $phoneNumber;
        $this->car = $car;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getCar()
    {
        return $this->car;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getDescription() {
        return $this->getName() . " (Phone: " . $this->getPhoneNumber() . ")" .PHP_EOL . "(Email: " . $this->getEmail() . ")". " (Name: " . $this->getName() . ")" .PHP_EOL . "(Car: " . $this->car->getDescription() . ")";
    }
}
<?php


class ServiceOrder extends BaseEntity {
    private $car;
    private $services;
    private $parts;

    public function __construct($name, $car, $services, $parts) {
        parent::__construct($name);
        $this->car = $car;
        $this->services = $services;
        $this->parts = $parts;
    }

    /**
     * @return mixed
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * @return mixed
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @return mixed
     */
    public function getParts()
    {
        return $this->parts;
    }

    public function getDescription() {
        return $this->getName() . " for " . $this->car->getDescription() . " Services ". $this->getServices() . " Parts ". $this->parts->getDescription();
    }
}
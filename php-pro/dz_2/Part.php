<?php



class Part extends BaseEntity {
    private $price;
    private $available;

    public function __construct($name, $price, $available) {
        parent::__construct($name);
        $this->price = $price;
        $this->available = $available;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    public function getDescription() {
        return $this->getName() . " ($" . $this->getPrice() . ")";
    }
}
<?php


class Car extends BaseEntity {
    private $brand;
    private $model;
    private $year;
    private $vin;

    public function __construct($name, $brand, $model, $year, $vin) {
        parent::__construct($name);
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->vin = $vin;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * @param mixed $vin
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
    }

    public function getDescription() {
        return $this->getName() . " - " . $this->brand . " " . $this->model . " (" . $this->year . ")";
    }
}

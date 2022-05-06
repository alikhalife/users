<?php

class Car
{
    private $registration;
    private $issuance;
    private $brand;
    private $model;
    private $color;
    private $kilometers;
    private $weight;

    public function __construct($brand, $registration, $issuance, $model, $color, $kilometers, $weight) {
        $this-> registration = $registration;
        $this -> issuance = $issuance;
        $this -> brand = $brand;
        $this -> model = $model;
        $this -> color = $color;
        $this -> kilometers = $kilometers;
        $this-> weight = $weight;
    }

    private function availability() {
        if ($this-> brand == 'Audi') {
            return "Reserved";
        } else return "Free";
    }

    private function vehicleType() {
        if ($this -> weight > 3.5){
            return "Commercial";
        } else return "Utilitaire";
    }

    private function country() {
       if (substr($this -> registration, 0, 2) == "BE"){
           return "This vehicule is registred in Belgium";
       } else if (substr($this -> registration, 0, 2) == "FR"){
           return "This vehicule is registred in France";
       } else if (substr($this -> registration, 0, 2) == "DE"){
            return "This vehicule is registred in Germany";
        }
    }

    private function kilometrage() {
        if ($this -> kilometers < 100000){
            return "Low counsumption";
        } else if ($this -> kilometers > 100000 AND $this -> kilometers < 200000) {
            return "Middle consumption";
        } else return "High consumption";
    }

    private function carAge() {
        $age =  date("Y") - intval(substr($this -> issuance,6, 5 ));
        return $age;
    }

    public function changekilometers($newkilometers){
        $this -> kilometers = $newkilometers;
        return $this ->kilometrage();
    }

    public function drive() {
        $this -> kilometers .= 100000;
        return $this -> kilometrage();
    }

    public function display($imgLink){
        $car_brand = $this -> brand;
        $car_registration = $this -> registration;
        $car_issuance = $this -> issuance;
        $car_model = $this -> model;
        $car_color = $this -> color;
        $car_kilometers = $this -> kilometers .'Km';
        $car_weight = $this -> weight .'T';

        echo <<<HTML
            <tr>
                 <td>$car_brand </td>
                 <td>$car_registration </td>
                 <td>$car_issuance</td>
                 <th>$car_model</th>
                 <td>$car_color</td>
                 <td>$car_kilometers</td>
                 <td>$car_weight</td>
                 <td><img src="$imgLink" alt="Car"></td>
            </tr>

        HTML;
    }



}


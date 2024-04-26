<?php

enum TariffType: string {
    case ACTUAL = 'актуальный';
    case ARCHIVE = 'архивный';
    case SYSTEM = 'системный';
}

class TariffDTO {
    private $name;
    private $cost;
    private $validityPeriod;
    private $speed;
    private TariffType $type;

    public function __construct($name, $cost, $validityPeriod, $speed, TariffType $type) {
        $this->name = $name;
        $this->cost = $cost;
        $this->validityPeriod = $validityPeriod;
        $this->speed = $speed;
        $this->type = $type;
    }

    public function getName() {
        return $this->name;
    }

    public function getCost() {
        return $this->cost;
    }

    public function getValidityPeriod() {
        return $this->validityPeriod;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function getType(): TariffType {
        return $this->type;
    }

    public function setType(TariffType $type) {
        $this->type = $type;
    }

    public function __toString() {
        return "TariffDTO[name={$this->name}, cost={$this->cost}, validityPeriod={$this->validityPeriod}, speed={$this->speed}, type={$this->type->value}]";
    }
}

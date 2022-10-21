<?php

namespace Application\Model;

/**
 * @class Application\Model\City
 */
class City extends Validator {

    /** @var string $city */
    protected string $city;

    /** @var string $label */
    protected string $label = "City";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->city;
    }

    /**
     * Setter
     * @param string $city
     */
    public function set(string $city): void
    {
        $this->validate($city);
        $this->city = $city;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        $this->minStrLen($val, 2);
    }
}
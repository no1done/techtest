<?php

namespace Application\Model;

/**
 * @class Application\Model\StreetName
 */
class StreetName extends Validator {

    /** @var string $street_name */
    protected string $street_name;

    /** @var string $label */
    protected string $label = "Street Name";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->street_name;
    }

    /**
     * Setter
     * @param string $street_name
     */
    public function set(string $street_name): void
    {
        $this->validate($street_name);
        $this->street_name = $street_name;
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
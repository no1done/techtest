<?php

namespace Application\Model;

/**
 * @class Application\Model\HomeNumber
 */
class HomeNumber extends Validator {

    /** @var string $home_number */
    protected string $home_number;

    /** @var string $label */
    protected string $label = "Home Phone Number";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->home_number;
    }

    /**
     * Setter
     * @param string $home_number
     */
    public function set(string $home_number): void
    {
        $this->validate($home_number);
        $this->home_number = $home_number;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        $this->isNotMobileNumber($val);
        $this->isNumeric($val);
        $this->isStrLen($val, 11);
    }
}
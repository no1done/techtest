<?php

namespace Application\Model;

/**
 * @class Application\Model\MobileNumber
 */
class MobileNumber extends Validator {

    /** @var string $mobile_number */
    protected string $mobile_number;

    /** @var string $label */
    protected string $label = "Mobile Number";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->mobile_number;
    }

    /**
     * Setter
     * @param string $mobile_number
     */
    public function set(string $mobile_number): void
    {
        $this->validate($mobile_number);
        $this->mobile_number = $mobile_number;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        $this->isMobileNumber($val);
        $this->isNumeric($val);
    }
}
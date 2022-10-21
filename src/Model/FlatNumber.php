<?php

namespace Application\Model;

/**
 * @class Application\Model\FlatNumber
 */
class FlatNumber {

    /** @var string $flat_number */
    protected string $flat_number;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->flat_number;
    }

    /**
     * @return bool
     */
    public function isset() :bool
    {
        return isset($this->flat_number);
    }

    /**
     * Setter
     * @param string $flat_number
     */
    public function set(string $flat_number): void
    {
        // Validate
        $this->validate($flat_number);

        $this->flat_number = $flat_number;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        // Do validation - throw exception if invalid
    }
}
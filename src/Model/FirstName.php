<?php

namespace Application\Model;

/**
 * @class Application\Model\FirstName
 */
class FirstName extends Validator {

    /** @var string $first_name */
    protected string $first_name;

    /** @var string $label */
    protected string $label = "First Name";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->first_name;
    }

    /**
     * Setter
     * @param string $first_name
     */
    public function set(string $first_name): void
    {
        // Validate
        $this->validate($first_name);

        $this->first_name = $first_name;
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
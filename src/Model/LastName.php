<?php

namespace Application\Model;

/**
 * @class Application\Model\LastName
 */
class LastName extends Validator {

    /** @var string $last_name */
    protected string $last_name;

    /** @var string $label */
    protected string $label = "Last Name";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->last_name;
    }

    /**
     * Setter
     * @param string $last_name
     */
    public function set(string $last_name): void
    {
        // Validate
        $this->validate($last_name);
        $this->last_name = $last_name;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        $this->minStrLen($val, 2);
        $this->noNumericCharacters($val);
    }
}
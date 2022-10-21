<?php

namespace Application\Model;

/**
 * @class Application\Model\County
 */
class County extends Validator {

    /** @var string $county */
    protected string $county;

    /** @var string $label */
    protected string $label = "County";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->county;
    }

    /**
     * Setter
     * @param string $county
     */
    public function set(string $county): void
    {
        $this->validate($county);
        $this->county = $county;
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
<?php

namespace Application\Model;

/**
 * @class Application\Model\MiddleName
 */
class MiddleName {

    /** @var string $middle_name */
    protected string $middle_name;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->middle_name;
    }

    /**
     * Setter
     * @param string $middle_name
     */
    public function set(string $middle_name): void
    {
        $this->middle_name = $middle_name;
    }
}
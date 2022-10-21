<?php

namespace Application\Model;

/**
 * @class Application\Model\EmployerName
 */
class EmployerName {

    /** @var string $employer_name */
    protected string $employer_name;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->employer_name;
    }

    /**
     * Setter
     * @param string $employer_name
     */
    public function set(string $employer_name): void
    {
        if ($employer_name == "") $employer_name = "unemployed";

        $this->employer_name = $employer_name;
    }
}
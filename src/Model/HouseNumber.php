<?php

namespace Application\Model;

/**
 * @class Application\Model\HouseNumber
 */
class HouseNumber {

    /** @var string $house_number */
    protected string $house_number;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->house_number;
    }

    /**
     * @return bool
     */
    public function isset() :bool
    {
        return isset($this->house_number);
    }

    /**
     * Setter
     * @param string $house_number
     */
    public function set(string $house_number): void
    {
        $this->house_number = $house_number;
    }
}
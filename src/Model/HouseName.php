<?php

namespace Application\Model;

/**
 * @class Application\Model\HouseName
 */
class HouseName {

    /** @var string $house_name */
    protected string $house_name;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->house_name;
    }

    /**
     * @return bool
     */
    public function isset() :bool
    {
        return isset($this->house_name);
    }

    /**
     * Setter
     * @param string $house_name
     */
    public function set(string $house_name): void
    {
        $this->house_name = $house_name;
    }
}
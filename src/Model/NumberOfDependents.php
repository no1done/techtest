<?php

namespace Application\Model;

/**
 * @class Application\Model\NumberOfDependents
 */
class NumberOfDependents {

    /** @var int $number_of_dependents */
    protected int $number_of_dependents;

    /**
     * Getter
     * @return int
     */
    public function get(): int
    {
        return $this->number_of_dependents;
    }

    /**
     * Setter
     * @param int $number_of_dependents
     */
    public function set(int $number_of_dependents): void
    {
        // If greater than 9, set to 9.
        if ($number_of_dependents > 9) $number_of_dependents = 9;

        $this->number_of_dependents = $number_of_dependents;
    }

   
}
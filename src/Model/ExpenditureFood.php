<?php

namespace Application\Model;

/**
 * @class Application\Model\ExpenditureFood
 */
class ExpenditureFood {

    /** @var float $expenditure_food */
    protected float $expenditure_food;

    /**
     * Getter
     * @return float
     */
    public function get(): float
    {
        return $this->expenditure_food;
    }

    /**
     * Setter
     * @param float $expenditure_food
     */
    public function set(float $expenditure_food): void
    {
        $this->expenditure_food = $expenditure_food;
    }
}
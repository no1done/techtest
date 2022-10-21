<?php

namespace Application\Model;

/**
 * @class Application\Model\ExpenditureTransport
 */
class ExpenditureTransport {

    /** @var float $expenditure_transport */
    protected float $expenditure_transport;

    /**
     * Getter
     * @return float
     */
    public function get(): float
    {
        return $this->expenditure_transport;
    }

    /**
     * Setter
     * @param float $expenditure_transport
     */
    public function set(float $expenditure_transport): void
    {
        // Validate
        $this->validate($expenditure_transport);

        $this->expenditure_transport = $expenditure_transport;
    }

    /**
     * Validator
     * @param float $val
     */
    protected function validate(float $val): void
    {
        // Do validation - throw exception if invalid
    }
}
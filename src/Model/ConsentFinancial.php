<?php

namespace Application\Model;

/**
 * @class Application\Model\ConsentFinancial
 */
class ConsentFinancial {

    /** @var bool $consent_financial */
    protected bool $consent_financial;

    /**
     * Getter
     * @return bool
     */
    public function get(): bool
    {
        return $this->consent_financial;
    }

    /**
     * Setter
     * @param bool $consent_financial
     */
    public function set(bool $consent_financial): void
    {
        $this->consent_financial = $consent_financial;
    }
}
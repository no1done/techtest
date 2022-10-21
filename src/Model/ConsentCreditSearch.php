<?php

namespace Application\Model;

/**
 * @class Application\Model\ConsentCreditSearch
 */
class ConsentCreditSearch {

    /** @var bool $consent_credit_search */
    protected bool $consent_credit_search;

    /**
     * Getter
     * @return bool
     */
    public function get(): bool
    {
        return $this->consent_credit_search;
    }

    /**
     * Setter
     * @param bool $consent_credit_search
     */
    public function set(bool $consent_credit_search): void
    {
        $this->consent_credit_search = $consent_credit_search;
    }
}
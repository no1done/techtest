<?php

namespace Application\Model;

/**
 * @class Application\Model\ConsentCall
 */
class ConsentCall {

    /** @var bool $consent_call */
    protected bool $consent_call;

    /**
     * Getter
     * @return bool
     */
    public function get(): bool
    {
        return $this->consent_call;
    }

    /**
     * Setter
     * @param bool $consent_call
     */
    public function set(bool $consent_call): void
    {
        $this->consent_call = $consent_call;
    }
}
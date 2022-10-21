<?php

namespace Application\Model;

/**
 * @class Application\Model\ConsentEmail
 */
class ConsentEmail {

    /** @var bool $consent_email */
    protected bool $consent_email;

    /**
     * Getter
     * @return bool
     */
    public function get(): bool
    {
        return $this->consent_email;
    }

    /**
     * Setter
     * @param bool $consent_email
     */
    public function set(bool $consent_email): void
    {
        $this->consent_email = $consent_email;
    }
}
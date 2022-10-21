<?php

namespace Application\Model;

/**
 * @class Application\Model\ConsentSms
 */
class ConsentSms {

    /** @var bool $consent_sms */
    protected bool $consent_sms;

    /**
     * Getter
     * @return bool
     */
    public function get(): bool
    {
        return $this->consent_sms;
    }

    /**
     * Setter
     * @param bool $consent_sms
     */
    public function set(bool $consent_sms): void
    {
        $this->consent_sms = $consent_sms;
    }
}
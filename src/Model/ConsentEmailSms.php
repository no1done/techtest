<?php

namespace Application\Model;

/**
 * @class Application\Model\ConsentEmailSms
 */
class ConsentEmailSms {

    /** @var bool $consent_email_sms */
    protected bool $consent_email_sms;

    /**
     * Getter
     * @return bool
     */
    public function get(): bool
    {
        return $this->consent_email_sms;
    }

    /**
     * Setter
     * @param bool $consent_email_sms
     */
    public function set(bool $consent_email_sms): void
    {
        $this->consent_email_sms = $consent_email_sms;
    }
}
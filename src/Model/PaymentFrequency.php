<?php

namespace Application\Model;

use Application\Enum\PaymentFrequency as PaymentFrequencyEnum;

/**
 * @class Application\Model\PaymentFrequency
 */
class PaymentFrequency {

    /** @var PaymentFrequencyEnum $payment_frequency */
    protected PaymentFrequencyEnum $payment_frequency;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->payment_frequency->name;
    }

    /**
     * Setter
     * @param PaymentFrequencyEnum $payment_frequency
     */
    public function set(PaymentFrequencyEnum $payment_frequency): void
    {
        $this->payment_frequency = $payment_frequency;
    }

}
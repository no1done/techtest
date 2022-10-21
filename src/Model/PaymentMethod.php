<?php

namespace Application\Model;

use Application\Enum\PaymentMethod as PaymentMethodEnum;

/**
 * @class Application\Model\PaymentMethod
 */
class PaymentMethod {

    /** @var PaymentMethodEnum $payment_method */
    protected PaymentMethodEnum $payment_method;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->payment_method->name;
    }

    /**
     * Setter
     * @param PaymentMethodEnum $payment_method
     */
    public function set(PaymentMethodEnum $payment_method): void
    {
        $this->payment_method = $payment_method;
    }

}
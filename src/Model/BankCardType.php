<?php

namespace Application\Model;

use Application\Enum\BankCardType as BankCardTypeEnum;

/**
 * @class Application\Model\BankCardType
 */
class BankCardType {

    /** @var BankCardTypeEnum bank_card_type */
    protected BankCardTypeEnum $bank_card_type;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->bank_card_type->name;
    }

    /**
     * Setter
     * @param BankCardTypeEnum $bank_card_type
     */
    public function set(BankCardTypeEnum $bank_card_type): void
    {
        $this->bank_card_type = $bank_card_type;
    }
}
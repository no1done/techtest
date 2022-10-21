<?php

namespace Application\Model;

use Application\Enum\MobilePhoneType as MobilePhoneTypeEnum;

/**
 * @class Application\Model\MobilePhoneType
 */
class MobilePhoneType {

    /** @var MobilePhoneTypeEnum $mobile_phone_type */
    protected MobilePhoneTypeEnum $mobile_phone_type;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->mobile_phone_type->name;
    }

    /**
     * Setter
     * @param MobilePhoneTypeEnum $mobile_phone_type
     */
    public function set(MobilePhoneTypeEnum $mobile_phone_type): void
    {
        $this->mobile_phone_type = $mobile_phone_type;
    }
}
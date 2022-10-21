<?php

namespace Application\Model;

use Application\Enum\ResidentialStatus as ResidentialStatusEnum;

/**
 * @class Application\Model\ResidentialStatus
 */
class ResidentialStatus {

    /** @var ResidentialStatusEnum $residential_status */
    protected ResidentialStatusEnum $residential_status;

    /**
     * Getter
     * @return ResidentialStatusEnum
     */
    public function get(): ResidentialStatusEnum
    {
        return $this->residential_status;
    }

    /**
     * Setter
     * @param ResidentialStatusEnum $residential_status
     */
    public function set(ResidentialStatusEnum $residential_status): void
    {
        $this->residential_status = $residential_status;
    }
}
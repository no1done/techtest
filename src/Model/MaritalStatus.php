<?php

namespace Application\Model;

use Application\Enum\MartialStatus as MartialStatusEnum;

/**
 * @class Application\Model\MaritalStatus
 */
class MaritalStatus {

    /** MartialStatusEnum marital_status */
    protected MartialStatusEnum $marital_status;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->marital_status->name;
    }

    /**
     * Setter
     * @param MartialStatusEnum $marital_status
     */
    public function set(MartialStatusEnum $marital_status): void
    {
        $this->marital_status = $marital_status;
    }
}
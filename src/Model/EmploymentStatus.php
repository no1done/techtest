<?php

namespace Application\Model;

use Application\Enum\EmploymentStatus as EmploymentStatusEnum;

/**
 * @class Application\Model\EmploymentStatus
 */
class EmploymentStatus {

    /** @var EmploymentStatusEnum $employment_status */
    protected EmploymentStatusEnum $employment_status;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->employment_status->name;
    }

    /**
     * Setter
     * @param EmploymentStatusEnum $employment_status
     */
    public function set(EmploymentStatusEnum $employment_status): void
    {
        $this->employment_status = $employment_status;
    }

}
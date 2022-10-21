<?php

namespace Application\Model;

use Application\Enum\EmployerIndustry as EmployerIndustryEnum;

/**
 * @class Application\Model\EmployerIndustry
 */
class EmployerIndustry {

    /** @var EmployerIndustryEnum $employer_industry */
    protected EmployerIndustryEnum $employer_industry;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->employer_industry->name;
    }

    /**
     * Setter
     * @param EmployerIndustryEnum $employer_industry
     */
    public function set(EmployerIndustryEnum $employer_industry): void
    {
        $this->employer_industry = $employer_industry;
    }
}
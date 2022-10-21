<?php

namespace Application\Model;

use Application\Enum\Gender as GenderEnum;

/**
 * @class Application\Model\Gender
 */
class Gender {

    /** @var GenderEnum $gender */
    protected GenderEnum $gender;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->gender->name;
    }

    /**
     * Setter
     * @param GenderEnum $gender
     */
    public function set(GenderEnum $gender): void
    {
        $this->gender = $gender;
    }
}
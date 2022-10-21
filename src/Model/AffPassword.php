<?php

namespace Application\Model;

/**
 * @class Application\Model\AffPassword
 */
class AffPassword {

    /** @var string aff_password */
    protected string $aff_password;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->aff_password;
    }

    /**
     * Setter
     * @param string $aff_password
     */
    public function set(string $aff_password): void
    {
        $this->aff_password = $aff_password;
    }
}
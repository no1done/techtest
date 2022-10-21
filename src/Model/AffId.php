<?php

namespace Application\Model;

/**
 * @class Application\Model\AffId
 */
class AffId extends Validator {

    /** @var int $aff_id */
    protected int $aff_id;

    /** @var string $label */
    protected string $label = "Affiliate ID";

    /**
     * Getter
     * @return int
     */
    public function get(): int
    {
        return $this->aff_id;
    }

    /**
     * Setter
     * @param int $aff_id
     */
    public function set(int $aff_id): void
    {
        $this->validate($aff_id);
        $this->aff_id = $aff_id;
    }

    /**
     * Validator
     *
     * Validating this being set seems a little redundant however
     * it will ensure the tests are accurate in picking up any issues.
     *
     * @param int $val
     */
    protected function validate(int $val): void
    {
        $this->isGreaterThan($val, 0);
    }
}
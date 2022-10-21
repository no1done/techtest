<?php

namespace Application\Model;

/**
 * @class Application\Model\SubId
 */
class SubId {

    /** @var string $sub_id */
    protected string $sub_id;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->sub_id;
    }

    /**
     * Setter
     * @param string $sub_id
     */
    public function set(string $sub_id): void
    {
        $this->validate($sub_id);
        $this->sub_id = $sub_id;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        // Do validation - throw exception if invalid
    }
}
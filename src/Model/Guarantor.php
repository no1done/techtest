<?php

namespace Application\Model;

/**
 * @class Application\Model\Guarantor
 */
class Guarantor {

    /** @var bool $guarantor */
    protected bool $guarantor;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->guarantor ? 'yes' : 'no';
    }

    /**
     * Setter
     * @param bool $guarantor
     */
    public function set(bool $guarantor): void
    {
        $this->guarantor = $guarantor;
    }
}
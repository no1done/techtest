<?php

namespace Application\Model;

use RuntimeException;

/**
 * @class Application\Model\IpAddress
 */
class IpAddress {

    /** @var string $ip_address */
    protected string $ip_address;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->ip_address;
    }

    /**
     * Setter
     * @param string $ip_address
     */
    public function set(string $ip_address): void
    {
        // Validate
        $this->validate($ip_address);
        $this->ip_address = $ip_address;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        if (!filter_var($val, FILTER_VALIDATE_IP)) throw new RuntimeException(
            "IP Address is invalid"
        );
    }
}
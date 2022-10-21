<?php

namespace Application\Model;

/**
 * @class Application\Model\EmailAddress
 */
class EmailAddress extends Validator {

    /** @var string $email_address */
    protected string $email_address;

    /** @var string $label */
    protected string $label = "Email Address";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->email_address;
    }

    /**
     * Setter
     * @param string $email_address
     */
    public function set(string $email_address): void
    {
        // Validate
        $this->validate($email_address);

        $this->email_address = $email_address;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        // Check if supplied is a valid email address.
        $this->isValidEmailAddress($val);
    }
}
<?php

namespace Application\Model;

/**
 * @class Application\Model\PostCode
 */
class PostCode extends Validator {

    /** @var string $post_code */
    protected string $post_code;

    /** @var string $label */
    protected string $label = "Post Code";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->post_code;
    }

    /**
     * Setter
     * @param string $post_code
     */
    public function set(string $post_code): void
    {
        $this->validate($post_code);
        $this->post_code = $post_code;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        // Post code be between 5 and 7 characters in length
        $this->strLenBetween($val, 5, 7);

        // Must start with a letter
        $this->startWithLetter($val);
    }
}
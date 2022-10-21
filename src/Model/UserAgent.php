<?php

namespace Application\Model;

/**
 * @class Application\Model\UserAgent
 */
class UserAgent {

    /** @var string $user_agent */
    protected string $user_agent;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->user_agent;
    }

    /**
     * Setter
     * @param string $user_agent
     */
    public function set(string $user_agent): void
    {
        $this->user_agent = $user_agent;
    }
}
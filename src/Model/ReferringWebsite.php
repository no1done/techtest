<?php

namespace Application\Model;

/**
 * @class Application\Model\ReferringWebsite
 */
class ReferringWebsite {

    /** @var string $referring_website */
    protected string $referring_website;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->referring_website;
    }

    /**
     * Setter
     * @param string $referring_website
     */
    public function set(string $referring_website): void
    {
        $this->referring_website = $referring_website;
    }

}
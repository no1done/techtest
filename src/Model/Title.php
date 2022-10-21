<?php

namespace Application\Model;

use Application\Enum\Title as TitleEnum;

/**
 * @class Application\Model\Title
 */
class Title {

    /** TitleEnum title */
    protected TitleEnum $title;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->title->name;
    }

    /**
     * Setter
     * @param TitleEnum $title
     */
    public function set(TitleEnum $title): void
    {
        $this->title = $title;
    }
}
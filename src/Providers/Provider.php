<?php

namespace LaPress\Content\Providers;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
interface Provider
{
    /**
     * @param string $url
     * @return bool
     */
    public static function match(string $url): bool;

    /**
     * @param string $url
     * @return string
     */
    public static function render(string $url): string;
}

<?php

namespace LaPress\Content\Providers;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class InstagramProvider extends AbstractProvider implements Provider
{
    const PATTERN = '/^(https?:\/\/)?(www\.)?instagram.com\/p\//';
    /**
     * @param string $url
     * @return string
     */
    public static function render(string $url): string
    {
        return static::getTemplate('instagram', ['url' => $url ]);
    }
}

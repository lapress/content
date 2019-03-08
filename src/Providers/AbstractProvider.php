<?php

namespace LaPress\Content\Providers;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
abstract class AbstractProvider
{
    const PATTERN = '';
    const PATTERN_ID = '';

    /**
     * @param string $url
     * @return bool
     */
    public static function match(string $url): bool
    {
        return preg_match(static::PATTERN, $url);
    }

    /**
     * @param string $url
     * @return string|int|null
     */
    public static function matchId(string $url)
    {
        preg_match(static::PATTERN_ID, $url, $matches);

        return end($matches);
    }

    /**
     * @param string $name
     * @param array  $vars
     * @return false|string
     */
    public static function getTemplate(string $name, array $vars = [])
    {
        ob_start();
        extract($vars);
        include __DIR__.'/../../templates/'.$name.'.php';
        $html = ob_get_contents();
        ob_end_clean();

        return $html;
    }
}

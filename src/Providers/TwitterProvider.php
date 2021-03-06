<?php

namespace LaPress\Content\Providers;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class TwitterProvider extends AbstractProvider implements Provider
{
    const PATTERN = '/^(https?:\/\/)?(www\.)?twitter.com\//';
    const PATTERN_ID = '/.*?(\\d+)/';

    /**
     * @param string $url
     * @return string
     */
    public static function render(string $url): string
    {
        $id = static::matchId($url);

        if (empty($id)) {
            return $url;
        }

        return static::getTemplate('twitter', ['id' => $id ]);
    }
}

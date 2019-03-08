<?php

namespace LaPress\Content\Providers;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class YoutubeProvider extends AbstractProvider implements Provider
{
    const PATTERN = '#^https?://(?:www\.)?(?:youtube\.com/watch|youtu\.be/)#';
    const PATTERN_ID = '/(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/user\/\S+|\/ytscreeningroom\?v=|\/sandalsResorts#\w\/\w\/.*\/))([^\/&]{10,12})/';

    /**
     * @param string $url
     * @return string
     */
    public static function render(string $url): string
    {
        return static::getTemplate('youtube', [
            'id' => static::matchId($url),
        ]);
    }
}

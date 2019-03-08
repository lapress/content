<?php

namespace LaPress\Content\Providers;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class FacebookVideoProvider extends AbstractProvider implements Provider
{
    const PATTERN = '/(?:https?:\/\/)?(?:www.|web.|m.)?facebook.com\/(?:video.php\?v=\d+|photo.php\?v=\d+|\?v=\d+)|\S+\/videos\/((\S+)\/(\d+)|(\d+))\/?/';
    const PATTERN_ID = '/(?:https?:\/\/)?(?:www.|web.|m.)?facebook.com\/(?:video.php\?v=\d+|photo.php\?v=\d+|\?v=\d+)|\S+\/videos\/((\S+)\/(\d+)|(\d+))\/?/';

    /**
     * @param string $url
     * @return string
     */
    public static function render(string $url): string
    {
        return static::getTemplate('facebook-video', [
            'url' => $url
        ]);
    }
}

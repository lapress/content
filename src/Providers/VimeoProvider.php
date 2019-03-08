<?php

namespace LaPress\Content\Providers;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class VimeoProvider extends AbstractProvider implements Provider
{
    const PATTERN = '#^https?://(.+\.)?vimeo\.com/.*#';
    const PATTERN_ID = '/(http|https)?:\/\/(www\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|)(\d+)(?:|\/\?)/';

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

        return static::getTemplate('vimeo', ['id' => $id ]);
    }
}

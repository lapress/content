<?php

namespace LaPress\Content\Shortcodes;

use LaPress\Content\Providers\FacebookVideoProvider;
use LaPress\Content\Providers\InstagramProvider;
use LaPress\Content\Providers\Provider;
use LaPress\Content\Providers\TwitterProvider;
use LaPress\Content\Providers\VimeoProvider;
use LaPress\Content\Providers\YoutubeProvider;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class EmbedShortcode implements Shortcode
{
    public static $providers = [
        YoutubeProvider::class,
        VimeoProvider::class,
        TwitterProvider::class,
        InstagramProvider::class,
        FacebookVideoProvider::class,
    ];

    public function __invoke(ShortcodeInterface $shortcode): string
    {
        $url = trim($shortcode->getContent());

        foreach (static::$providers as $provider) {
            /** @var Provider $provider */
            if ($provider::match($url)) {
                return $provider::render($url);
            }
        }

        return '';
    }
}

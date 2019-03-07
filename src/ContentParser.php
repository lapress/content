<?php

namespace LaPress\Content;

use LaPress\Content\Shortcodes\EmbedShortcode;
use LaPress\Content\Shortcodes\GalleryShortcode;
use Thunder\Shortcode\ShortcodeFacade;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class ContentParser
{
    /**
     * @var array
     */
    public static $shortcodes = [
        'embed' => EmbedShortcode::class,
        'gallery' => GalleryShortcode::class,
    ];

    /**
     * @param string $content
     * @param array  $shortcodes
     * @return string
     */
    public static function parse(string $content, array $shortcodes = []): string
    {
        $facade = new ShortcodeFacade();

        $shortcodes = array_merge(
            static::$shortcodes,
            $shortcodes
        );

        foreach ($shortcodes as $key => $shortcodeClass) {
            $facade->addHandler($key, new $shortcodeClass);
        }

        return $facade->process($content);
    }
}

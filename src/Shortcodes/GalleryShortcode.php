<?php

namespace LaPress\Content\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class GalleryShortcode implements Shortcode
{
    public function __invoke(ShortcodeInterface $shortcode): string
    {
        return '';
        return $shortcode->getContent();

    }
}

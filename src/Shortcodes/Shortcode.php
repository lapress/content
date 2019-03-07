<?php

namespace LaPress\Content\Shortcodes;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
interface Shortcode
{
    public function __invoke(ShortcodeInterface $shortcode): string;
}

<?php

namespace LaPress\Content;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class Str
{
    /**
     * @param string $string
     * @param int    $limit
     * @param string $ending
     * @return string
     */
    public static function limit(string $string, int $limit, $ending = '...')
    {
        $string = strip_tags($string);
        if (strlen($string) <= $limit) {
            return $string;
        }

        $count = 0;
        $words = collect(
            explode(' ', $string)
        )->filter(function ($word) use (&$count, $limit) {
            $count += strlen($word);

            if ($count < $limit) {
                return $word;
            }

            return false;
        });

        return $words->implode(' ').$ending;
    }
}

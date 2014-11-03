<?php
namespace Webiny\Htpl\Functions;

interface FunctionInterface
{
    /**
     * Return the html tag that the function is attached to.
     *
     * @return string
     */
    public static function getTag();

    /**
     * This is a callback method when we match the tag that the function is registered for.
     * The method will receive a list of attributes that the tag has associated.
     * The method should return a string that should replace the matching tag.
     * If the method returns false, no replacement will occur.
     *
     * @param string $content
     * @param array|null $attributes
     *
     * @return string|bool
     */
    public static function parseTag($content, $attributes);
}
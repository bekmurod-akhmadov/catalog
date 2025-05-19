<?php
namespace common\components;
class StaticFunctions
{
    public static function truncateText(string $text, int $maxLength = 100, $suffix = '...') :string {
        if (mb_strlen($text) > $maxLength) {
            return mb_substr($text, 0, $maxLength) . $suffix;
        }
        return $text;
    }
}
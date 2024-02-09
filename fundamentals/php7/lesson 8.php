<?php
/**
 * preg_replace_callback_array
 */

$bbCode = preg_replace_callback_array([
    "#<strong>(.+?)</strong>#" => function($word) {

        return '[b]' .  $word[1] . '[/b]';
    },
    "#<em>(.+?)</em>#" => function($word) {

        return '[i]' .  $word[1] . '[/i]';
    },
], 'test');
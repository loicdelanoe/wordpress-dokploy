<?php
/*
 * Plugin Name:       Clean header
 * Description:       Remove unnecessary tag in head tag
 * Version:           1.0.0
 * Requires at least: 6.4
 * Requires PHP:      8.2
 * Author:            Loïc Delanoë
 * Author URI:        https://loicdelanoe.com/
 */

require_once __DIR__ . '/includes/remove-actions.php';
require_once __DIR__ . '/includes/json-api.php';
require_once __DIR__ . '/includes/dequeued-scripts.php';

function disable_embeds_rewrites($rules)
{
    foreach ($rules as $rule => $rewrite) {
        if (false !== strpos($rewrite, 'embed=true')) {
            unset($rules[$rule]);
        }
    }
    return $rules;
}
<?php
/**
 * Local service page image paths (replaces broken WordPress CDN URLs).
 */

if (!defined('APPSDEDDY')) {
    exit;
}

define('SERVICE_IMAGES_DIR', 'assets/images/services/');

function serviceImage(string $filename): string {
    return SERVICE_IMAGES_DIR . $filename;
}

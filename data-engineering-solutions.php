<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';
header('Location: ' . pageUrl('services/data-engineering'), true, 301);
exit;

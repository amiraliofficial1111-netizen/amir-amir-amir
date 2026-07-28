<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';
header('Location: ' . pageUrl('services/ai-automation'), true, 301);
exit;

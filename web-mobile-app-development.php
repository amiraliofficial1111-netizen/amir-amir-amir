<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';
header('Location: ' . pageUrl('services/custom-saas'), true, 301);
exit;

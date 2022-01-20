<?php if (!defined('HORDE_BASE')) define('HORDE_BASE', '/srv/www/horde/web/horde');
ini_set('include_path', '/srv/www/horde/vendor/horde/autoloader/lib:/srv/www/horde/vendor/horde/form/lib/:' .  ini_get('include_path'));
        require_once('/srv/www/horde/vendor/horde/core/lib/Horde/Core/Nosql.php');
        require_once('/srv/www/horde/vendor/autoload.php');
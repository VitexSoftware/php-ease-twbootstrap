<?php

declare(strict_types=1);

/**
 * This file is part of the EaseTWBootstrap3 package
 *
 * https://github.com/VitexSoftware/php-ease-twbootstrap
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test\Ease;

require_once __DIR__.'/../vendor/autoload.php';

if ((\PHP_SAPI !== 'cli') && (session_status() === 'PHP_SESSION_NONE')) {
    session_start();
} else {
    $_SESSION = [];
}

\define('EASE_APPNAME', 'EaseUnitTest');
\define('EASE_LOGGER', 'syslog');
\define('DB_HOST', 'localhost');
\define('DB_PASSWORD', 'easetest');
\define('DB_DATABASE', 'easetest');
\define('DB_USERNAME', 'easetest');
\define('DB_PORT', 5432);
\define('DB_TYPE', 'pgsql');

#\Ease\Shared::user();
#\Ease\Shared::webPage();

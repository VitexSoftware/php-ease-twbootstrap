<?php
/**
 * Debian autoloader for php-vitexsoftware-ease-bootstrap (Ease\TWB\).
 *
 * Static file shipped in the package; nothing is generated at install time.
 */

// Dependencies (composer.json "require")
require_once '/usr/share/php/EaseHtml/autoload.php';

// PSR-4 for this package. Ease\TWB\Widgets\ is contributed by the sibling
// package php-vitexsoftware-ease-bootstrap-widgets, which ships its own
// autoloader, so a class missing here simply falls through to it.
spl_autoload_register(function (string $class): void {
    $prefixes = [
        'Ease\\TWB\\' => '/usr/share/php/EaseTWB/',
    ];
    foreach ($prefixes as $prefix => $baseDir) {
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            continue;
        }
        $file = $baseDir . str_replace('\\', '/', substr($class, $len)) . '.php';
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});

<?php

namespace ProcessWire;

if (!defined("PROCESSWIRE")) die();

/** @var ProcessWire $wire */

/**
 * ProcessWire Bootstrap Initialization
 * ====================================
 * This init.php file is called during ProcessWire bootstrap initialization process.
 * This occurs after all autoload modules have been initialized, but before the current page
 * has been determined. This is a good place to attach hooks. You may place whatever you'd
 * like in this file. For example:
 *
 * $wire->addHookAfter('Page::render', function($event) {
 *   $event->return = str_replace("</body>", "<p>Hello World</p></body>", $event->return);
 * });
 *
 */

// Import all init hooks
foreach (glob(__DIR__ . '/hooks/init/*.php') as $hook) {
  require_once $hook;
}

// Import all LazyCron hooks, import after init hooks as there may be dependencies
foreach (glob(__DIR__ . '/hooks/lazy_cron/*.php') as $hook) {
  require_once $hook;
}

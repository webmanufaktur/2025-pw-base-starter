<?php

namespace ProcessWire;

// Optional initialization file, called before rendering any template file.
// This is defined by $config->prependTemplateFile in /site/config.php.
// Use this to define shared variables, functions, classes, includes, etc. 


// share with twig views
// get the current user language with fallback
$language = $user->language && $user->language->name !== 'default' ? $user->language->name : 'en';
$view->set('language', $language);

<?php return array(
    'root' => array(
        'name' => 'processwire/processwire',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'processwire/processwire' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/deprecation-contracts' => array(
            'pretty_version' => 'v3.5.1',
            'version' => '3.5.1.0',
            'reference' => '74c71c939a79f7d5bf3c1ce9f5ea37ba0114c6f6',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/deprecation-contracts',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.31.0',
            'version' => '1.31.0.0',
            'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.31.0',
            'version' => '1.31.0.0',
            'reference' => '85181ba99b2345b0ef10ce42ecac37612d9fd341',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-php81' => array(
            'pretty_version' => 'v1.31.0',
            'version' => '1.31.0.0',
            'reference' => '4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php81',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twig/twig' => array(
            'pretty_version' => 'v3.18.0',
            'version' => '3.18.0.0',
            'reference' => 'acffa88cc2b40dbe42eaf3a5025d6c0d4600cc50',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twig/twig',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wanze/template-engine-factory' => array(
            'pretty_version' => 'v2.1.0',
            'version' => '2.1.0.0',
            'reference' => 'bd8905c4f26d9d81a4f12f256c9425d702505cd8',
            'type' => 'processwire-module',
            'install_path' => __DIR__ . '/../../site/modules/TemplateEngineFactory',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wanze/template-engine-twig' => array(
            'pretty_version' => 'v3.0.1',
            'version' => '3.0.1.0',
            'reference' => '5fee49c56fdfb019b2dc07867265e414a07ddf44',
            'type' => 'processwire-module',
            'install_path' => __DIR__ . '/../../site/modules/TemplateEngineTwig',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);

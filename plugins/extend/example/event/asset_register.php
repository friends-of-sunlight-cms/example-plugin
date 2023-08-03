<?php declare(strict_types=1);

use Sunlight\Core;

return new class {

    /**
     * Inject custom CSS and JS
     */
    function __invoke(array $args): void
    {
        $plugin = Core::$pluginManager->getPlugins()->getExtend('example');

        $args['css'][] = $plugin->getAssetPath('public/css/example.css');
        $args['js'][] = $plugin->getAssetPath('public/js/example.js');
    }
};

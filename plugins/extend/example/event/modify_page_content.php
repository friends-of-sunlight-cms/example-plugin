<?php declare(strict_types=1);

use Sunlight\Core;

return new class {

    /**
     * Add an example image to the end of each page
     */
    function __invoke(array $args): void
    {
        $plugin = Core::$pluginManager->getPlugins()->getExtend('example');

        $headingSize = $plugin->getConfig()->offsetGet('heading_size');
        $showImage = $plugin->getConfig()->offsetGet('show_image');

        $args['content'] .= '<div class="example">'
            . '<h' . $headingSize . '>' . _lang('example.plugin.name') . '</h' . $headingSize . '>'
            . '<p>' . _lang('example.plugin.description') . '</p>'

            // show image if enabled by configuration
            . ($showImage
                ? '<img src="' . _e($plugin->getAssetPath('public/images/example.png')) . '" alt="Example image" title="' . _lang('example.image.title') . '">'
                : '')

            . '</div>';
    }
};

<?php

namespace SunlightExtend\Example;

use Sunlight\Plugin\ExtendPlugin;

class ExamplePlugin extends ExtendPlugin
{

    /**
     * Inject custom CSS and JS
     */
    function onHead(array $args): void
    {
        $path = $this->getWebPath();
        $args['css'][] = $path . '/resources/css/example.css';
        $args['js'][] = $path . '/resources/js/example.js';
    }

    /**
     * This method is a callback for event 'tpl.content',
     * the event definition can be found in the 'plugin.json' file
     */
    function onPageContent(array $args): void
    {
        // add an example image to the end of each page
        $args['content'] .= '<div class="example">'
            . '<h3>' . _lang('example.plugin.name') . '</h3>'
            . '<img src="' . $this->getWebPath() . '/resources/images/example.png" alt="Example image" title="' . _lang('example.image.title') . '">'
            . '</div>';
    }

}

<?php

namespace SunlightExtend\Example;

use Sunlight\Plugin\ExtendPlugin;

class ExamplePlugin extends ExtendPlugin
{

    /**
     * Inject custom CSS and JS
     * @param array $args
     */
    function onHead(array $args): void
    {
        $path = $this->getWebPath();
        $args['css'][] = $path . '/Resources/css/example.css';
        $args['js'][] = $path . '/Resources/js/example.js';
    }

    /**
     * This method is a callback for event 'tpl.content',
     * the event definition can be found in the 'plugin.json' file
     * @param array $args
     */
    function onPageContent(array $args): void
    {
        // add an example image to the end of each page
        $args['content'] .= '<div class="example">'
            . '<h3>' . _lang('example.plugin.name') . '</h3>'
            . '<img src="' . $this->getWebPath() . '/Resources/images/example.png" alt="Example image" title="' . _lang('example.image.title') . '">'
            . '</div>';
    }

}

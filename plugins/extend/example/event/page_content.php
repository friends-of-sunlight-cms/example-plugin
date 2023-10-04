<?php

/**
 * Add an example image to the end of each page
 */
return function (array $args) {
    $headingSize = $this->getConfig()['heading_size'];
    $showImage = $this->getConfig()['show_image'];

    $args['content'] .= '<div class="example">'
        . '<h' . $headingSize . '>' . _lang('example.plugin.name') . '</h' . $headingSize . '>'
        . '<p>' . _lang('example.plugin.description') . '</p>'

        // show image if enabled by configuration
        . ($showImage
            ? '<img src="' . _e($this->getAssetPath('public/images/example.png')) . '" alt="Example image" title="' . _lang('example.image.title') . '">'
            : '')

        . '</div>';
};

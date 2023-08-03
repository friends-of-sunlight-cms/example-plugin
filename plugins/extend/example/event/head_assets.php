<?php

/**
 * Inject custom CSS and JS
 */
return function (array $args) {
    $args['css'][] = $this->getAssetPath('public/css/example.css');
    $args['js'][] = $this->getAssetPath('public/js/example.js');
};

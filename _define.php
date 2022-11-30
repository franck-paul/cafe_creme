<?php
/**
 * @brief cafe-creme, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (carnet.franck.paul@gmail.com)
 * @copyright GPL-2.0
 */
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'Café Crème',
    'Structure Aorakit-1B de Kozlika',
    'Franck Paul',
    '2.0',
    [
        'requires' => [['core', '2.24']],
        'type'     => 'theme',

        'details'    => 'https://open-time.net/?q=cafe-creme',
        'support'    => 'https://github.com/franck-paul/cafe-creme',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/cafe-creme/main/dcstore.xml',
    ]
);

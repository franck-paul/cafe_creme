<?php

/**
 * @brief cafe_creme, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (contact@open-time.net)
 * @copyright GPL-2.0
 */
declare(strict_types=1);

if (isset($this) && is_object($this) && method_exists($this, 'registerModule') && isset($this->id) && is_string($this->id)) {
    $this->registerModule(
        'Café Crème',
        'Structure Aorakit-1B de Kozlika',
        'Franck Paul',
        '8.2',
        [
            'date'     => '2026-04-05T12:02:52+0200',
            'requires' => [['core', '2.36']],
            'type'     => 'theme',
            'overload' => true,

            'details'    => 'https://open-time.net/?q=cafe_creme',
            'support'    => 'https://github.com/franck-paul/cafe_creme',
            'repository' => 'https://raw.githubusercontent.com/franck-paul/cafe_creme/main/dcstore.xml',
            'license'    => 'gpl2',
        ]
    );
}

<?php

/*
 * This file is part of the package ucph_base_config.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * June 2023 Nanna Ellegaard, University of Copenhagen.
 */

defined('TYPO3') or die('Access denied.');

// Docs: https://t3terminal.com/blog/typo3-site-configuration/

// List of color themes
$GLOBALS['SiteConfiguration']['site']['columns']['ucph_color_theme'] = [
    'label' => 'LLL:EXT:ucph_base_config/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_label',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['LLL:EXT:ucph_base_config/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_1', 'theme_1', 'icon' => 'EXT:ucph_base_config/Resources/Public/Icons/Extension.svg.svg'],
            ['LLL:EXT:ucph_base_config/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_2', 'theme_2', 'icon' => 'EXT:ucph_base_config/Resources/Public/Icons/Extension.svg.svg'],
            ['LLL:EXT:ucph_base_config/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_3', 'theme_3', 'icon' => 'EXT:ucph_base_config/Resources/Public/Icons/Extension.svg.svg'],
            ['LLL:EXT:ucph_base_config/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_4', 'theme_4', 'icon' => 'EXT:ucph_base_config/Resources/Public/Icons/Extension.svg.svg'],
            ['LLL:EXT:ucph_base_config/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_5', 'theme_5', 'icon' => 'EXT:ucph_base_config/Resources/Public/Icons/Extension.svg.svg']
        ],
    ],
    'default' => 'theme_1',
    'fieldWizard' => [
        'selectIcons' => [
            'disabled' => false,
        ],
    ],
];

// add a new palette for custom field of backend users
$GLOBALS['SiteConfiguration']['site']['palettes']['ucph_color_theme'] = [
    'showitem' => 'ucph_color_theme'
];

// Assign pallette
$GLOBALS['SiteConfiguration']['site']['types']['0']['showitem'] = str_replace(
    'base,',
    'base,--palette--;;ucph_color_theme,',
    $GLOBALS['SiteConfiguration']['site']['types']['0']['showitem']
);

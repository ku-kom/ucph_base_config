<?php

/**
 * Icon Registry
 */

defined('TYPO3') || die();

return [
    // icon identifier
    'ucph_base_config' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:ucph_base_config/Resources/Public/Icons/Extension.svg',
    ],
];

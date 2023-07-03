<?php

/*
 * This file is part of the package ucph_base_config.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die();

(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        [
            'full_site_width' => [
                'exclude' => true,
                'label' => 'LLL:EXT:ucph_base_config/Resources/Private/Language/locallang_be.xlf:tt_content.full_site_width.title',
                'config' => [
                    'type' => 'check',
                ]
            ],
        ]
    );

    // Add in tab "Appearence"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'frames',
        'full_site_width',
        'after:space_after_class'
    );
})();

<?php

/*
 * This file is part of the package ucph_base_config.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * June 2023 Nanna Ellegaard, University of Copenhagen.
 */

defined('TYPO3') or die();

(function () {
    $tempColumns = [
       'full_site_width' => [
           'label' => 'LLL:EXT:ucph_base_config/Resources/Private/Language/locallang_be.xlf:tt_content.full_site_width.title',
           'config' => [
               'type' => 'check',
           ]
       ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns, 1);

    // Add in tab "Appearence"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        'full_site_width',
        '',
        'after:space_after_class'
    );
})();

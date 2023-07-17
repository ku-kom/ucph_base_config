<?php declare(strict_types=1);
/*
 * This file is part of the package ucph_base_config.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * University of Copenhagen.
 */

defined('TYPO3_MODE') or die();

/**
 * Set default image cropping values
 */

// Extension key
$ext = 'ucph_base_config';


if (!isset($GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'])) {
    $GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = [];
}

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = array_replace_recursive(
    $GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'],
    [
        'Desktop' => [
            'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:imgsize-desktop',
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.16_9',
                    'value' => 16 / 9
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.1_1',
                    'value' => 1.0
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.4_3',
                    'value' => 4 / 3
                 ],
                 'NaN' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.free',
                    'value' => 0.0
                 ],
            ],
            'selectedRatio' => '16:9',
            'cropArea' => [
                'x' => 0.0,
                'y' => 0.0,
                'width' => 1.0,
                'height' => 1.0,
            ],
            'focusArea' => [
                'x' => 1 / 3,
                'y' => 1 / 3,
                'width' => 1 / 3,
                'height' => 1 / 3,
            ],
            'coverAreas' => [
                [
                    'x' => 0.05,
                    'y' => 0.85,
                    'width' => 0.9,
                    'height' => 0.1,
                ]
            ],
        ],
        'Tablet' => [
            'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:imgsize-tablet',
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.16_9',
                    'value' => 16 / 9
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.1_1',
                    'value' => 1.0
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.4_3',
                    'value' => 4 / 3
                 ],
                 'NaN' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.free',
                    'value' => 0.0
                 ],
            ],
            'selectedRatio' => '16:9',
            'cropArea' => [
                'x' => 0.0,
                'y' => 0.0,
                'width' => 1.0,
                'height' => 1.0,
            ],
            'focusArea' => [
                'x' => 1 / 3,
                'y' => 1 / 3,
                'width' => 1 / 3,
                'height' => 1 / 3,
            ],
            'coverAreas' => [
                [
                    'x' => 0.05,
                    'y' => 0.85,
                    'width' => 0.9,
                    'height' => 0.1,
                ]
            ],
        ],
        'Mobile' => [
            'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:imgsize-mobile',
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.16_9',
                    'value' => 16 / 9
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.1_1',
                    'value' => 1.0
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.4_3',
                    'value' => 4 / 3
                 ],
                 'NaN' => [
                    'title' => 'LLL:EXT:'. $ext .'/Resources/Private/Language/locallang_be.xlf:ratio.free',
                    'value' => 0.0
                 ],
            ],
            'selectedRatio' => '1:1',
            'cropArea' => [
                'x' => 0.0,
                'y' => 0.0,
                'width' => 1.0,
                'height' => 1.0,
            ],
            'focusArea' => [
                'x' => 1 / 3,
                'y' => 1 / 3,
                'width' => 1 / 3,
                'height' => 1 / 3,
            ],
            'coverAreas' => [
                [
                    'x' => 0.05,
                    'y' => 0.85,
                    'width' => 0.9,
                    'height' => 0.1,
                ]
            ],
        ],
    ]
);

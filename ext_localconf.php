<?php

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

$versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
// Only include page.tsconfig if TYPO3 version is below 12 so that it is not imported twice.
if ($versionInformation->getMajorVersion() < 12) {
    ExtensionManagementUtility::addPageTSConfig('
      @import "EXT:ucph_base_config/Configuration/page.tsconfig"
   ');
}

// Register "ucph" as global fluid namespace
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['ucph'] = ['UniversityOfCopenhagen\\UcphBaseConfig\\ViewHelpers'];

// Login screen and backend branding
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend'] = [
    'backendFavicon' => '',
    'backendLogo' => 'EXT:ucph_base_config/Resources/Public/Css/Backend/Branding/ku.svg',
    'loginBackgroundImage' => 'EXT:ucph_base_config/Resources/Public/Css/Backend/Branding/ku-login-background.jpg',
    'loginLogo' => 'EXT:ucph_base_config/Resources/Public/Css/Backend/Branding/ku-login.png',
    'loginHighlightColor' => '#901a1e',
    'loginFootnote' => 'University of Copenhagen CMS'
];
<?php

declare(strict_types=1);

/**
 * Hook to save timestamp on parent page
 * whenever a page is edited or a content element is added or modified.
 */

 namespace UniversityOfCopenhagen\UcphBaseConfig\Hooks;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\MathUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Connection;

class LatestPageUpdates
{
    /**
     * @param string $status
     * @param string $table
     * @param string $id
     * @param array $fieldArray
     * @param \TYPO3\CMS\Core\DataHandling\DataHandler $dataHandler
     */
    public function processDatamap_afterDatabaseOperations($status, $table, $id, $fieldArray, $dataHandler)
    {
        if (!($table === 'tt_content' || $table === 'pages')) {
            return;
        }

        if ($table === 'pages' && MathUtility::canBeInterpretedAsInteger($id) === false) {
            $id = $dataHandler->substNEWwithIDs[$id];
        }

        if ($table === 'tt_content') {
            $id = isset($fieldArray['pid']) ? $fieldArray['pid'] : $dataHandler->recordInfo('tt_content', $id, 'pid')['pid'];
        }

        GeneralUtility::makeInstance(ConnectionPool::class)
        ->getConnectionForTable('pages')
        ->update(
            'pages',
            ['ucph_lastpageupdates_timestamp' => time()],
            ['uid' => (int)$id],
            [Connection::PARAM_INT]
        );
    }
}
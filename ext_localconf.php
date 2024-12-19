<?php

/**
 * Add missing language entries for TYPO3 < v13 for TCA renderType selectTree (was added in v14 patch and backported to v13).
 * @see https://review.typo3.org/c/Packages/TYPO3.CMS/+/87465
 *
 * Howto: Override translation files (do not have to be complete translation files, just add the missing language keys)
 * @see https://docs.typo3.org/permalink/t3coreapi:xliff-translating-custom
 */

// only for below v13: override translated language files for treeSelect because new labels for treeSelect only exist for +v13
// only adds ADDITIONAL language labels
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']
['EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf'][]
    = 'EXT:selecttree/Resources/Private/Language/locallang_alt_doc_additional.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']
['EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf'][]
    = 'EXT:selecttree/Resources/Private/Language/de.locallang_alt_doc_additional.xlf';

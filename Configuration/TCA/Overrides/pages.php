<?php
defined('TYPO3_MODE') or die();

/* Register PageTSconfig */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'cs_maps_extended',
    'Configuration/TSconfig/page.tsconfig',
    'EXT:cs_maps_extended - Page TSconfig'
);

<?php
defined('TYPO3_MODE') || die();

(function () {
    TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
        ->registerImplementation(\Clickstorm\GoMapsExt\Domain\Model\Category::class,
            \Clickstorm\CsMapsExtended\Domain\Model\Category::class);
})();


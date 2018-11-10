<?php
defined('TYPO3_MODE') || exit('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Azurgruen.AzgrJsontable',
            'Jsontable',
            [
                'Table' => 'show'
            ],
            // non-cacheable actions
            [
                'Table' => ''
            ]
        );        
        

    },
    $_EXTKEY
);

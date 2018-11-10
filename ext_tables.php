<?php
defined('TYPO3_MODE') or die();

//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'JSON File Editor');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Azurgruen.AzgrJsontable',
            'Jsontable',
            'Jsontable'
        );

        $pluginSignature = str_replace('_', '', $extKey) . '_jsontable';
        
        $GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['AzgrJsontableWizicon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($extKey) . 'Classes/Helper/AzgrJsontableWizicon.php';
        
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,recursive';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $extKey . '/Configuration/FlexForms/flexform_table.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'JSON Table');

    },
    $_EXTKEY
);
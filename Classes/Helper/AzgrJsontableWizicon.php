<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class AzgrJsontableWizicon {

        /**
         * Processing the wizard items array
         *
         * @param array $wizardItems The wizard items
         * @return array Modified array with wizard items
         */
        function proc($wizardItems)     {
                $wizardItems['plugins_tx_azgrjsontable_jsontable'] = array(
                        'icon' => ExtensionManagementUtility::extRelPath('azgr_jsontable') . 'Resources/Public/Icons/wizard.png',
                        //'title' => $GLOBALS['LANG']->sL('LLL:EXT:examples/locallang.xlf:pierror_wizard_title'),
                        //'description' => $GLOBALS['LANG']->sL('LLL:EXT:examples/locallang.xlf:pierror_wizard_description'),
                        'title' => 'JSON Tabelle',
                        'description' => 'Darstellung von JSON Daten als Tabelle'
                );
                return $wizardItems;
        }
}

?>
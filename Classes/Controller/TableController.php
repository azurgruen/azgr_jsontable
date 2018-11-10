<?php

namespace Azurgruen\AzgrJsontable\Controller;

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Core\Resource\ResourceFactory;
//use \TYPO3\CMS\Core\Resource\Folder;
//use \TYPO3\CMS\Core\Resource\File;

/**
 * Class TableController
 *
 */
class TableController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {
    
        
    /**
     * @var \TYPO3\CMS\Core\Resource\Folder
     */
    protected $folder;
    
    /**
     * @var \TYPO3\CMS\Core\Resource\FileInterface
     */
    protected $file;
    
    
    public function showAction() {
	    
		if ($this->settings['fileurl']) {
			$opts = [
				'http' => [
					'method' => 'GET',
					'header' => [
						'Accept: application/json, text/javascript, */*; q=0.01',
						'X-Requested-With: XMLHttpRequest'
					]
				]
			];
			$context = stream_context_create($opts);
			//$result = GeneralUtility::getUrl($this->settings['fileurl']);
			$result = file_get_contents($this->settings['fileurl'], false, $context);
			$data = json_decode($result, true);
		} else if ($this->settings['filepath'] && @is_dir(PATH_site . $this->settings['filepath'])) {
			$allowedExt = ['json'];
			//$this->files = GeneralUtility::getFilesInDir(PATH_site . $configuration['filePath']);
			$resourceFactory = ResourceFactory::getInstance();
			$storage = $resourceFactory->getStorageObject(0);
			$this->file = $storage->getFile($this->settings['filepath']);
			$data = $this->file->getContents();
		}
		\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($data);
		
		$this->view->assignMultiple([
			'data' => $data
		]);

    }
    
}
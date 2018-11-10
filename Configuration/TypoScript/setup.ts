
plugin.tx_azgrjsontable_jsontable {
	view {
		templateRootPaths.0 = EXT:azgr_jsontable/Resources/Private/Templates/
		templateRootPaths.1 = {$plugin.tx_azgrjsontable_jsontable.view.templateRootPath}
		partialRootPaths.0 = EXT:azgr_jsontable/Resources/Private/Partials/
		partialRootPaths.1 = {$plugin.tx_azgrjsontable_jsontable.view.partialRootPath}
		layoutRootPaths.0 = EXT:azgr_jsontable/Resources/Private/Layouts/
		layoutRootPaths.1 = {$plugin.tx_azgrjsontable_jsontable.view.layoutRootPath}
	}
	persistence {
		storagePid = {$plugin.tx_azgrjsontable_jsontable.persistence.storagePid}
		#recursive = 1
	}
	features {
		#skipDefaultArguments = 1
	}
	mvc {
		#callDefaultActionIfActionCantBeResolved = 1
	}
	settings {
		#includejQuery = {$plugin.tx_azgrjsontable_jsontable.settings.includejQuery}
	}
	_LOCAL_LANG {
		default {
			#dateFormat = %d.%m.%y
		}
	}
}
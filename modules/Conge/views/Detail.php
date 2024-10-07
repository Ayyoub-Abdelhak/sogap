<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce S.A.
 * *********************************************************************************** */

/**
 * Class Vtiger_Detail_View.
 *
 * @package View
 */
class Conge_Detail_View extends Vtiger_Detail_View
{

	public function preProcess(App\Request $request, $display = true)
	{
		parent::preProcess($request, false);

		$moduleName = $request->getModule();
		$recordId = $request->getInteger('record');
		$recordModel = $this->record->getRecord();
		$this->recordStructure = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_DETAIL);
		$fieldsInHeader = $this->recordStructure->getFieldInHeader();

		$eventHandler = new App\EventHandler();
		$eventHandler->setRecordModel($recordModel);
		$eventHandler->setModuleName($moduleName);
		$viewLinks = $this->record->getDetailViewLinks([
			'MODULE' => $moduleName,
			'RECORD' => $recordId,
			'VIEW' => $request->getByType('view', 2),
		]);
		$eventHandler->setParams([
			'viewLinks' => $viewLinks,
		]);
		$eventHandler->trigger('DetailViewBefore');
		$viewLinks = $eventHandler->getParams()['viewLinks'];

		$this->record->getWidgets();
		$viewer = $this->getViewer($request);

		$soldeFN1 = (float)$recordModel->get('soldefinnmoins1');
		$droitCp = (float)$recordModel->get('droit_cp_annee_encours');
		$soldeInitial = $soldeFN1 + $droitCp;
		$janvier = (float)$recordModel->get('janvier');
		$fevrier = (float)$recordModel->get('fevrier');
		$mars = (float)$recordModel->get('mars');
		$avril = (float)$recordModel->get('avril');
		$mai = (float)$recordModel->get('mai');
		$juin = (float)$recordModel->get('juin');
		$juillet = (float)$recordModel->get('juillet');
		$aout = (float)$recordModel->get('aout');
		$septembre = (float)$recordModel->get('septembre');
		$octobre = (float)$recordModel->get('octobre');
		$novembre = (float)$recordModel->get('novembre');
		$decembre = (float)$recordModel->get('decembre');
		$consomations = $janvier + $fevrier + $mars + $avril + $mai + $juin + $juillet + $aout + $septembre + $octobre + $novembre + $decembre;
		$soldeCP = $soldeInitial - $consomations;
		$recordModel->set('solde_initial', $soldeInitial);
		$recordModel->set('consommations_cp_n', $consomations);
		$recordModel->set('solde_cp_n', $soldeCP);
		
		$viewer->assign('RECORD', $recordModel);
		$moduleModel = $this->record->getModule();
		$currentUserModel = Users_Record_Model::getCurrentUserModel();
		$selectedTabLabel = $request->getByType('tab_label', 'Text');
		$requestMode = $request->getByType('requestMode');
		$mode = $request->getMode();
		if (empty($selectedTabLabel) && !empty($requestMode)) {
			if ('full' == $requestMode) {
				$selectedTabLabel = 'LBL_RECORD_DETAILS';
			} else {
				$selectedTabLabel = 'LBL_RECORD_SUMMARY';
			}
		} elseif (empty($requestMode) && empty($mode)) {
			$selectedTabLabel = App\Config::module($moduleName, 'DEFAULT_VIEW_RECORD');
			if (empty($selectedTabLabel)) {
				if ('Detail' === $currentUserModel->get('default_record_view')) {
					$selectedTabLabel = 'LBL_RECORD_DETAILS';
				} else {
					if ($moduleModel->isSummaryViewSupported() && $this->record->widgetsList) {
						$selectedTabLabel = 'LBL_RECORD_SUMMARY';
					} else {
						$selectedTabLabel = 'LBL_RECORD_DETAILS';
					}
				}
			}
		}
		$detailViewLabel = [];
		if (isset($viewLinks['DETAILVIEWRELATED']) && \is_array($viewLinks['DETAILVIEWRELATED'])) {
			foreach ($viewLinks['DETAILVIEWRELATED']  as $link) {
				$detailViewLabel[] = $link->getLabel();
			}
		}
		if (isset($viewLinks['DETAILVIEWTAB']) && \is_array($viewLinks['DETAILVIEWTAB'])) {
			foreach ($viewLinks['DETAILVIEWTAB']  as $link) {
				$detailViewLabel[] = $link->getLabel();
				if ($link->getLabel() === $selectedTabLabel) {
					$params = vtlib\Functions::getQueryParams($link->getUrl());
					$this->defaultMode = $params['mode'];
				}
			}
			if (!\in_array($selectedTabLabel, $detailViewLabel)) {
				$selectedTabLabel = 'LBL_RECORD_SUMMARY';
			}
		}
		$viewer->assign('SELECTED_TAB_LABEL', $selectedTabLabel);
		$viewer->assign('MODULE_MODEL', $moduleModel);
		$viewer->assign('DETAILVIEW_LINKS', $viewLinks);
		$viewer->assign('DETAILVIEW_WIDGETS', $this->record->widgets);
		$viewer->assign('FIELDS_HEADER', $fieldsInHeader);
		$viewer->assign('CUSTOM_FIELDS_HEADER', $this->record->getCustomHeaderFields());
		$viewer->assign('IS_EDITABLE', $this->record->getRecord()->isEditable());
		$viewer->assign('IS_DELETABLE', $this->record->getRecord()->privilegeToMoveToTrash());
		$viewer->assign('VIEW_MODEL', $this->record);
		$viewer->assign('QUICK_LINKS', $this->record->getSideBarLinks([
			'MODULE' => $moduleName,
			'ACTION' => $request->getByType('view', 1),
		]));
		$viewer->assign('DEFAULT_RECORD_VIEW', $currentUserModel->get('default_record_view'));
		$viewer->assign('IS_READ_ONLY', $request->getBoolean('isReadOnly') || $this->record->getRecord()->isReadOnly());
		$viewer->assign('RECORD_ACTIVITY_NOTIFIER', $recordId && \App\Config::performance('recordActivityNotifier', false) && $moduleModel->isTrackingEnabled() && $moduleModel->isPermitted('RecordActivityNotifier'));
		if ($display) {
			$this->preProcessDisplay($request);
		}
	}
}

<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce S.A.
 * ********************************************************************************** */

class Conge_List_View extends Vtiger_List_View
{
	/**
	 * Function to initialize the required data in smarty to display the List View Contents.
	 *
	 * @param App\Request   $request
	 * @param Vtiger_Viewer $viewer
	 */
	public function initializeListViewContents(App\Request $request, Vtiger_Viewer $viewer)
	{
		$moduleName = $request->getModule();
		$pageNumber = $request->getInteger('page');
		$orderBy = $request->getArray('orderby', \App\Purifier::STANDARD, [], \App\Purifier::SQL);
		if (empty($orderBy) && !($orderBy = App\CustomView::getSortBy($moduleName))) {
			$moduleInstance = CRMEntity::getInstance($moduleName);
			if ($moduleInstance->default_order_by && $moduleInstance->default_sort_order) {
				$orderBy = [];
				foreach ((array) $moduleInstance->default_order_by as $value) {
					$orderBy[$value] = $moduleInstance->default_sort_order;
				}
			}
		}
		if (empty($pageNumber)) {
			$pageNumber = App\CustomView::getCurrentPage($moduleName, $this->viewName);
		}
		if (!$this->listViewModel) {
			$this->listViewModel = Vtiger_ListView_Model::getInstance($moduleName, $this->viewName);
		}
		if (!$request->isEmpty('searchResult', true)) {
			$this->listViewModel->set('searchResult', $request->getArray('searchResult', 'Integer'));
		}
		$linkParams = ['MODULE' => $moduleName, 'ACTION' => $request->getByType('view', 'Alnum'), 'CVID' => $this->viewName];
		$linkModels = $this->listViewModel->getListViewMassActions($linkParams);
		$pagingModel = new Vtiger_Paging_Model();
		$pagingModel->set('page', $pageNumber);
		$pagingModel->set('viewid', $this->viewName);
		if (!empty($orderBy)) {
			$this->listViewModel->set('orderby', $orderBy);
		}
		$operator = 's';
		if (!$request->isEmpty('operator', true)) {
			$operator = $request->getByType('operator');
			$this->listViewModel->set('operator', $operator);
			$viewer->assign('OPERATOR', $operator);
		}
		if (!$request->isEmpty('search_key', true)) {
			$searchKey = $request->getByType('search_key', 'Alnum');
			$searchValue = App\Condition::validSearchValue($request->getByType('search_value', 'Text'), $moduleName, $searchKey, $operator);
			$this->listViewModel->set('search_key', $searchKey);
			$this->listViewModel->set('search_value', $searchValue);
			$viewer->assign('ALPHABET_VALUE', $searchValue);
		}
		if ($request->has('entityState')) {
			$this->listViewModel->set('entityState', $request->getByType('entityState'));
		}
		$advancedConditions = $request->has('advancedConditions') ? $request->getArray('advancedConditions') : [];
		if ($advancedConditions) {
			$this->listViewModel->set('advancedConditions', \App\Condition::validAdvancedConditions($advancedConditions));
		} else {
			$advancedConditions = $this->listViewModel->get('advancedConditionsRaw');
		}
		$searchParams = App\Condition::validSearchParams($moduleName, $request->getArray('search_params'));
		if (!empty($searchParams) && \is_array($searchParams)) {
			$transformedSearchParams = $this->listViewModel->getQueryGenerator()->parseBaseSearchParamsToCondition($searchParams);
			$this->listViewModel->set('search_params', $transformedSearchParams);
			$this->listViewModel->loadSearchLockedFields($request);
			//To make smarty to get the details easily accesible
			foreach ($request->getArray('search_params') as $fieldListGroup) {
				$searchParamsRaw[] = $fieldListGroup;
				foreach ($fieldListGroup as $fieldSearchInfo) {
					$fieldSearchInfo['searchValue'] = $fieldSearchInfo[2];
					$fieldSearchInfo['fieldName'] = $fieldName = $fieldSearchInfo[0];
					$fieldSearchInfo['specialOption'] = \in_array($fieldSearchInfo[1], ['ch', 'kh']) ? true : '';
					$searchParams[$fieldName] = $fieldSearchInfo;
				}
			}
		} else {
			$searchParamsRaw = $searchParams = [];
		}
		if (!$this->listViewHeaders) {
			$this->listViewHeaders = $this->listViewModel->getListViewHeaders();
		}
		if (!$this->listViewEntries) {
			$this->listViewEntries = $this->listViewModel->getListViewEntries($pagingModel);
		}
		
		foreach ($this->listViewEntries as $entry) {
			$soldeFN1 = (float)$entry->get('soldefinnmoins1');
			$droitCp = (float)$entry->get('droit_cp_annee_encours');
			$soldeInitial = $soldeFN1 + $droitCp;
			$janvier = (float)$entry->get('janvier');
			$fevrier = (float)$entry->get('fevrier');
			$mars = (float)$entry->get('mars');
			$avril = (float)$entry->get('avril');
			$mai = (float)$entry->get('mai');
			$juin = (float)$entry->get('juin');
			$juillet = (float)$entry->get('juillet');
			$aout = (float)$entry->get('aout');
			$septembre = (float)$entry->get('septembre');
			$octobre = (float)$entry->get('octobre');
			$novembre = (float)$entry->get('novembre');
			$decembre = (float)$entry->get('decembre');
			$consomations = $janvier + $fevrier + $mars + $avril + $mai + $juin + $juillet + $aout + $septembre + $octobre + $novembre + $decembre;
			$soldeCP = $soldeInitial - $consomations;
			$entry->set('solde_initial', $soldeInitial);
			$entry->set('consommations_cp_n', $consomations);
			$entry->set('solde_cp_n', $soldeCP);
		}
		
		$noOfEntries = \count($this->listViewEntries);
		$viewer->assign('MODULE', $moduleName);
		if (!$this->listViewLinks) {
			$this->listViewLinks = $this->listViewModel->getListViewLinks($linkParams);
		}
		$viewer->assign('LISTVIEW_LINKS', $this->listViewLinks);
		$viewer->assign('LISTVIEW_MASSACTIONS', $linkModels['LISTVIEWMASSACTION'] ?? []);
		$viewer->assign('PAGING_MODEL', $pagingModel);
		$viewer->assign('PAGE_NUMBER', $pageNumber);
		$viewer->assign('ORDER_BY', $orderBy);
		$viewer->assign('LISTVIEW_ENTRIES_COUNT', $noOfEntries);
		$viewer->assign('LISTVIEW_HEADERS', $this->listViewHeaders);
		$viewer->assign('LISTVIEW_ENTRIES', $this->listViewEntries);
		$totalCount = false;
		if (App\Config::performance('LISTVIEW_COMPUTE_PAGE_COUNT')) {
			if (!$this->listViewCount) {
				$this->listViewCount = $this->listViewModel->getListViewCount();
			}
			$pagingModel->set('totalCount', (int) $this->listViewCount);
			$totalCount = (int) $this->listViewCount;
		}
		$viewer->assign('LISTVIEW_COUNT', $totalCount);
		$viewer->assign('PAGE_COUNT', $pagingModel->getPageCount());
		$viewer->assign('START_PAGIN_FROM', $pagingModel->getStartPagingFrom());
		$viewer->assign('VIEW_MODEL', $this->listViewModel);
		$viewer->assign('IS_MODULE_EDITABLE', $this->listViewModel->getModule()->isPermitted('CreateView'));
		$viewer->assign('IS_MODULE_DELETABLE', $this->listViewModel->getModule()->isPermitted('Delete'));
		$viewer->assign('SEARCH_DETAILS', $searchParams);
		$viewer->assign('SEARCH_PARAMS', $searchParamsRaw);
		$viewer->assign('ADVANCED_CONDITIONS', $advancedConditions);
		$viewer->assign('LOCKED_EMPTY_FIELDS', $request->isEmpty('lockedEmptyFields', true) ? [] : $request->getArray('lockedEmptyFields'));
	}
}

<?php

/**
 * Preview PDF modal view file.
 *
 * @package View
 */
class Vtiger_PreviewPDF_View extends Vtiger_BasicModal_View
{
	/** {@inheritdoc} */
	public function checkPermission(App\Request $request)
	{
		$moduleName = $request->getModule();
		if (!Users_Privileges_Model::getCurrentUserPrivilegesModel()->hasModuleActionPermission($moduleName, 'ExportPdf')) {
			throw new \App\Exceptions\NoPermitted('LBL_PERMISSION_DENIED', 406);
		}
		if (!$request->isEmpty('record', true) && !\App\Privilege::isPermitted($moduleName, 'DetailView', $request->getInteger('record'))) {
			throw new \App\Exceptions\NoPermittedToRecord('ERR_NO_PERMISSIONS_FOR_THE_RECORD', 406);
		}
	}

	/** {@inheritdoc} */
	public function getModalScripts(App\Request $request)
	{
		return $this->checkAndConvertJsScripts([
			'modules.Vtiger.resources.PDF',
			'modules.' . $request->getModule() . '.resources.PDF',
		]);
	}

	/** {@inheritdoc} */
	public function process(App\Request $request)
	{
		$this->preProcess($request);
		$viewer = $this->getViewer($request);
		$pdfModuleName = $moduleName = $request->getModule();
		$view = $request->getByType('fromview', \App\Purifier::STANDARD);
		$recordId = $request->isEmpty('record', true) ? null : $request->getInteger('record');
		if ($isRelatedView = ('RelatedList' === $view)) {
			$pdfModuleName = $request->getByType('relatedModule', \App\Purifier::ALNUM);
		}
		$handlerClass = \Vtiger_Loader::getComponentClassName('Model', 'PDF', $pdfModuleName);
		$pdfModel = new $handlerClass();
		$active = false;

		if ($isRelatedView) {
			$templates = $pdfModel->getActiveTemplatesForModule($pdfModuleName, $view);
		} elseif ($recordId) {
			$templates = $pdfModel->getActiveTemplatesForRecord($recordId, $view, $pdfModuleName);
		} else {
			$templates = $pdfModel->getActiveTemplatesForModule($pdfModuleName, $view);
		}

		$records = $recordId ? [$recordId] : \Vtiger_Mass_Action::getRecordsListFromRequest($request);

		foreach ($templates as $template) {
			if ($template->get('default')) {
				foreach ($records as $record) {
					if ($template->checkFiltersForRecord((int) $record)) {
						$active = true;
						break 2;
					}
				}
			}
		}

		$viewer->assign('STANDARD_TEMPLATES', $templates);
		$viewer->assign('RECORD_ID', $recordId);
		$viewer->assign('FROM_VIEW', $view);
		$viewer->assign('ACTIVE', $active);
		$viewer->assign('MODULE_NAME', $moduleName);
		$viewer->assign('VIEW_NAME', $request->getByType('viewname', \App\Purifier::ALNUM));
		$viewer->assign('ENTITY_STATE', $request->isEmpty('entityState') ? '' : $request->getByType('entityState'));
		$viewer->assign('SELECT_MODE', 'radio');
		if ($isRelatedView) {
			$viewer->assign('RELATED_MODULE', $pdfModuleName);
			$viewer->assign('RELATION_ID', $request->getInteger('relationId'));
			$viewer->assign('CV_ID', $request->getByType('cvId', \App\Purifier::ALNUM));
		}
		$viewer->view('ExportPDFPreview.tpl', $pdfModuleName);
		$this->postProcess($request);
	}
}

{*<!-- tpl-Base-ExportPDFPreview -->*}
{strip}
	<form id="pdfExportModal" action="index.php" method="POST">
		<div class="modal-header">
			<h5 class="modal-title"><span class="fas fa-file-pdf mr-1"></span>PDF</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<input type="hidden" name="module" value="{$MODULE_NAME}" />
			<input type="hidden" name="action" value="PDF" />
			<input type="hidden" name="mode" value="generate" />
			<input type="hidden" id="pdfPreviewFlag" name="flag" value="I" />
			<input type="hidden" name="record" value="{$RECORD_ID}" />
			<input type="hidden" name="fromview" value="{$FROM_VIEW}" />
			<input type="hidden" name="viewname" value="{$VIEW_NAME}" />
			<input type="hidden" name="entityState" value="{\App\Purifier::encodeHtml($ENTITY_STATE)}" />
			{if isset($RELATED_MODULE)}
				<input type="hidden" name="relatedModule" value="{$RELATED_MODULE}" />
				<input type="hidden" name="relationId" value="{$RELATION_ID}" />
				<input type="hidden" name="cvId" value="{$CV_ID}" />
			{/if}
			<input type="hidden" name="single_pdf" value="0" />
			<input type="hidden" name="email_pdf" value="0" />
			<span class="js-records-info pl-3 text-info d-none" data-js="text"></span>
			<div class="card">
				<div class="card-header">{\App\Language::translate('LBL_AVAILABLE_TEMPLATES', $MODULE_NAME)}</div>
				<div class="card-body">
					{foreach from=$STANDARD_TEMPLATES item=TEMPLATE}
						<div class="js-pdf-template-content form-group row" data-js="container">
							<label class="col-sm-11 col-form-label text-left pt-0" for="pdfPreviewTpl{$TEMPLATE->getId()}">
								{\App\Language::translate($TEMPLATE->get('primary_name'), $MODULE_NAME)}
								<span class="secondaryName ml-2">[ {\App\Language::translate($TEMPLATE->get('secondary_name'), $MODULE_NAME)} ]</span>
							</label>
							<div class="col-sm-1">
								<input type="radio" class="checkbox" id="pdfPreviewTpl{$TEMPLATE->getId()}" name="pdf_template[]"
									value="{$TEMPLATE->getId()}"
									{if $TEMPLATE->get('default') eq 1}checked="checked"{/if} />
							</div>
						</div>
					{/foreach}
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" id="js-pdf-preview-btn" class="btn btn-primary js-submit-button" {if !$ACTIVE}disabled="disabled"{/if}>
				<span class="fas fa-eye mr-1"></span>Aperçu
			</button>
			<button type="button" id="js-pdf-download-btn" class="btn btn-success js-submit-button" {if !$ACTIVE}disabled="disabled"{/if}>
				<span class="fas fa-download mr-1"></span>Télécharger
			</button>
			<button class="btn btn-danger" type="reset" data-dismiss="modal">
				<span class="fas fa-times mr-1"></span>{\App\Language::translate('LBL_CANCEL', $MODULE_NAME)}
			</button>
		</div>
	</form>
	<script>
	(function () {
		function submitPdfModal(flag, target) {
			var form = document.getElementById('pdfExportModal');
			document.getElementById('pdfPreviewFlag').value = flag;
			form.target = target;
			var loader = $.progressIndicator({
				message: app.vtranslate('JS_PDF_GENERATING'),
				position: 'html',
				blockInfo: { enabled: true }
			});
			form.submit();
			loader.progressIndicator({ mode: 'hide' });
			app.hideModalWindow();
		}
		document.getElementById('js-pdf-preview-btn').addEventListener('click', function () {
			submitPdfModal('I', '_blank');
		});
		document.getElementById('js-pdf-download-btn').addEventListener('click', function () {
			submitPdfModal('D', '_self');
		});
	}());
	</script>
{/strip}

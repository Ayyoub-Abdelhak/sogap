/* {[The file is published on the basis of YetiForce Public License 6.5 that can be found in the following directory: licenses/LicenseEN.txt or yetiforce.com]} */
"use strict";

Vtiger_Edit_Js(
  "ISTRN_Edit_Js",
  {},
  {
    getRecordsListParams: function (container) {
      var params = this._super(container);
      if (jQuery.inArray(params.module, ["Products", "Services"]) != -1) {
        params.cvId = "145";
      }
      return params;
    },
  }
);

UPDATE `a_yf_pdf` SET
    `body_content` = '<div data-page-group><div data-watermark><img src="storage/Pdf/watermark/38" style="opacity:1;"></div><table cellspacing="0" style="border-collapse:collapse;border-style:solid;font-family:\'DejaVu Sans\';font-size:9px;line-height:1.1em;margin-bottom:15px;text-align:center;width:100%;">\n\t<thead>\n\t\t<tr>\n\t\t\t<th colspan="2" rowspan="1" style="background-color:#0b375e;border-color:#000000;border-style:solid;border-width:1px;font-size:9px;width:50%;">\n\t\t\t<p style="text-align:left;"><span style="font-size:14px;"><span style="color:#ffffff;">Commande Fournisseur</span></span></p>\n\t\t\t</th>\n\t\t\t<th colspan="2" rowspan="1" style="background-color:#d9e1f2;border-color:#000000;border-style:solid;border-width:1px;font-size:9px;width:50%;"><span style="font-size:12px;">$(relatedRecord : vendorid|vendorname|Vendors)$</span></th>\n\t\t</tr>\n\t</thead>\n\t<tbody>\n\t\t<tr>\n\t\t\t<td colspan="2" rowspan="1" style="border-color:#000000;border-style:solid;border-width:1px;text-align:left;">Casablanca, le $(general : CurrentDate)$</td>\n\t\t\t<td colspan="2" rowspan="2" style="border-color:#000000;border-style:solid;border-width:1px;text-align:center;">$(relatedRecord : vendorid|addresslevel8a|Vendors)$</td>\n\t\t</tr>\n\t\t<tr>\n\t\t\t<td colspan="2" rowspan="1" style="border-color:#000000;border-style:solid;border-width:1px;text-align:center;">\n\t\t\t<div style="text-align:left;"><strong>REFERENCE: $(record : svendorenquiries_no)$</strong></div>\n\t\t\t<div style="text-align:left;">Du: $(record : datecommande)$</div>\n\t\t\t</td>\n\t\t</tr>\n\t</tbody>\n</table>\n<br>\n$(custom : ProductsTableCommandeFournisseurVersion)$\n<p> </p>\n<h3><span style="font-size:8px;"><strong>Mode de règlement</strong>: $(record : mr)$</span></h3>\n<p><span style="font-size:8px;"><strong>Livraison et contact</strong>: $(record : commentaire)$</span><br>\n </p>\n   </div><div data-page-group data-margin-top="40" data-margin-bottom="40">$(custom : ConditionsGeneralesAchat)$</div>',
    `header_content`  = '',
    `footer_content`  = '',
    `watermark_type`  = 1,
    `watermark_image` = 'storage/Pdf/watermark/38',
    `watermark_angle` = 0,
    `margin_left`     = 30,
    `margin_right`    = 30,
    `margin_top`      = NULL,
    `margin_bottom`   = NULL
WHERE `pdfid` = 55;

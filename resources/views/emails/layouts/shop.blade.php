<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="address=no;email=no;telephone=no">
    <title></title>
    <style type="text/css">
        /* Modified:30/10/2014 */
        /* Global Reset */

        body {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        body, p, h1, h2, h3, h4, h5, h6, img, table, td, #emailBody {
            margin-top: 0;
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 0;
            padding-top: 0;
            padding-bottom: 0;
            padding-left: 0;
            padding-right: 0;
        }
        a, #outlook a {
            padding-top: 0;
            padding-bottom: 0;
            padding-left: 0;
            padding-right: 0;
            display: inline-block;
        }
        a, a span {
            text-decoration: none;
        }
        a img {
            border: none;
        }
        img {
            height: auto;
            width: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }
        .imageFix {
            display: block;
        }
        table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        table, td {
            border-collapse: collapse;
            border-spacing: 0;
        }
        .ExternalClass {
            display: block !important;
            width: 100%;
        }
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
            line-height: 100%;
        }
        .ReadMsgBody, .ExternalClass {
            width: 100%;
        }
        /* Default Typography */
        td, th, p, a, li, h1, h2, h3, h4, h5, h6 {
            -webkit-text-size-adjust : none;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-bottom: 5px;	/* Outlook.com default */
        }
        p, p.MsoNormal {
            margin-bottom: 24px; /* Outlook.com default */
        }
        /* Alignment */
        .alignCenter, .eBody .alignCenter, .alignCenter p, .eBody.alignCenter p, .eBody .alignCenter p {
            text-align: center;
        }
        table.alignCenter, .alignCenter table, .alignCenter img {
            margin-left: auto;
            margin-right: auto;
        }
        .alignLeft, .eBody .alignLeft, .eBody.alignLeft p, .eBody .alignLeft p, .highlight.alignLeft, .invoiceTable2 .alignLeft {
            text-align: left;
        }
        table.alignLeft, .alignLeft table, .alignLeft img {
            margin-left: 0;
            margin-right: auto;
        }
        .alignRight, .eBody .alignRight, .eBody.alignRight p, .eBody .alignRight p, .highlight.alignRight, .width132.alignRight, .invoiceTable2 .alignRight {
            text-align: right;
        }
        table.alignRight, .alignRight table, .alignRight a {
            margin-left: auto;
            margin-right: 0;
        }
        /* Visual Help */
        .desktopHide {
            display: none;
            font-size: 0;
            max-height: 0;
            width: 0;
            line-height: 0;
            overflow: hidden;
            mso-hide: all;
        }
        /* Email Body */
        body, #emailBody, .emailBodyCell {
            height: 100%;
            width: 100%;
            min-height: 1000px;
        }
        .emailBodyCell {
            padding-top: 16px;
            padding-bottom: 16px;
            padding-left: 16px;
            padding-right: 16px;
        }
        /* Summary */
        .emailSummary {
            display: none !important;
            font-size: 0 !important;
            max-height: 0 !important;
            line-height: 0 !important;
            padding: 0 !important;
            mso-hide: all;
            overflow: hidden !important;
            float: none !important;
            width: 0 !important;
            height: 0 !important;
        }
        /* Spacing */
        .emptyCell, .eBody .emptyCell, .highlight .emptyCell, .eBody .space6, .eBody .space10, .invoiceHead .space6, .eBody .space16, .invoiceHead .space16, .space32, .eBody .space32, .invoiceHead .space32, .emptyCell {
            line-height: 0 !important;
            font-size: 0 !important;
            padding-bottom: 0;
            padding-top: 0;
            padding-left: 0;
            padding-right: 0;
        }
        .eBody .space6, .invoiceHead .space6 {
            height: 6px;
            width: 6px;
        }
        .eBody .space10, .invoiceHead .space10 {
            height: 10px;
            width: 10px;
        }
        .eBody .space16, .invoiceHead .space16 {
            height: 16px;
            width: 16px;
        }
        .space32, .eBody .space32, .invoiceHead .space32 {
            height: 32px;
            width: 16px;
        }
        .pdTp0, .eBox .pdTp0, .highlight.pdTp0, .eBody.pdTp0, .invoiceTable2 .pdTp0, .invoiceTable2.twcoList .pdTp0 {
            padding-top: 0px;
        }
        .pdTp32, .eBox .pdTp32, .highlight.pdTp32, .eBody.pdTp32, .invoiceTable2 .pdTp32, .invoiceTable2.twcoList .pdTp32 {
            padding-top: 32px;
        }
        .pdBt16, .eBox .pdBt16, .highlight.pdBt16, .eBody.pdBt16, .eBox .pdBt16, .invoiceTable2 .pdBt16, .invoiceTable2.twcoList .pdBt16 {
            padding-bottom: 16px;
        }
        .pdRg16, .eBox .pdRg16, .highlight.pdRg16, .eBody.pdRg16, .eBox .pdRg16, .invoiceTable2 .pdRg16, .invoiceTable2.twcoList .pdRg16 {
            padding-right: 16px;
        }
        .pdLf16, .eBox .pdLf16, .highlight.pdLf16, .eBody.pdLf16, .invoiceTable2 .pdLf16, .invoiceTable2.twcoList .pdLf16 {
            padding-left: 16px;
        }
        .pdLf0, .eBox .pdLf0, .highlight.pdLf0, .eBody.pdLf0, .invoiceTable2 .pdLf0, .invoiceTable2.twcoList .pdLf0 {
            padding-left: 0;
        }
        /* Widths */
        .width40, .width54, .width64, .width80, .width84, .width116, .width246, .width248, .width132, .width184, .width312, .width380, .width412, .width448, .width458 {
            text-align: left;
            vertical-align: top;
        }
        .width40 {
            width: 40px;
        }
        .width54 {
            width: 54px;
        }
        .width64 {
            width: 64px;
        }
        .width80 {
            width: 80px;
        }
        .width84 {
            width: 84px;
        }
        .width132 {
            width: 132px;
        }
        .width116 {
            width: 116px;
        }
        .width184 {
            width: 184px;
        }
        .width246 {
            width: 246px;
        }
        .width248 {
            width: 248px;
        }
        .width312 {
            width: 312px;
        }
        .width380 {
            width: 380px;
        }
        .width412 {
            width: 412px;
        }
        .width448 {
            width: 448px;
        }
        .width458 {
            width: 458px;
        }
        /* Email Container */
        .eBox {
            width: 544px;
            margin-left: auto;
            margin-right: auto;
        }
        /* General Button Style */
        .eBox .btnLfTp, .eBox .btnLfBt, .eBox .btnRgTp, .eBox .btnRgBt {
            font-size: 0 !important;
            line-height: 100%;
            width: 4px;
            height: 4px;
            text-align: left;
            padding-top: 0;
            padding-left: 0;
            padding-right: 0;
            padding-bottom: 0;
        }
        .eBox .btnRgTp, .eBox .btnRgBt {
            text-align: right;
        }
        .eBox .btnLfTp, .eBox .btnRgTp {
            vertical-align: top;
        }
        .eBox .btnLfBt, .eBox .btnRgBt {
            vertical-align: bottom;
        }
        .eBox .btnLfTp img, .eBox .btnLfBt img, .eBox .btnRgTp img, .eBox .btnRgBt img {
            font-size: 0 !important;
            line-height: 0 !important;
            width: 4px;
            height: 4px;
        }
        .eBox .btnLfTp img, .eBox .btnLfBt img {
            margin-left: 0;
            margin-right: auto;
        }
        .eBox .btnRgTp img, .eBox .btnRgBt img {
            margin-left: auto;
            margin-right: 0;
        }
        .eBox .btnMain {
            padding-right: 18px;
            padding-left: 18px;
            padding-top: 8px;
            padding-bottom: 8px;
            height: 20px;
            font-size: 18px;
            line-height: 20px;
            mso-line-height-rule: exactly;
            text-align: center;
            vertical-align: middle;
        }
        /* Main Button */
        .mainBtn td {
            padding-bottom: 0;
        }
        .mainBtn a {
            font-weight: bold;
        }
        /* Light Button */
        .lightBtn td {
            padding-bottom: 0;
        }
        .lightBtn a {
            font-weight: bold;
            text-align: center;
        }
        /* Sublte Button */
        .subtleBtn td {
            padding-top: 16px;
            padding-bottom: 32px;
            font-size: 14px;
        }
        /* Options Button */
        .optionsButton {
            width: 152px;
            margin-left: auto;
            text-align: left;
        }
        .optionsButton .btnMain {
            padding-top: 0;
            padding-bottom: 0;
            padding-left: 6px;
            padding-right: 2px;
            height: 16px;
            line-height: 16px;
            text-align: left;
        }
        .optionsButton .btnLfTp, .optionsButton .btnLfBt, .optionsButton .btnRgTp, .optionsButton .btnRgBt {
            height: 5px;
        }
        .optionsButton .btnMain a, .optionsButton .btnMain span {
            font-size: 12px;
        }
        .optionsButton .btnIcon {
            width: 20px;
            height: 16px;
            text-align: center;
            vertical-align: middle;
            padding-top: 0;
            padding-bottom: 0;
            padding-left: 0;
            padding-right: 0;
        }
        .optionsButton .btnIcon img {
            width: 16px;
            height: 16px;
        }
        .optionsButton .btnIcon a, .optionsButton .btnIcon img {
            margin-top: auto;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
        }
        /* Tag */
        .tag .btnLfTp, .tag .btnLfBt, .tag .btnRgTp, .tag .btnRgBt {
            width: 2px;
            height: 2px;
        }
        .tag .btnLfTp img, .tag .btnLfBt img, .tag .btnRgTp img, .tag .btnRgBt img {
            width: 2px;
            height: 2px;
        }
        .tag .tagName {
            font-size: 11px;
            text-transform: uppercase;
            padding-left: 4px;
            padding-right: 4px;
            padding-top: 2px;
            padding-bottom: 2px;
            white-space: nowrap;
        }
        .tag .tag_space {
            background-color: transparent;
            font-size: 0 !important;
            line-height: 100%;
            height: 4px;
            text-align: left;
            padding-top: 0;
            padding-left: 0;
            padding-right: 0;
            padding-bottom: 0;
        }
        /* Sections */
        .eHeader, .highlight, .eBody {
            width: 512px;
        }
        .highlight, .eBody {
            padding-top: 12px;
            padding-bottom: 0;
            padding-left: 12px;
            padding-right: 12px;
        }
        /* Header */
        .eHeader {
            padding: 5px 0;
        }
        .eHeaderLogo, .eHeaderOptions {
            height: 75px;
            font-size: 0 !important;
        }
        .eHeaderLogo, .eHeaderLogo a {
            height: 75px;
            text-align: left;
            font-size: 18px;
            font-weight: bold;
        }
        .eHeaderLogo a {
            line-height: 0;
        }
        .eHeaderLogo img {
            vertical-align: top;
        }
        .eHeaderLogoText {
            text-align: left;
            vertical-align: top;
            padding-top: 10px;
            padding-bottom: 0;
        }
        .eHeaderLogoText a {
            text-align: left;
            font-size: 26px;
            line-height: 32px;
            font-weight: bold;
        }
        .eHeaderOptions {
            text-align: right;
            vertical-align: top;
        }
        .hBorder {
            font-size: 0 !important;
            height: 4px;
            line-height: 4px;
        }
        /* Footer */
        .eFooter {
            text-align: center;
            font-size: 12px;
            line-height: 21px;
            padding-top: 14px;
            width: 544px;
        }
        .eFooter a, .eFooter a span {
            text-decoration: underline;
        }
        .eFooter .highFix, .eFooter .highFix span {
            text-decoration: none;
            cursor: pointer;
        }
        /* Highlight Area */
        .highlight {
            text-align: center;
        }
        h1 {
            font-size: 18px;
            line-height: 30px;
            font-weight: bold;
        }
        .highlight p {
            font-size: 14px;
            line-height: 22px;
        }
        .profilePicture, .highlightIcon {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 64px;
            height: 64px;
        }
        .profilePicture td {
            padding-top: 10px;
            padding-bottom: 6px;
        }
        .highlightIcon td {
            padding-bottom: 16px;
        }
        .profileName {
            font-size: 16px;
            line-height: 24px;
        }
        .profileName span {
            font-weight: bold;
        }
        .bannerLink a {
            display: block;
            height: 194px;
            line-height: 0;
            text-align: center;
            font-size: 16px;
        }
        .bannerLink img {
            display: block;
            vertical-align: top;
            margin-left: auto;
            margin-right: auto;
        }
        /* Content Body */
        .eBody p, .eBody li {
            font-size: 14px;
            line-height: 22px;
            text-align: left;
        }
        .eBody p a span {
            font-weight: bold;
        }
        .quoteTable td {
            padding-left: 16px;
            padding-top: 10px;
        }
        .aSignature {
            font-size: 12px;
            line-height: 18px;
        }
        .eBody .aSignature a, .eBody .aSignature a span {
            font-weight: normal;
        }
        /* Content Articles */
        h2 {
            font-size: 18px;
            line-height: 26px;
            margin-bottom: 5px;
            font-weight: normal;
        }
        h2 span {
            font-weight: bold;
        }
        .messageSection .width116, .messageSection .messageArrow, .messageSection .width380 {
            padding-bottom: 16px;
        }
        .messageArrow .bubble {
            margin-left: auto;
            margin-right: 0;
        }
        .messageArrow .bubble2 {
            margin-left: 0;
            margin-right: auto;
        }
        .messageOptions.alignRight {
            margin-left: auto;
            margin-right: 0;
        }
        .bubble table, .bubble table td {
            width: 16px;
            height: 26px;
        }
        .bubbleContent {
            padding-top: 12px;
            padding-left: 12px;
            padding-right: 12px;
        }
        .senderProfile .profilePicture td {
            padding-top: 0;
            padding-bottom: 14px;
        }
        .senderProfile p, .entryBox .senderProfile p {
            font-size: 12px;
            line-height: 19px;
        }
        .senderProfile a {
            font-size: 14px;
        }
        /* Invoice #1 */
        .invoiceTable td {
            padding-bottom: 16px;
            font-size: 12px;
            line-height: 19px;
            vertical-align: top;
        }
        .serviceName {
            font-size: 14px;
            line-height: 22px;
        }
        .invoiceTable .downloadInv {
            text-align: center;
        }
        .downloadInv a {
            width: 100%;
            margin-left: auto;
            margin-right: auto
        }
        .invoiceTable .amount {
            font-weight: bold;
            font-size: 16px;
            line-height: 24px;
        }
        /* Invoice #2 */
        .invoiceHead, .invoiceHead td, .invoiceHead p {
            text-align: left;
            font-size: 12px;
        }
        .invoiceHead p, .invoiceList td {
            line-height: 19px;
        }
        .invoiceHead .amount {
            font-weight: bold;
            font-size: 16px;
        }
        h4 {
            font-size: 14px;
            font-weight: bold;
        }
        h4 span {
            font-size: 12px;
            font-weight: normal;
        }
        .ihTitle strong, .ihTitle span {
            font-size: 14px;
        }
        .invoiceTable2 th, .invoiceTable2 td {
            padding-top: 14px;
            padding-bottom: 14px;
            padding-left: 16px;
            padding-right: 16px;
            font-size: 14px;
            line-height: 19px;
        }
        .invoiceTable2 th {
            padding-top: 0;
            padding-bottom: 6px;
            font-size: 12px;
            line-height: 16px;
            font-weight: bold;
        }
        .servDetails {
            font-size: 12px;
        }
        .invoiceTable2 .subTotal {
            font-size: 14px;
            line-height: 22px;
        }
        .eTotal .amount {
            font-size: 16px;
            font-weight: bold;
        }
        /* Invoice #3 */
        .invoiceTable3 th, .invoiceTable3 td {
            padding-right: 16px;
            padding-left: 0;
        }
        .invoiceTable3 th {
            padding-top: 6px;
            border-bottom: 0;
        }
        .invoiceTable3 td {
            padding-top: 0;
            padding-left: 0;
        }
        .invoiceTable3 .prodTitle {
            padding-bottom: 0;
            padding-top: 12px;
            padding-left: 16px;
            border-bottom: 0;
        }
        .invoiceTable3 .prodDesc {
            font-size: 12px;
            line-height: 18px;
            padding-right: 0;
            text-align: left;
            vertical-align: top;
            padding-right: 8px;
        }
        .invoiceTable3 .subTotal, .invoiceTable3 .eTotal {
            padding-top: 16px;
        }
        .invoiceTable3 .eQuantity {
            width: 40px;
            padding-right: 0;
            text-align: center;
            vertical-align: top;
        }
        .invoiceTable3 .servDetails {
            font-size: 11px;
        }
        .invoiceTable3 .prodImg {
            padding-left: 16px;
            padding-right: 10px;
        }
        /* Price Tables */
        .priceTable .priceColumn {
            width: 72px;
            padding-right: 1px;
            text-align: left;
            vertical-align: top;
        }
        .priceColumn table {
            width: 100%;
        }
        .priceColumn td, .tableOption td {
            font-size: 14px;
            text-align: center;
            padding-top: 12px;
            padding-bottom: 12px;
            height: 24px;
        }
        .tableOption td {
            line-height: 18px !important;
        }
        .priceColumn .mobileHide {
            line-height: 18px !important;
        }
        .priceColumn .tableBtn {
            border-bottom: 0;
            font-size: 12px;
        }
        .priceColumn .tableBtn a {
            font-weight: bold;
        }
        .priceColumn th {
            font-size: 12px;
            line-height: 17px;
            mso-line-height-rule: exactly;
            font-weight: normal;
            text-align: center;
            width: 72px;
            height: 60px;
            padding-top: 6px;
            padding-bottom: 6px;
        }
        .priceColumn.recommend th {
            font-weight: bold;
        }
        .priceColumn th strong {
            font-size: 18px;
            line-height: 26px;
            mso-line-height-rule: exactly;
            height: 26px;
            font-weight: bold;
        }
        .tableOption {
            text-align: left;
            vertical-align: top;
            padding-right: 1px;
        }
        .tableOption td {
            text-align: right;
        }
        .tableOption th {
            display: block;
            height: 72px;
            font-size: 0;
            line-height: 0;
            mso-line-height-rule: exactly;
            padding-top: 0;
            padding-bottom: 0;
            padding-left: 0;
            padding-right: 0;
        }
        /* Stats */
        .twcoList td, .invoiceTable2.twcoList td {
            padding-bottom: 0;
            padding-top: 10px;
            padding-left: 0;
            padding-right: 0;
            line-height: 22px;
        }
        .twcoList th, .eBody .twcoList th {
            padding-left: 0;
        }
        .visitStats {
            vertical-align: middle;
        }
        .visitStats table {
            margin-top: auto;
            margin-bottom: auto;
        }
        .visitStats td {
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 14px;
        }
        .visitStats .visitPro {
            padding-left: 0;
            padding-right: 0;
            width: 46px;
            text-align: center;
            font-weight: bold;
        }
        /* Text Colors */
        a, a span, .tableBtn a span, .priceColumn td a span {
            color: #235daa;
        }
        .entryBox p, .eBody, .invoiceTable td, .invoiceTable p, .invoiceTable2 th, .invoiceTable2 td, .invoiceTable2 p, .priceTable td, .priceTable th, .priceTable p, h4, .subTotal .amount, .invoiceHead .amount, .twcoList strong, .eBody .twcoList strong, .priceColumn td span {
            color: #54565c;
        }
        .mainBtn a, .mainBtn a span, .tag .tagName, .secondaryBtn a, .secondaryBtn a span, .lightBtn a, .lightBtn span, .defaultBtn a, .defaultBtn a span, .priceColumn.recommend th, .visitStats .visitPro {
            color: #ffffff;
        }
        .eFooter, .eFooter .highFix, .eFooter .highFix span {
            color: #b2b2b2;
        }
        .eFooter a, .eFooter a span {
            color: #808080;
        }
        .optionsButton .btnMain a, .optionsButton .btnMain span {
            color: #acafb3;
        }
        .highlight p, .psMsg, .senderProfile p, .entryBox .senderProfile p, .invoiceHead, .invoiceHead td, .invoiceHead p, .invoiceTable2 .subTotal, .servDetails, .aSignature, .eBody .aSignature a, .eBody .aSignature a span, h4 span, .invoiceTable2 th, .twcoList td, .invoiceTable2.twcoList td, .priceTable .tableBtn, .priceColumn span, .invoiceTable3 .prodDesc, .label, .subtleBtn td, .subtleBtn td a, .subtleBtn td a span {
            color: #a1a2a5;
        }
        h1, h1 span, h2, h2 span, .eHeaderLogo, .eHeaderLogo a, .eHeaderLogoText, .eHeaderLogoText a, .eHeaderLogoText span, .invoiceHead .ihBlack, span.serviceName {
            color: #1a446e;
        }
        .priceTable th strong, .amount, .priceColumn.recommend, .priceTable .spBtn, .priceTable .spBtn span, .profileName, .profileName span, .invoiceTable .amount, .bannerLink a {
            color: #3cbff3;
        }
        .quoteTable td {
            color: #82858f;
        }
        /* Background Colors */
        .defaultBtn td, .priceColumn.recommend th {
            background-color: #235daa;
        }
        .ReadMsgBody, .ExternalClass, .eBody, .invoiceTable2, .invoiceTable2 td, .invoiceTable2 th, .priceColumn.recommend .tableBtn, body, #emailBody, .emailBodyCell {
            background-color: #ffffff;
        }
        .highlight, .bubble td, .bubble table td, .invoiceTable2 .subTotal, .priceColumn th, .priceColumn.recommend td, .optionsButton td {
            background-color: #f6f6f7;
        }
        .visitStats .visitPro {
            background-color: #54565c;
        }
        .mainBtn td {
            background-color: #7fbe56;
        }
        .visitStats .statColor1 {
            background-color: #7fbe56;
        }
        .tag td {
            background-color: #3cbff3;
        }
        .lightBtn td {
            background-color: #3cbff3;
        }
        .secondaryBtn td {
            background-color: #eda18a;
        }
        .bubble2 td {
            background-color: #e7f7fe;
        }
        .visitStats .statColor2 {
            background-color: #4acacb;
        }
        .visitStats .statColor3 {
            background-color: #fe8676;
        }
        .visitStats .statColor4 {
            background-color: #ef954d;
        }
        .visitStats .statColor5 {
            background-color: #a478e5;
        }
        /* Borders */
        .highlight, .eBody, .blank, .hBorder {
            border-left: 1px solid #b3bdca;
            border-right: 1px solid #b3bdca;
        }
        .highlight, .eBody, .blank, .hBorder {
            border-left: 1px solid #b3bdca;
            border-right: 1px solid #b3bdca;
        }
        .hBorder {
            background: #b3bdca;
        }
        .eHeader, .eFooter {
            border-left: 4px solid #ffffff;
            border-right: 4px solid #ffffff;
        }
        .bottomLine, .invoiceTable2 th, .eTotal {
            border-bottom: 1px solid #ebebeb;
        }
        .invoiceTable3 .prodTitle {
            border-top: 1px solid #ebebeb;
        }
        .quoteTable td {
            border-left: 6px solid #ebebeb;
        }
        .tableOption td, .tableOption th, .priceColumn td, .priceColumn th {
            border-bottom: 1px solid #cacaca;
        }
        .priceColumn.recommend th {
            border-bottom: 1px solid #235daa;
        }
        @media only screen {
            td[class=btnLfTp] img, td[class=btnRgTp] img, td[class=btnLfBt] img, td[class=btnRgBt] img {
                display: none !important;
                font-size: 0 !important;
                max-height: 0 !important;
                line-height: 0 !important;
                padding: 0 !important;
                mso-hide: all;
                overflow: hidden !important;
                float: none !important;
                width: 0 !important;
                height: 0 !important;
            }
            td[class=btnLfTp] {
                -webkit-border-radius: 4px 0 0 0 !important;
                border-radius: 4px 0 0 0 !important;
            }
            td[class=btnRgTp] {
                -webkit-border-radius: 0 4px 0 0 !important;
                border-radius: 0 4px 0 0 !important;
            }
            td[class=btnRgBt] {
                -webkit-border-radius: 0 0 4px 0 !important;
                border-radius: 0 0 4px 0 !important;
            }
            td[class=btnLfBt] {
                -webkit-border-radius: 0 0 0 4px !important;
                border-radius: 0 0 0 4px !important;
            }
            td[class=btnMain] {
                padding: 0 !important;
            }
            td[class=btnMain] a {
                display: block !important;
                padding: 5px 10px !important;
                line-height: 18px !important;
            }
            table[class=tag] td {
                border-collapse: separate !important;
            }
            table[class=tag] td[class=btnLfTp], table[class=tag] td[class=btnRgTp], table[class=tag] td[class=btnLfBt], table[class=tag] td[class=btnRgBt] {
                line-height: 2px !important;
            }
            td[class=tagName], td[class~=invoiceHead] td[class=tagName] {
                font-size: 11px !important;
                line-height: 14px !important;
            }
            table[class=tag] td[class=btnLfTp] {
                -webkit-border-radius: 2px 0 0 0 !important;
                border-radius: 2px 0 0 0 !important;
            }
            table[class=tag] td[class=btnRgTp] {
                -webkit-border-radius: 0 2px 0 0 !important;
                border-radius: 0 2px 0 0 !important;
            }
            table[class=tag] td[class=btnRgBt] {
                -webkit-border-radius: 0 0 2px 0 !important;
                border-radius: 0 0 2px 0 !important;
            }
            table[class=tag] td[class=btnLfBt] {
                -webkit-border-radius: 0 0 0 2px !important;
                border-radius: 0 0 0 2px !important;
            }
            table[class=optionsButton] {
                width: auto !important;
            }
            table[class=optionsButton] td[class=btnMain] a {
                padding: 2px 4px 2px 6px !important;
            }
            td[class=btnIcon] a {
                display: block;
                padding: 0 2px;
            }
            table[class=subtleBtn] td {
                padding: 9px 0 25px !important;
            }
            table[class=subtleBtn] a {
                display: block !important;
                padding: 7px 8px !important;
            }
        }
        @media only screen and (max-width: 600px) {
            td[class=emailBodyCell] {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        }
        @media only screen and (max-width: 560px) {
            td[class=emailBodyCell] {
                padding: 0 !important;
            }
            td[class=highlight], td[class~=highlight], td[class=eBody], td[class~=eBody], td[class=blank], td[class~=hBorder], td[class=eHeader], td[class=eFooter] {
                border-left: 0 !important;
                border-right: 0 !important;
            }
            table[id=emailBody], td[class=emailBodyCell], table[class=eBox], td[class=highlight], td[class~=highlight], td[class=eBody], td[class~=eBody], div[class=bannerLink] a, div[class=bannerLink] img {
                display: block !important;
                width: auto !important;
            }
            td[class=highlight], td[class~=highlight], td[class=eBody], td[class~=eBody] {
                overflow: hidden !important;
            }
            td[class=width40], td[class~=width40], td[class=width54], td[class~=width54], td[class=width64], td[class~=width64], td[class=width80], td[class~=width80], td[class=width84], td[class~=width84], td[class=width116], td[class~=width116], td[class=width246], td[class~=width246], td[class=width248], td[class~=width248], td[class=width132], td[class~=width132], td[class=width184], td[class~=width184], td[class=width312], td[class~=width312], td[class=width380], td[class~=width380], td[class=width412], td[class~=width412], td[class=width448], td[class~=width448], td[class=width458], td[class~=width458], td[class=priceColumn], td[class~=priceColumn], td[class~=subTotal], table[class=invoiceList] td, td[class=width184], td[class~=width184], table[class=entryBox] td[class=alignLeft], table[class=invoiceTable] td[class~=alignLeft], table[class=invoiceTable] td[class=alignRight], td[class~=invoiceHead] table, td[class~=invoiceHead] td[class=alignLeft], table[class~=messageSection], td[class~=senderProfile], td[class~=messageArrow], td[class~=prodDesc], td[class~=eQuantity], td[class~=highlight] td[class=alignLeft], table[class=statsData] td[class~=width248] {
                width: 100% !important;
                display: block !important;
                padding-right: 0 !important;
            }
            div[class=bannerLink] a {
                height: auto !important;
            }
            div[class=bannerLink] a, div[class=bannerLink] img {
                width: 100% !important;
            }
            td[class=highlight] h1, td[class~=highlight] h1 {
                font-size: 28px !important;
                line-height: 36px !important;
            }
            td[class=eBody] h2, td[class~=eBody] h2, td[class=priceColumn] th, td[class~=priceColumn] th strong {
                font-size: 22px !important;
                line-height: 30px !important;
                margin-bottom: 8px !important;
            }
            strong[class=amount], td[class~=eTotal] span[class=amount] {
                font-size: 20px !important;
                line-height: 24px !important;
            }
            td[class=btnMain] a {
                font-size: 20px;
            }
            td[class=priceColumn] th, td[class~=priceColumn] th, td[class~=prodTitle] h4, td[class~=invoiceHead] p[class=amount] {
                font-size: 18px !important;
                line-height: 26px !important;
            }
            td[class=eBody] p, td[class~=eBody] p, td[class=highlight] p, td[class~=highlight] p, table[class=invoiceTable2] td, table[class~=invoiceTable2] td, span[class=serviceName], td[class=priceColumn] td, td[class~=priceColumn] td, td[class~=highlight] h4, table[class=subtleBtn] a {
                font-size: 16px !important;
                line-height: 24px !important;
            }
            td[class=eBody] p, td[class~=eBody] p, td[class=highlight] p, td[class~=highlight] p {
                margin-bottom: 18px;
            }
            td[class~=invoiceHead] td, td[class~=invoiceHead] p, span[class=aSignature], td[class~=highlight] h4 span, span[class=servDetails] {
                font-size: 14px !important;
                line-height: 21px !important;
            }
            table[class=invoiceTable] td {
                font-size: 13px !important;
                line-height: 21px !important;
            }
            table[class~=twcoList] td {
                line-height: 30px !important;
            }
            td[class=btnIcon] a {
                display: block !important;
                padding: 7px 8px !important;
            }
            td[class=highlight], td[class~=highlight], td[class=eBody], td[class~=eBody] {
                padding-top: 16px !important;
                padding-left: 16px !important;
                padding-right: 16px !important;
            }
            table[class=entryBox] td[class=width132], table[class=entryBox] td[class~=width132] {
                text-align: center !important;
            }
            table[class~=messageSection], table[class=entryBox] td[class=width132] a img, table[class=entryBox] td[class~=width132] a img {
                margin-top: 16px !important;
                margin-bottom: 16px !important;
            }
            td[class~=highlight] td[class~=width116], td[class=highlight] table[class=invoiceTable] td[class~=downloadInv] {
                text-align: center !important;
            }
            td[class~=highlight] table[class=invoiceList] td[class~=width116], table[class=invoiceTable] td[class~=width116] {
                text-align: left !important;
            }
            td[class~=highlight] td[class~=width116] img {
                margin-top: 16px !important;
                margin-bottom: 16px !important;
            }
            table[class=profilePicture] td {
                padding-top: 8px !important;
                padding-bottom: 4px !important;
            }
            table[class~=messageSection] td[class=width380] {
                padding-bottom: 0 !important;
            }
            td[class~=messageArrow] {
                padding-bottom: 0 !important;
                text-align: center !important;
                vertical-align: top !important;
                overflow: hidden !important;
                height: 26px !important;
            }
            td[class~=messageArrow] table {
                transform: rotate(90deg) !important;
                -ms-transform: rotate(90deg) !important;
                -webkit-transform: rotate(90deg) !important;
                margin-right: auto !important;
                margin-left: auto !important;
            }
            td[class~=messageArrow] table[class=bubble] {
                margin-top: 5px !important;
            }
            td[class~=messageArrow] table[class=bubble2] {
                margin-top: -5px !important;
            }
            table[class=messageOptions], table[class~=messageOptions] {
                width: 100% !important;
                overflow: hidden !important;
            }
            table[class=messageOptions] td[class=moBtn], table[class~=messageOptions] td[class~=moBtn], table[class=statsData] {
                width: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
                float: left !important;
                margin-top: 16px !important;
            }
            table[class=invoiceTable2], table[class~=invoiceTable2] {
                width: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
                float: left !important;
            }
            table[class=mainBtn], table[class~=mainBtn], table[class=secondaryBtn], table[class~=secondaryBtn], table[class=defaultBtn], table[class~=defaultBtn], table[class=lightBtn], table[class~=lightBtn], table[class=subtleBtn] {
                width: 100% !important;
                margin: 0 !important;
            }
            table[class=invoiceTable2] td, table[class~=invoiceTable2] td {
                -webkit-box-sizing: border-box !important;
                -moz-box-sizing: border-box !important;
                box-sizing: border-box !important;
                text-align: left !important;
                padding-right: 16px !important;
            }
            table[class=invoiceTable2] td[class=width312] {
                border-top: 1px solid #ebebeb !important;
                padding-top: 16px !important;
            }
            table[class~=invoiceTable3] td[class~=prodImg] {
                height: 1px !important;
                position: relative !important;
                overflow: visible !important;
                padding: 0 !important;
            }
            td[class~=prodImg] img {
                position: absolute !important;
                right: 16px !important;
                top: 0 !important;
            }
            table[class~=invoiceTable3] td {
                padding-left: 16px !important;
            }
            table[class~=invoiceTable3] td[class~=prodDesc] {
                padding-right: 112px !important;
            }
            table[class~=invoiceTable3] td[class~=prodDesc] {
                font-size: 14px !important;
                line-height: 21px !important;
            }
            td[class=width248 pdBt16 pdRg16 alignCenter], td[class=highlight pdBt16 alignLeft] td[class=width116 pdRg16], td[class=highlight pdBt16 alignLeft] td[class=alignLeft] {
                                                                                                                                                                   padding-right: 0 !important;
                                                                                                                                                                   text-align: center !important;
                                                                                                                                                               }
            td[class=width248 pdBt16 pdRg16 alignCenter] img, td[class=highlight pdBt16 alignLeft] td[class=width116 pdRg16] img {
                                                                                                                                 display: inline-block !important;
                                                                                                                             }
            td[class~=senderProfile], table[class=bubble] td[class=width380] {
                padding-bottom: 0 !important;
            }
            td[class~=senderProfile] p {
                margin-bottom: 0 !important;
            }
            td[class=priceColumn], td[class~=priceColumn] {
                padding-bottom: 32px !important;
            }
            td[class=priceColumn] th, td[class~=priceColumn] th {
                padding: 16px 0 !important;
            }
            td[class=priceColumn] td, td[class~=priceColumn] td {
                border: 0 !important;
            }
            td[class=priceColumn] td[class=tableBtn] {
                padding: 0 !important;
            }
            td[class=priceColumn] img, td[class~=priceColumn] img {
                vertical-align: top !important;
                margin: 2px 6px 0 0 !important;
            }
            td[class=priceColumn] a, td[class~=priceColumn] a {
                display: block !important;
                padding: 10px !important;
            }
            table[class~=twcoList] th {
                padding-top: 16px !important;
                padding-right: 0 !important;
            }
            table[class~=twcoList] td[class=width116], table[class~=twcoList] td[class~=width116] {
                padding-right: 0 !important;
                display: table-cell !important;
                width: 60% !important;
            }
            table[class~=twcoList] td[class~=pdLf16] {
                width: 40% !important;
            }
            span[class=desktopHide] {
                display: inline-block !important;
                font-size: inherit !important;
                max-height: none !important;
                line-height: inherit !important;
                padding-right: 6px !important;
                overflow: visible !important;
                width: auto !important;
            }
            td[class=mobileHide], td[class~=mobileHide], td[class=tableOption], table[class=invoiceTable2] th, table[class~=invoiceTable3] th {
                display: none !important;
                font-size: 0 !important;
                width: 0 !important;
                max-height: 0 !important;
                line-height: 0 !important;
                padding: 0 !important;
                overflow: hidden !important;
            }
        }
    </style>
    
    <?php
        $resetMargin      = 'margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;';
        $resetPadding     = 'padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;';
        $tagReset         =  '<td class="tag_space emptyCell" style="'.$resetMargin.''.$resetPadding.'border-collapse:collapse;border-spacing:0;-webkit-text-size-adjust:none;font-family:Arial, Helvetica,sans-serif;text-align: left;font-size: 0 !important;color: #a1a2a5;background-color: transparent;line-height: 0 !important;height: 4px;">&nbsp;</td>';
        $emptyCell        = '<td class="emptyCell" style="'.$resetMargin.''.$resetPadding.'border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;background-color: #f6f6f7;line-height: 0 !important;font-size: 0 !important;">&nbsp;</td>';
        $emptyCellMobile  = '<td class="emptyCell mobileHide" style="'.$resetMargin.''.$resetPadding.'border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;background-color: #f6f6f7;line-height: 0 !important;font-size: 0 !important;">&nbsp;</td>';
        $misc             = 'border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;text-align: left;vertical-align: top;';
        $borderCell       = 'border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;text-align: left;font-size: 12px;line-height: 19px;color: #a1a2a5;';
    ?>
</head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;{{ $resetMargin }}{{ $resetPadding }}height: 100%;width: 100%;min-height: 1000px;background-color: #ffffff;">
<div class="emailSummary" style="mso-hide: all;display: none !important;font-size: 0 !important;max-height: 0 !important;line-height: 0 !important;padding: 0 !important;overflow: hidden !important;float: none !important;width: 0 !important;height: 0 !important;">
    {!! $title !!}
</div>
<div id="mainBody">
    <table id="emailBody" width="100%" border="0" cellspacing="0" cellpadding="0" style="{{ $resetMargin }}{{ $resetPadding }}mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse;border-spacing: 0;height: 100%;width: 100%;min-height: 1000px;background-color: #ffffff;">
        <tr>
            <td align="center" valign="top" class="emailBodyCell" style="{{ $resetMargin }}padding-top: 16px;padding-bottom: 16px;padding-left: 16px;padding-right: 16px;border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;height: 100%;width: 100%;min-height: 1000px;background-color: #ffffff;">
                <table width="544" border="0" cellpadding="0" cellspacing="0" class="eBox" style="margin-top: 0;margin-left: auto;margin-right: auto;margin-bottom: 0;{{ $resetPadding }}mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse;border-spacing: 0;width: 544px;">
                    <tr>
                        <td class="eHeader" style="{{ $resetMargin }}padding-top: 6px;padding-bottom: 6px;padding-left: 0px;padding-right: 0px;border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;width: 512px;border-left: 4px solid #ffffff;border-right: 4px solid #ffffff;">
                        </td>
                    </tr>
                    <tr><td class="emptyCell hBorder" style="{{ $resetMargin }}{{ $resetPadding }}border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;height: 1px;line-height: 0 !important;background: #b3bdca;border-left: 1px solid #b3bdca;border-right: 1px solid #b3bdca;font-size: 0 !important;">&nbsp;</td></tr>
                    <tr>
                        <td class="highlight invoiceHead alignLeft" style="{{ $resetMargin }}padding-top: 6px;padding-bottom: 6px;padding-left: 6px;padding-right: 6px;border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;text-align: left;width: 512px;font-size: 12px;color: #a1a2a5;background-color: #ffffff;border-left: 1px solid #b3bdca;border-right: 1px solid #b3bdca;border-bottom: 1px solid #b3bdca;">

                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 0;margin-left: 0;margin-right: auto;margin-bottom: 0;{{ $resetPadding }}mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse;border-spacing: 0;">
                                <tr><td colspan="2" style="{{ $resetMargin }}{{ $resetPadding }}border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;height:5px;line-height: 0 !important;font-size: 0 !important;">&nbsp;</td></tr>
                                <tr>
                                    <td width="25%" style="text-align: center;" valign="middle" align="center">
                                         <a href="{{ url('/') }}" style="{{ $resetPadding }}display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;color: #465059;height: 85px;text-align: center;font-size: 18px;font-weight: bold;line-height: 0;">
                                             <img class="imageFix" src="{{ secure_asset('emails/logos/facdroit.png') }}" alt="Faculté de droit" style="{{ $resetMargin }}{{ $resetPadding }}outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border: none;display: block;vertical-align: top;height: 85px;">
                                         </a>
                                    </td>
                                    <td width="5%" style="color:#000;" valign="middle" align="center"></td>
                                    <td width="70%" style="color:#000;" valign="middle" align="center">
                                        <p style="{{ $resetMargin }}{{ $resetPadding }}border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;height:5px;line-height: 0 !important;font-size: 0 !important;">&nbsp;</p>
                                        <h1 style="font-weight: bold; text-align: left; text-transform: uppercase;">
                                            <a style="text-decoration: none; color:#000;font-size:18px;line-height: 30px;" href="{{ url('/') }}">publications-droit.ch</a>
                                        </h1>
                                        <h2 style="text-align: left;">{!! $concerne !!}</h2>
                                    </td>
                                </tr>
                                <tr><td colspan="2" style="{{ $resetMargin }}{{ $resetPadding }}border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;height:5px;line-height: 0 !important;font-size: 0 !important;">&nbsp;</td></tr>
                            </table>

                        </td>
                        <!-- end .highlight-->
                    </tr>

                    <!-- Contenu -->
                    @yield('content')
                    <!-- Fin contenu -->

                    <tr>
                        <td class="emptyCell hBorder" style="{{ $resetMargin }}{{ $resetPadding }}border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;height: 1px;line-height: 0 !important;background: #b3bdca;border-left: 1px solid #b3bdca;border-right: 1px solid #b3bdca;font-size: 0 !important;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="eFooter" style="{{ $resetMargin }}{{ $resetPadding }}border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;text-align: right;font-size: 12px;line-height: 21px;width: 544px;color: #b2b2b2;border-left: 1px solid #b3bdca;border-right: 1px solid #b3bdca;background: #1a446e;">

                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 0;margin-left: 0;margin-right: auto;margin-bottom: 0;{{ $resetPadding }}mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse;border-spacing: 0;">
                                <tr><td colspan="4" style="{{ $resetPadding }}{{ $resetMargin }} line-height: 10px">&nbsp;</td></tr>
                                <tr>
                                    <td width="10px">&nbsp;</td>
                                    <td width="45%" valign="top" align="left">
                                        <h3 style="color:#fff; margin-bottom: 5px;">Vers mon compte</h3>
                                        <ul style="{{ $resetMargin }}{{ $resetPadding }}">
                                            <li style="color: #fff; list-style: none;"><a style="color: #fff;" href="{{ url('pubdroit/profil') }}">Mes données</a></li>
                                            <li style="color: #fff; list-style: none;"><a style="color: #fff;" href="{{ url('pubdroit/profil/orders') }}">Mes achats</a></li>
                                            <li style="color: #fff; list-style: none;"><a style="color: #fff;" href="{{ url('pubdroit/profil/colloques') }}">Mes inscriptions</a></li>
                                        </ul>
                                    </td>
                                    <td width="45%" valign="top" align="right">
                                        <h3 style="color:#fff; margin-bottom: 5px;">Secrétariat - Formation</h3>
                                        <a href="#" class="highFix" style="{{ $resetPadding }}display: inline-block;text-decoration: underline;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;color: #fff;cursor: pointer;padding-bottom:0; ">
                                            <span style="text-decoration: none;color: #fff;cursor: pointer;">
                                                droit.formation@unine.ch
                                            </span>
                                        </a><br>
                                        <span style="color: #fff;line-height: 18px; display: block;">Avenue du 1er-Mars 26<br> CH-2000 Neuchâtel<br>Telephone: +41 32 / 718 12 22</span>
                                    </td>
                                    <td width="10px">&nbsp;</td>
                                </tr>
                                <tr><td style="{{ $resetPadding }}{{ $resetMargin }} line-height: 10px">&nbsp;</td></tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td class="emptyCell hBorder" style="{{ $resetMargin }}{{ $resetPadding }}border-collapse: collapse;border-spacing: 0;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;height: 1px;line-height: 0 !important;background: #b3bdca;border-left: 1px solid #b3bdca;border-right: 1px solid #b3bdca;font-size: 0 !important;">&nbsp;</td>
                    </tr>
                </table>

                <!-- end .eBox --></td>
            <!-- end .emailBodyCell -->
        </tr>
    </table>
    <!-- end #emailBody -->
</div>
</body>
</html>
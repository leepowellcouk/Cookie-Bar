<?php

class CookiePageExtension extends DataExtension
{
	/**
	 * Check whether the user has accepted the cookie complience message
	 *
	 * @return Boolean
	 */
	public function ShowCookieBar()
	{
		if(SiteConfig::current_site_config()->CookieBarEnable && (!Cookie::get('CookiesAccepted') || Cookie::get('CookiesAccepted') != 'true'))
		{
			Requirements::javascript('cookie-bar/javascript/cookiebar.js');
			return true;
		}
	}

	/**
	 * Generate link to accept cookies
	 *
	 * @return String
	 */
	public function getAcceptCookiesLink()
	{
		$controller = Controller::curr();
		return Director::baseURL() . CookieBarController::URLSegment . '/accept?redirect=' . urlencode($controller->Link());
	}
}

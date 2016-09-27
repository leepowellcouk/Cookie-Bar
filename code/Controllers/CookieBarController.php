<?php

class CookieBarController extends Page_Controller
{
	const URLSegment = "cookiebar";

	static $allowed_actions = array(
		"accept"
	);

	public function accept($request)
	{
		if(!$cookie = Cookie::get('CookiesAccepted'))
		{
			$cookie = new Cookie();
			$cookie->set('CookiesAccepted', 'true', 1000);
		}

		if(Director::is_ajax())
		{
			echo 'success';
			return;
		}
		else
		{
			return $this->redirect($request->getVar('redirect'));
		}
	}
}

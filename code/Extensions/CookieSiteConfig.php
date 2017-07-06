<?php
/****************
*
* Add cookie config options to site config
*
* Studio Bonito
* http://studiobonito.co.uk
*
* Extended from the work by:
* Aab Web
* www.aabweb.co.uk
*
* author: Steve Heyes, Craig Ballantyne
* date: 23.10.2012
* version: 1.1.0
*/
class CookieSiteConfig extends DataExtension
{
  static $db = array(
    'CookieBarContent'  => 'Varchar(255)',
    'CookieBarCloseText' => 'Varchar(100)',
    'CookieBarMoreText'  => 'Varchar(150)',
    'CookieBarEnable' => 'Boolean'
  );

  static $has_one = array(
    'CookieBarPage' => 'SiteTree',
  );

  static $defaults = array(
    'CookieBarCloseText'  => 'Accept',
    'CookieBarMoreText'   => 'Read more about Cookies'
  );

  public function updateCMSFields(FieldList $fields)
  {
    $fields->addFieldToTab('Root.CookieBar', new CheckboxField('CookieBarEnable', 'Enable Cookie Bar'));
    $fields->addFieldToTab('Root.CookieBar', new TextField('CookieBarContent', 'Cookie Bar Content'));
    $fields->addFieldToTab('Root.CookieBar', new TreeDropdownField('CookieBarPageID', 'Cookie Information Page', 'SiteTree'));
    $fields->addFieldToTab('Root.CookieBar', new TextField('CookieBarCloseText', 'Accept/Close Link Text'));
    $fields->addFieldToTab('Root.CookieBar', new TextField('CookieBarMoreText', 'More Information Link Text'));
  }
}

<?php

use SilverStripe\Admin\ModelAdmin;
use SilverStripe\Forms\GridField\GridFieldAddNewButton;
use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\DataQuery;

class CallListAdmin extends ModelAdmin
{
	private static $managed_models = [
		CallList::class
	];

	private static $url_segment = 'call-lists';

	private static $menu_title = 'Call Lists';
	
	private static $menu_icon_class = 'font-icon-book';

	// public function getEditForm($id = null, $fields = null)
	// {
	// 	$form = parent::getEditForm($id, $fields);
	// 	return $form;
	// }

	// public function getList()
	// {
	// 	$list = parent::getList();
	// 	return $list;
	// }
}

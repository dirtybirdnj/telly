<?php

use SilverStripe\Admin\ModelAdmin;
use SilverStripe\Forms\GridField\GridFieldAddNewButton;
use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\DataQuery;

class CampaignAdmin extends ModelAdmin
{
	private static $managed_models = [
		Campaign::class,
		CallList::class,
	];

	private static $url_segment = 'campaign';

	private static $menu_title = 'Campaigns';

	private static $menu_icon_class = 'font-icon-p-list';

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

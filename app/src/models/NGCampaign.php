<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\Tab;
use SilverStripe\Forms\TabSet;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextAreaField;
use SilverStripe\Forms\DropdownField;

class NGCampaign extends DataObject
{
	private static $db = [
		'Name' => 'Varchar(255)',
		'Description' => 'Text',
		'State' => 'Varchar(2)',
	];
	
	private static $has_many = [
		'Questions' => Question::class
	];

	private static $has_one = [
		'CallList' => CallList::class
	];	

	public function getCMSFields()
	{

		$fields = FieldList::create(TabSet::create('Root', [Tab::create('Main')]  )  );

		$fields->addFieldsToTab('Root.Main', [
            TextField::create('Name', _t('Name', 'Name')),
			TextAreaField::create('Description', _t('Description', 'Description')),
			DropdownField::create('CallList',  _t('CallList', 'CallList'), CallList::get()->map('Title','Title')),
			GridField::create(
				'Questions',
				_t('Questions', 'Questions'),
				$this->Questions(),
				$config = GridFieldConfig_RecordEditor::create()
			)
		]);		
		
		return $fields;
		
	}

}

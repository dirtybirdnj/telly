<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\Tab;
use SilverStripe\Forms\TabSet;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextAreaField;

use SilverStripe\ORM\DataObject;

class CallList extends DataObject
{
	private static $db = [
        'Title' => 'Varchar(255)',
        'Numbers' => 'Text'
    ];

    // private static $summary_fields = [
    //     'Title' => 'Title'
    // ];

    private static $has_one = [
        'CSVFile' => File::class,
        'Campaign' => NGCampaign::class
    ];

	private static $has_many = [
		'Calls' => Call::class
    ];

    public function getCMSFields()
	{

		$fields = FieldList::create(TabSet::create('Root', [Tab::create('Main'), Tab::create('Calls')]  )  );

		$fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', _t('Title', 'Title')),
            TextAreaField::create('Numbers', _t('Numbers', 'Raw Number List')),
            $csvFile = UploadField::create('CSVFile', _t('CSVFile', 'CSV File of Numbers'))
			// GridField::create(
			// 	'Calls',
			// 	_t('Calls', 'Calls'),
			// 	$this->Calls(),
			// 	$config = GridFieldConfig_RecordEditor::create()
			// )
            // $testate_checklist = UploadField::create('TestateChecklist', _t('StateForm.TestateChecklist', 'Checklist (with will)')),
            // $intestate_checklist = UploadField::create('IntestateChecklist', _t('StateForm.IntestateChecklist', 'Checklist (with no will)'))
        ]);

		$fields->addFieldsToTab('Root.Calls', [
			GridField::create(
				'Calls',
				_t('Calls', 'Calls'),
				$this->Calls(),
				$config = GridFieldConfig_RecordEditor::create()
			)
            // $testate_checklist = UploadField::create('TestateChecklist', _t('StateForm.TestateChecklist', 'Checklist (with will)')),
            // $intestate_checklist = UploadField::create('IntestateChecklist', _t('StateForm.IntestateChecklist', 'Checklist (with no will)'))
		]);

		return $fields;

	}


}

<?php

namespace dirtybirdnj\telly;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\Tab;
use SilverStripe\Forms\TabSet;
use SilverStripe\Forms\TextField;

class Question extends DataObject
{
    private static $db = [
        'Title' => 'Varchar(255)',
        'SpeakWords' => 'Varchar(255)',
    ];

    private static $summary_fields = [
        'Title'          => 'Title',
        'SpeakWords'          => 'Voice Prompt'
    ];

    private static $has_one = [
        'Campaign' => Campaign::class
    ];

    private static $has_many = [
        'Answers' => Answer::class
    ];

    private static $table_name = 'Question';

    public function getCMSFields()
    {

        $fields = FieldList::create(TabSet::create('Root', [Tab::create('Main')]  )  );

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', _t('Title', 'Title')),
            TextField::create('SpeakWords', _t('SpeakWords', 'Voice Prompt')),
            GridField::create(
                'Answers',
                _t('Answers', 'Answers'),
                $this->Answers(),
                $config = GridFieldConfig_RecordEditor::create()
            )
            // $testate_checklist = UploadField::create('TestateChecklist', _t('StateForm.TestateChecklist', 'Checklist (with will)')),
            // $intestate_checklist = UploadField::create('IntestateChecklist', _t('StateForm.IntestateChecklist', 'Checklist (with no will)'))
        ]);

        return $fields;

    }

}

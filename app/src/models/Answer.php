<?php

use SilverStripe\ORM\DataObject;

class Answer extends DataObject
{
	private static $db = [
		'Title' => 'Varchar(255)',
        'SpeakWords' => 'Varchar(255)',
        'Value' => 'Int'
    ];
    
    private static $summary_fields = [
        'Title' => 'Title',
        'SpeakWords' => 'Voice Prompt',
        'Value' => 'User Input'        
    ];    

	private static $has_one = [
		'Question' => Question::class
	];


}

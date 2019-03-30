<?php

use SilverStripe\ORM\DataObject;

class Call extends DataObject
{
	private static $db = [
        'Title' => 'Varchar(255)',
        'PhoneNumber' => 'Varchar(255)',
        'CreatedDate' => 'Date',
        'CreatedTime' => 'Date',
        'CreatedDT' => 'DBDatetime'
        
    ];
    
    // private static $summary_fields = [
    //     'Title' => 'Title'  
    // ];    

	private static $has_one = [
		'Call' => CallList::class
	];


}
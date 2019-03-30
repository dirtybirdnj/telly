<?php

use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;
use SilverStripe\CampaignAdmin\CampaignAdmin;
use SilverStripe\Admin\CMSMenu;

// remove PasswordValidator for SilverStripe 5.0
$validator = PasswordValidator::create();
// Settings are registered via Injector configuration - see passwords.yml in framework
Member::set_password_validator($validator);

CMSMenu::remove_menu_class(CampaignAdmin::class);
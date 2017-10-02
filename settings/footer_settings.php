<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Social networking settings page file.
 *
 * @package    theme_fsgs
 * @copyright  2016 Chris Kenniburg
 * @credits    theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/* Social Network Settings */
$page = new admin_settingpage('theme_fsgs_footer', get_string('footerheading', 'theme_fsgs'));
$page->add(new admin_setting_heading('theme_fsgs_footer', get_string('footerheadingsub', 'theme_fsgs'),
format_text(get_string('footerdesc' , 'theme_fsgs'), FORMAT_MARKDOWN)));

// footer branding
$name = 'theme_fsgs/brandorganization';
$title = get_string('brandorganization', 'theme_fsgs');
$description = get_string('brandorganizationdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// footer branding
$name = 'theme_fsgs/brandwebsite';
$title = get_string('brandwebsite', 'theme_fsgs');
$description = get_string('brandwebsitedesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// footer branding
$name = 'theme_fsgs/brandphone';
$title = get_string('brandphone', 'theme_fsgs');
$description = get_string('brandphonedesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// footer branding
$name = 'theme_fsgs/brandemail';
$title = get_string('brandemail', 'theme_fsgs');
$description = get_string('brandemaildesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Footnote setting.
$name = 'theme_fsgs/footnote';
$title = get_string('footnote', 'theme_fsgs');
$description = get_string('footnotedesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// This is the descriptor for socialicons
$name = 'theme_fsgs/socialiconsinfo';
$heading = get_string('footerheadingsocial', 'theme_fsgs');
$information = get_string('footerdesc', 'theme_fsgs');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Website url setting.
$name = 'theme_fsgs/website';
$title = get_string('website', 'theme_fsgs');
$description = get_string('websitedesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Blog url setting.
$name = 'theme_fsgs/blog';
$title = get_string('blog', 'theme_fsgs');
$description = get_string('blogdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Facebook url setting.
$name = 'theme_fsgs/facebook';
$title = get_string(        'facebook', 'theme_fsgs');
$description = get_string(      'facebookdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Flickr url setting.
$name = 'theme_fsgs/flickr';
$title = get_string('flickr', 'theme_fsgs');
$description = get_string('flickrdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Twitter url setting.
$name = 'theme_fsgs/twitter';
$title = get_string('twitter', 'theme_fsgs');
$description = get_string('twitterdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Google+ url setting.
$name = 'theme_fsgs/googleplus';
$title = get_string('googleplus', 'theme_fsgs');
$description = get_string('googleplusdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// LinkedIn url setting.
$name = 'theme_fsgs/linkedin';
$title = get_string('linkedin', 'theme_fsgs');
$description = get_string('linkedindesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Tumblr url setting.
$name = 'theme_fsgs/tumblr';
$title = get_string('tumblr', 'theme_fsgs');
$description = get_string('tumblrdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Pinterest url setting.
$name = 'theme_fsgs/pinterest';
$title = get_string('pinterest', 'theme_fsgs');
$description = get_string('pinterestdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Instagram url setting.
$name = 'theme_fsgs/instagram';
$title = get_string('instagram', 'theme_fsgs');
$description = get_string('instagramdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// YouTube url setting.
$name = 'theme_fsgs/youtube';
$title = get_string('youtube', 'theme_fsgs');
$description = get_string('youtubedesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Vimeo url setting.
$name = 'theme_fsgs/vimeo';
$title = get_string('vimeo', 'theme_fsgs');
$description = get_string('vimeodesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Skype url setting.
$name = 'theme_fsgs/skype';
$title = get_string('skype', 'theme_fsgs');
$description = get_string('skypedesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// General social url setting 1.
$name = 'theme_fsgs/social1';
$title = get_string('sociallink', 'theme_fsgs');
$description = get_string('sociallinkdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 1.
$name = 'theme_fsgs/socialicon1';
$title = get_string('sociallinkicon', 'theme_fsgs');
$description = get_string('sociallinkicondesc', 'theme_fsgs');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// General social url setting 2.
$name = 'theme_fsgs/social2';
$title = get_string('sociallink', 'theme_fsgs');
$description = get_string('sociallinkdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 2.
$name = 'theme_fsgs/socialicon2';
$title = get_string('sociallinkicon', 'theme_fsgs');
$description = get_string('sociallinkicondesc', 'theme_fsgs');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// General social url setting 3.
$name = 'theme_fsgs/social3';
$title = get_string('sociallink', 'theme_fsgs');
$description = get_string('sociallinkdesc', 'theme_fsgs');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 3.
$name = 'theme_fsgs/socialicon3';
$title = get_string('sociallinkicon', 'theme_fsgs');
$description = get_string('sociallinkicondesc', 'theme_fsgs');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);

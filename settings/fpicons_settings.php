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
 * 
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Icon Navigation);
$page = new admin_settingpage('theme_fsgs_iconnavheading', get_string('iconnavheading', 'theme_fsgs'));

    // This is the descriptor for icon One
    $name = 'theme_fsgs/iconwidthinfo';
    $heading = get_string('iconwidthinfo', 'theme_fsgs');
    $information = get_string('iconwidthinfodesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Icon width setting.
    $name = 'theme_fsgs/iconwidth';
    $title = get_string('iconwidth', 'theme_fsgs');
    $description = get_string('iconwidth_desc', 'theme_fsgs');;
    $default = '100px';
    $choices = array(
        '75px' => '75px',
        '85px' => '85px',
        '95px' => '95px',
        '100px' => '100px',
        '105px' => '105px',
        '110px' => '110px',
        '115px' => '115px',
        '120px' => '120px',
        '125px' => '125px',
        '130px' => '130px',
        '135px' => '135px',
        '140px' => '140px',
        '145px' => '145px',
        '150px' => '150px',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);



    // This is the descriptor for teacher create a course
    $name = 'theme_fsgs/createinfo';
    $heading = get_string('createinfo', 'theme_fsgs');
    $information = get_string('createinfodesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Creator Icon
    $name = 'theme_fsgs/createicon';
    $title = get_string('navicon', 'theme_fsgs');
    $description = get_string('navicondesc', 'theme_fsgs');
    $default = 'edit';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/createbuttontext';
    $title = get_string('naviconbuttontext', 'theme_fsgs');
    $description = get_string('naviconbuttontextdesc', 'theme_fsgs');
    $default = get_string('naviconbuttoncreatetextdefault', 'theme_fsgs');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/createbuttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fsgs');
    $description = get_string('naviconbuttonurldesc', 'theme_fsgs');
    $default =  $CFG->wwwroot.'/course/edit.php?category=1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for teacher create a course
    $name = 'theme_fsgs/sliderinfo';
    $heading = get_string('sliderinfo', 'theme_fsgs');
    $information = get_string('sliderinfodesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Creator Icon
    $name = 'theme_fsgs/slideicon';
    $title = get_string('navicon', 'theme_fsgs');
    $description = get_string('naviconslidedesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/slideiconbuttontext';
    $title = get_string('naviconbuttontext', 'theme_fsgs');
    $description = get_string('naviconbuttontextdesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Slide Textbox.
    $name = 'theme_fsgs/slidetextbox';
    $title = get_string('slidetextbox', 'theme_fsgs');
    $description = get_string('slidetextbox_desc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // This is the descriptor for icon One
    $name = 'theme_fsgs/navicon1info';
    $heading = get_string('navicon1', 'theme_fsgs');
    $information = get_string('navicondesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // icon One
    $name = 'theme_fsgs/nav1icon';
    $title = get_string('navicon', 'theme_fsgs');
    $description = get_string('navicondesc', 'theme_fsgs');
    $default = 'home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav1buttontext';
    $title = get_string('naviconbuttontext', 'theme_fsgs');
    $description = get_string('naviconbuttontextdesc', 'theme_fsgs');
    $default = get_string('naviconbutton1textdefault', 'theme_fsgs');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav1buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fsgs');
    $description = get_string('naviconbuttonurldesc', 'theme_fsgs');
    $default =  $CFG->wwwroot.'/my/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon One
    $name = 'theme_fsgs/navicon2info';
    $heading = get_string('navicon2', 'theme_fsgs');
    $information = get_string('navicondesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fsgs/nav2icon';
    $title = get_string('navicon', 'theme_fsgs');
    $description = get_string('navicondesc', 'theme_fsgs');
    $default = 'calendar';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav2buttontext';
    $title = get_string('naviconbuttontext', 'theme_fsgs');
    $description = get_string('naviconbuttontextdesc', 'theme_fsgs');
    $default = get_string('naviconbutton2textdefault', 'theme_fsgs');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav2buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fsgs');
    $description = get_string('naviconbuttonurldesc', 'theme_fsgs');
    $default =  $CFG->wwwroot.'/calendar/view.php?view=month';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon three
    $name = 'theme_fsgs/navicon3info';
    $heading = get_string('navicon3', 'theme_fsgs');
    $information = get_string('navicondesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fsgs/nav3icon';
    $title = get_string('navicon', 'theme_fsgs');
    $description = get_string('navicondesc', 'theme_fsgs');
    $default = 'bookmark';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav3buttontext';
    $title = get_string('naviconbuttontext', 'theme_fsgs');
    $description = get_string('naviconbuttontextdesc', 'theme_fsgs');
    $default = get_string('naviconbutton3textdefault', 'theme_fsgs');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav3buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fsgs');
    $description = get_string('naviconbuttonurldesc', 'theme_fsgs');
    $default =  $CFG->wwwroot.'/badges/mybadges.php';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon four
    $name = 'theme_fsgs/navicon4info';
    $heading = get_string('navicon4', 'theme_fsgs');
    $information = get_string('navicondesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fsgs/nav4icon';
    $title = get_string('navicon', 'theme_fsgs');
    $description = get_string('navicondesc', 'theme_fsgs');
    $default = 'book';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav4buttontext';
    $title = get_string('naviconbuttontext', 'theme_fsgs');
    $description = get_string('naviconbuttontextdesc', 'theme_fsgs');
    $default = get_string('naviconbutton4textdefault', 'theme_fsgs');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav4buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fsgs');
    $description = get_string('naviconbuttonurldesc', 'theme_fsgs');
    $default =  $CFG->wwwroot.'/course/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon four
    $name = 'theme_fsgs/navicon5info';
    $heading = get_string('navicon5', 'theme_fsgs');
    $information = get_string('navicondesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fsgs/nav5icon';
    $title = get_string('navicon', 'theme_fsgs');
    $description = get_string('navicondesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav5buttontext';
    $title = get_string('naviconbuttontext', 'theme_fsgs');
    $description = get_string('naviconbuttontextdesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav5buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fsgs');
    $description = get_string('naviconbuttonurldesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon six
    $name = 'theme_fsgs/navicon6info';
    $heading = get_string('navicon6', 'theme_fsgs');
    $information = get_string('navicondesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fsgs/nav6icon';
    $title = get_string('navicon', 'theme_fsgs');
    $description = get_string('navicondesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav6buttontext';
    $title = get_string('naviconbuttontext', 'theme_fsgs');
    $description = get_string('naviconbuttontextdesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav6buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fsgs');
    $description = get_string('naviconbuttonurldesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon seven
    $name = 'theme_fsgs/navicon7info';
    $heading = get_string('navicon7', 'theme_fsgs');
    $information = get_string('navicondesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fsgs/nav7icon';
    $title = get_string('navicon', 'theme_fsgs');
    $description = get_string('navicondesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav7buttontext';
    $title = get_string('naviconbuttontext', 'theme_fsgs');
    $description = get_string('naviconbuttontextdesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav7buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fsgs');
    $description = get_string('naviconbuttonurldesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon eight
    $name = 'theme_fsgs/navicon8info';
    $heading = get_string('navicon8', 'theme_fsgs');
    $information = get_string('navicondesc', 'theme_fsgs');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fsgs/nav8icon';
    $title = get_string('navicon', 'theme_fsgs');
    $description = get_string('navicondesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav8buttontext';
    $title = get_string('naviconbuttontext', 'theme_fsgs');
    $description = get_string('naviconbuttontextdesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fsgs/nav8buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fsgs');
    $description = get_string('naviconbuttonurldesc', 'theme_fsgs');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);

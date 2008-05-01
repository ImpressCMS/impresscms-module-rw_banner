<?php
//  ------------------------------------------------------------------------ //
//                                  RW-Banner                                //
//                    Copyright (c) 2006 BrInfo                              //
//                     <http://www.brinfo.com.br>                            //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
// Author: Rodrigo Pereira Lima (BrInfo - Soluções Web)                      //
// Site: http://www.brinfo.com.br                                            //
// Project: RW-Banner                                                        //
// Descrição: Sistema de gerenciamento de mídias publicitárias               //
// ------------------------------------------------------------------------- //

//index.php
define('_NOPERM1', 'You don\'t have any banners registered at your site therefore you don\'t have permissions to access this area!');
define('_MD_MSG_INDEX_NOUSER', 'To use the advertising services of %s you need to be a registered user.
   This procedure aims to have a better control of our partners and a better management of our advertising media.<br /><br />
   If you are already registered at our site, click <a href=\"%s\">here</a> and do your login to fill out the banner registration 
   form and take part at our advertising system. If you are not registered at our site, click <a href=\"%s\">here</a> and
   register yourself. After you have registered at our site you will be able to take part at our advertising system.');
define('_MD_MSG_INDEX_OLAUSER', 'Hello %s, welcome to the Advertising System of %s.<br /></br>');
define('_MD_MSG_INDEX_NOBANNER', 'You don\'t have any banners registered at your site. In case you wish to take part
of our advertising system fill out the banner registration form by clicking <a href=\"inser.php\">here</a>.');
define('_MD_MSG_INDEX_NOBANNER1', 'The registration of new banners is disabled at the moment, if you want to include one banner in our system, please contact the site administrator via contact form or private message.');
define('_MD_CARREG', 'Loading...');
define('_MD_MSG_INDEX_CADBANNER', 'To add new banners to the system click <a href=\"inser.php\">here</a>');
define('_MD_MSG_NEWBANNER', 'After you have registered a banner it will be analized by the staff in charge. One of the staff member will get in touch woth you to define the last details about the banner, after this, if the banner is approved, it will be activated and will be shown in the site.');

define('_MD_TITLE1', 'Your registered banners');
define('_MD_TITLE2', 'ID ');
define('_MD_TITLE3', 'CATEGORy');
define('_MD_TITLE4', 'IMPRESSIONS');
define('_MD_TITLE5', 'IMP. LEFT');
define('_MD_TITLE6', 'CLICKS');
define('_MD_TITLE7', '% OF CLICKS');
define('_MD_TITLE8', 'CREATION DATE');
define('_MD_TITLE9', 'STATUS');
define('_MD_TITLE10', 'OPTIONS');
define('_MD_TITLE16', 'CLICKS LEFT.');

define('_MD_BANNER_STATUS1', 'Banner Active');
define('_MD_BANNER_STATUS2', 'Banner Inactive');

define('_MD_BANNER_EXIBREST', 'Unlimited');

define('_MD_EMAIL_STATS', 'Send statistics per em-mail');

define('_MD_TITLE11', 'Statistics for the banner nr.');
define('_MD_TITLE12', 'Image:');
define('_MD_TITLE13', 'Link:');
define('_MD_TITLE14', 'Change Link');
define('_MD_TITLE15', 'Send the statistics of this banner per e-mail');

define('_MD_BUTTON1', 'Order');
define('_MD_BUTTON2', 'Banners per page');

//include/function.php
define('_MD_SUBJECT_EMAILSTATS', 'Statistics of your banner at our site');
define('_MD_BODY1_EMAILSTATS', 'Below follow the complete statistics of your banner at our site');
define('_MD_BODY2_EMAILSTATS', 'Client\'s Name:');
define('_MD_BODY3_EMAILSTATS', 'Banner Code:');
define('_MD_BODY4_EMAILSTATS', 'Banner Image:');
define('_MD_BODY5_EMAILSTATS', 'Banner Link:');
define('_MD_BODY6_EMAILSTATS', 'Acquired Impressions:');
define('_MD_BODY7_EMAILSTATS', 'Used Impressions:');
define('_MD_BODY8_EMAILSTATS', 'Impressions Left:');
define('_MD_BODY9_EMAILSTATS', 'Clicks Received:');
define('_MD_BODY10_EMAILSTATS', 'Porcentage of Clicks:');
define('_MD_BODY11_EMAILSTATS', 'Acquired Clicks:');
define('_MD_BODY12_EMAILSTATS', 'Clicks Left:');
define('_MD_BODY13_EMAILSTATS', 'Registration Date:');
define('_MD_BODY14_EMAILSTATS', 'Acquisition Period:');
define('_MD_BODY15_EMAILSTATS', 'End of the Period:');
define('_MD_BODY16_EMAILSTATS', 'Report generated in :');
define('_MD_BODY17_EMAILSTATS', 'days');

define('_MD_MSG_SUCESS_EMAILSTATS', 'The statistics of your banner were send successffully to your e-mail registered at our site.');
define('_MD_MSG_FAIL_EMAILSTATS', 'There was an erro trying to send the statistics to your e-mail. Please, try later again.');

//inser.php
define('_MD_BTN_OP1', 'Add');
define('_MD_BTN_OP2', 'Edit');
define('_MD_BTN_OP3', 'Unlimited');

define('_MD_TITLE24', 'Exhibition number:');
define('_MD_TITLE500', 'Number of clicks:');
define('_MD_TITLE5001', 'Exhibition Period (in days):');
define('_MD_TITLE25', 'Image(Url):');
define('_MD_TITLE26', 'Link(Url):');
define('_MD_TITLE27', 'Use Html?');
define('_MD_TITLE28', 'HTML Code:');
define('_MD_TITLE29', 'Target:');
define('_MD_TITLE51_ED', 'Upload Banner:');
define('_MD_TITLE5000', 'Notes:');
define('_MD_TITLE5000_DESC', 'Write in here any notes about your banner, tell the admin of the site where you want your banner to be shown, how often, etc, define all you think is necessary about the exhibition of your banner.');

define('_MD_VALUE_BTN1', 'Add new Banner');
define('_MD_VALUE_BTN3', 'Edit Banner');
define('_MD_VALUE_BTN10_ED', 'Send');

define('_MD_MSG2', 'Banner changed succesfully!!');
define('_MD_MSG8', 'Banner added successfully!!');
define('_MD_MSG10', 'There was a problem adding the banner.');
define('_MD_MSG11', 'There was a problem editing the banner.');

define('_RW_TAG_ERROR', '<div style="color: #FE2626;">There is something wrong with the banner exhibition</div>');
?>

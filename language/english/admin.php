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

//admin/index.php
define('_ADM_MSG1', 'Status changed successfully!!');
define('_ADM_MSG2', 'Banner changed successfully!!');
define('_ADM_MSG8', 'Banner added successfully!!');
define('_ADM_MSG101', 'Banner deleted successfully!!');
define('_ADM_MSG10', 'There was a problem adding the banner.');
define('_ADM_MSG11', 'There was a problem editing the banner.');
define('_ADM_MSG3', 'Are you sure you want to remove this category and all its banners???');
define('_ADM_MSG4', 'Category changed successfully!!');
define('_ADM_MSG5', 'Category added successfully!!');
define('_ADM_MSG102', 'Category an its banners deleted successfully!!');
define('_ADM_MSG6', 'There was a problem adding the category.');
define('_ADM_MSG7', 'There was a problem editing the category.');
define('_ADM_MSG12', 'Select a block model first.');
define('_ADM_MSG13', 'Block added successfully! Insert the code below in the template in the exact place you want the block to be shown.');
define('_ADM_MSG14', 'Block changed successfully!!');
define('_ADM_MSG15', 'Are you sure you want to delete this block?');
define('_ADM_MSG16', 'Block deleted successfully!!');
define('_ADM_MSG17', 'Default upload folder for banners created successfully!!!');
define('_ADM_MSG18', 'There was an error creating the default upload folder for the banners!!! Please, try again.');
define('_ADM_MSG19', 'Are you sure you want to delete this banner?');
define('_ADM_MSG20', 'Are you sure you want to remove this tag?<br />WARNING: By deleting the tag from the database, also remove it from the templates it was being used to avoid any problems.');
define('_ADM_MSG21', 'Tag deleted successfully!!');
define('_ADM_MSG22', 'Tag added succesfully!!');
define('_ADM_MSG23', 'There was a problem adding the tag.');
define('_ADM_MSG24', 'Tag changed successfully!!');
define('_ADM_MSG25', 'There was a problem editing the tag.');

define('_ADM_TITLE1', 'Registered banners ');
define('_ADM_TITLE2', 'ID');
define('_ADM_TITLE3', 'CLIENT');
define('_ADM_TITLE4', 'CATEGORY');
define('_ADM_TITLE5', 'IMPRESSIONS');
define('_ADM_TITLE6', 'IMP. LEFT');
define('_ADM_TITLE7', 'CLICKS');
define('_ADM_TITLE8', '% OF CLICKS');
define('_ADM_TITLE9', 'DATE CREATED');
define('_ADM_TITLE10', 'STATUS');
define('_ADM_TITLE11', 'OPTIONS');
define('_ADM_TITLE12', 'Registered categories');
define('_ADM_TITLE13', 'TITLE');
define('_ADM_TITLE14', 'NR. BANNERS');
define('_ADM_TITLE15', 'MODULE');
define('_ADM_TITLE16', 'Clientes with banners');
define('_ADM_TITLE17', 'CLIENT');
define('_ADM_TITLE18', 'CONTACT');
define('_ADM_TITLE19', 'EMAIL');
define('_ADM_TITLE20', 'BANNERS');
define('_ADM_TITLE39', 'CLICKS LEFT.');
define('_ADM_TITLE40', 'Template Blocks');
define('_ADM_TITLE41', 'Select the block model you want to insert in your templates');
define('_ADM_TITLE42', 'Select a block');
define('_ADM_TITLE43', 'DESCRIPTION');
define('_ADM_TITLE44', 'COLUMN NR.');
define('_ADM_TITLE45', 'REFRESH TIME (ms)');
define('_ADM_TITLE46', 'Style');
define('_ADM_TITLE47', 'Insert here the CSS for the block. Pay attention, in the field there is already a CSS model for a default block, don\'t change the name of the classes, simply adapt them to your needs.');
define('_ADM_TITLE48', 'Insert here a brief description about the block. We recommend to write in here the template to which it is used and further information that can let clear the purpose of the block.');
define('_ADM_TITLE49', 'INCLUSION ID');
define('_ADM_TITLE50', 'Click on the button "Generate" to create the inclusion code for the block. This code should be inserted in the template, in the exact place where the banner block will be shown. Remember that the color, postion, font and size formats depend on the CSS chosen by you in this screen.');
define('_ADM_TITLE51', 'Generate inclusion code');
define('_ADM_TITLE52', 'FILE');
define('_ADM_TITLE53', 'The time has to be set in miliseconds. E.g.: If you want to change the banners every 10 seconds, insert the value of 10000 miliseconds. For 30 seconds, 30000 miliseconds and so on.');
define('_ADM_TITLE99', 'EXPIRATION DATE');

define('_ADM_TAG_TITLE01', 'ID');
define('_ADM_TAG_TITLE02', 'TITLE');
define('_ADM_TAG_TITLE03', 'SMARTY TAG');
define('_ADM_TAG_TITLE04', 'CATEGORY');
define('_ADM_TAG_TITLE05', 'TOTAL BANNERS');
define('_ADM_TAG_TITLE06', 'TOTAL COLUMNS');
define('_ADM_TAG_TITLE07', 'STATUS');
define('_ADM_TAG_TITLE08', 'Add new tag');
define('_ADM_TAG_TITLE09', 'Title:');
define('_ADM_TAG_TITLE10', 'Category:');
define('_ADM_TAG_TITLE11', 'Number of Banners:');
define('_ADM_TAG_TITLE12', 'Number of Columns:');
define('_ADM_TAG_TITLE13', 'All categories');
define('_ADM_TAG_TITLE14', 'Smarty Tag:');
define('_ADM_TAG_TITLE15', 'WARNING: This will be name for the created tag, therefore you cannnot use spaces, accents or any special chars. If you want to combine words separate each word by an underline(_).');
define('_ADM_TAG_TITLE16', 'Show only in the module:');
define('_ADM_TAG_TITLE17', 'All modules');
define('_ADM_TAG_TITLE18', 'Tag status:');
define('_ADM_TAG_TITLE19', 'MODULES');
define('_ADM_TAG_TITLE20', 'NOTES:');
define('_ADM_TAG_TITLE21', 'We recommmend to enter in this field all the places where the tag was used so that when you do not want to continue using it, it\'ll be easy to remove it.');
define('_ADM_TAG_TITLE22', 'Banner code:');
define('_ADM_TAG_TITLE23', 'Case you do not want that this TAG shows random banners, places in this field the Code of banner that you desires to show and only it will be shown.');

define('_ADM_TAG_STATUS1', 'Tag Active');
define('_ADM_TAG_STATUS2', 'Tag Inactive');

define('_ADM_VALUE_BTN1', 'Add Banner');
define('_ADM_VALUE_BTN2', 'View Banner');
define('_ADM_VALUE_BTN3', 'Edit Banner');
define('_ADM_VALUE_BTN4', 'Remove Banner');
define('_ADM_VALUE_BTN5', 'Add Category');
define('_ADM_VALUE_BTN6', 'Edit Category');
define('_ADM_VALUE_BTN7', 'Remove Category');
define('_ADM_VALUE_BTN8', 'Add Client');
define('_ADM_VALUE_BTN9', 'Edit Category');
define('_ADM_VALUE_BTN10', 'Add');
define('_ADM_VALUE_BTN11', 'Template blocks');
define('_ADM_VALUE_BTN12', 'Add Tag');

define('_ADM_BANNER_STATUS1', 'Banner Active');
define('_ADM_BANNER_STATUS2', 'Banner Inactive');
define('_ADM_BANNER_STATUS3', 'Sent per Client. Waiting for action!');
define('_ADM_BLOCK_STATUS1', 'Active');
define('_ADM_BLOCK_STATUS2', 'Inactive');

define('_ADM_BANNER_EXIBREST', 'Unlimited');

define('_ADM_CATEG_ALLMOD', 'All');
define('_ADM_NO_CATEG', 'Define Categ');

define('_AM_RWBANNER_PREF', 'Preferences');
define('_AM_RWBANNER_OPTS', 'Blocks / Groups');
define('_AM_RWBANNER_GOMOD', 'Go to module');
define('_AM_RWBANNER_ABOUT', 'About the module');
define('_AM_RWBANNER_DEMO', 'Support');
define('_AM_RWBANNER_MODADMIN', '- General Admin:');
define('_AM_RWBANNER_INDEX', 'Index');

define('_AM_RWBANNER_LIST_BANNER', 'List of all registered banners');
define('_AM_RWBANNER_LIST_BANNER_DESC', 'List of banners registered in the system. Through this list you can have a brief statistic of all banners as well as edit or delete them. To change the exhibition order of the banners click on the columns name.');
define('_AM_RWBANNER_LIST_CATEG', 'List of registered categories');
define('_AM_RWBANNER_LIST_CATEG_DESC', 'List of all registered categories in the system. Through this list you can edit and delete the categories.');
define('_AM_RWBANNER_LIST_USERS', 'List all clients with banners');
define('_AM_RWBANNER_LIST_USERS_DESC', 'List of all registered users that have banners registered in the system.');
define('_AM_RWBANNER_LIST_TAG', 'Registered Smarty Tags list');
define('_AM_RWBANNER_LIST_TAG_DESC', 'List of all registered smarty tags in the system. These tags are automatically created when the site is started and show the blocks in your site\'s theme or in the templates from the modules according to your defined configuration.<br /> To show the banners in the templates or in the theme edit the desired file including the tag in the exact place where the banners should be shown. You can deactivate the tags at any time clicking on the icon in the status column but remember that only the active tags will show banners. <p style=\'color:#FF0000;\'><b>WATCH OUT:</b> To activate the TAGS function it is necessarey to hack the xoops core, to learn how to apply this hack read the README.TXT file</p>');

define('_AM_RWBANNER_NODIR', 'The default upload folder for de banners downs not exist or is inaccessible.<br /><font color="red">Default folder: "%s"</font> <a href="index.php?op=criardir">Create folder</a>');

define('_ADM_TOTAL_BANNER_LEG', 'Total Registered Banners:');

//admin/edita.php
define('_ADM_MSG5_ED', 'All the fields to be filled are mandatory!!!');

define('_ADM_TITLE21', 'Edit Banner nr.');
define('_ADM_TITLE22', 'Client:');
define('_ADM_TITLE23', 'Category:');
define('_ADM_TITLE24', 'Exhibition number:');
define('_ADM_TITLE500', 'Click number:');
define('_ADM_TITLE5001', 'Exhibition period (in days):');
define('_ADM_TITLE25', 'Image(Url):');
define('_ADM_TITLE26', 'Link(Url):');
define('_ADM_TITLE27', 'Use Html?');
define('_ADM_TITLE28', 'HTML code:');
define('_ADM_TITLE29', 'Target:');
define('_ADM_TITLE51_ED', 'Upload Banner:');
define('_ADM_TITLE5000', 'Notes:');
define('_ADM_TITLE5000_DESC', 'In this field the client defined some details about the banner and its exhibition, analize the content of this field to define the publicity scheme for this banner.');

define('_ADM_VALUE_BTN10_ED', 'Send');

//admin/editacateg.php
define('_ADM_MSG6_EDC', 'This category has registered banners, don\'t forget to edit them, by changing the size so that they are compatible with the new category setup, otherwise, there can occur problems with the banner exhibition!!!');

define('_ADM_TITLE30', 'Edit Category nr.');
define('_ADM_TITLE31', 'Title:');
define('_ADM_TITLE32', 'Banner width:');
define('_ADM_TITLE33', 'Banner height:');
define('_ADM_TITLE34', 'Attach to module:');

//admin/insere.php
define('_ADM_TITLE35', 'Add new banner');
define('_ADM_TITLE36', 'Exhibition number:');

//admin/inserecateg.php
define('_ADM_TITLE38', 'Add new categgory');
define('_ADM_TITLE37', 'Choosing one or more modules in this option, you define that all the banners generated by this tag will be shown in the selected module.');

//admin/myblocksadmin.php
define('_AM_RWBANNER_BLOCKS', 'Blocks');
define('_AM_RWBANNER_BLOCKSINFO', 'You can setup the block here or in the system module. Here you can also have the option to clone a block.');
define('_AM_RWBANNER_GROUPS', 'Groups');
define('_AM_RWBANNER_GROUPSINFO', 'Setup module and block permissions for each group');
define('_AM_RWBANNER_POSITION', 'Position');


define('_ADM_BTN_OP1', 'Add');
define('_ADM_BTN_OP2', 'Edit');
define('_ADM_BTN_OP3', 'Unlimeted');

//admin/upgrade.php
define('_AM_RWBANNER_UPGRADEFAILED', 'There was an erro during the update process! Please, try again!');
define('_AM_RWBANNER_UPGRADEFAILED1', 'Error while creating the banners table!');
define('_AM_RWBANNER_UPGRADEFAILED2', 'Error while creating the category table!');
define('_AM_RWBANNER_UPGRADEFAILED3', 'Error while creating the TAGS tabel!');

define('_AM_RWBANNER_UPGRADECOMPLETE', 'Tables update executed successfully! Follow the steps below to activate all the module resources and after, click on the following link.');
define('_AM_RWBANNER_UPGRADECOMPLETE1', 'The code for the banner exibition in the theme and templates for your site was changed, you have to change the old code in the following file ".XOOPS_ROOT_PATH."/header.php by the code below:');
define('_AM_RWBANNER_UPGRADECOMPLETE2', 'Now the module has a new feature, banner exhibition in text from other modules, allowing that you show your banners in any module that accepts bbcodes such as the news, articles, XT-Conteúdo modules, including forums. So that this new feature becomes active you have to hack the ".XOOPS_ROOT_PATH."/class/module.textsanitizer.php file.<br />The hack has to be applied in the end of the xoopsCodeDecode function. To make it easier, take a look athe the file: function_bbcode_xoops2015.txt in the docs folder in this module.');

define('_AM_RWBANNER_UPDATEMODULE', 'Update Templates and Blocks');

define('_AM_RWBANNER_IMPORT', 'Import');
define('_AM_IMPORT_TITLE', 'Import selected banners of the Xoops System for the RW-Banner ');
define('_AM_IMPORT_TITLE1', 'RW-Banner Category');
define('_AM_IMPORT_TITLE2', 'RW-Banner Client');
define('_AM_IMPORT_TITLE3', 'Import?');
define('_AM_SUCCESS_IMPORT', 'Successfully carried through importation. As the old system possessed given little for banners, edits banners imported and configures them correctly. ');
define('_AM_FAIL_IMPORT', 'Some problems had occurred during the importation process! ');
?>

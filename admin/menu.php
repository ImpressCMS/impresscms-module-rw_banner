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

$Module = XoopsModule::getByDirname("rw_banner");
$id = $Module->mid();

$adminmenu[1]['title'] = _ADM_MENU_TITLE1;
$adminmenu[1]['link']  = "admin/index.php";
$adminmenu[2]['title'] = _ADM_MENU_TITLE2;
$adminmenu[2]['link']  = "admin/myblocksadmin.php";
//$adminmenu[3]['title'] = _ADM_MENU_TITLE8;
//$adminmenu[3]['link']  = "admin/templateblocks.php";
$adminmenu[4]['title'] = _ADM_MENU_TITLE3;
$adminmenu[4]['link']  = "admin/inser.php";
$adminmenu[5]['title'] = _ADM_MENU_TITLE4;
$adminmenu[5]['link']  = "admin/insercateg.php";
$adminmenu[6]['title'] = _ADM_MENU_TITLE8;
$adminmenu[6]['link']  = "admin/insercateg.php";
$adminmenu[7]['title'] = _ADM_MENU_TITLE6;
$adminmenu[7]['link']  = "admin/about.php";
?>


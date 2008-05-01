<?php
//  ------------------------------------------------------------------------ //
//                                  RW-Banner                                //
//                    Copyright (c) 2006 Web Applications                    //
//                     <http://www.bcsg.com.br/rwbanner/>                    //
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
// Author: Rodrigo Pereira Lima (Web Applications)                           //
// Site: http://www.bcsg.com.br/rwbanner                                     //
// Project: RW-Banner                                                        //
// Descri��o: Sistema de gerenciamento de m�dias publicit�rias               //
// ------------------------------------------------------------------------- //

function exibe_ajaxbanner($options){
  include_once (XOOPS_ROOT_PATH.'/modules/rw_banner/class/class.categoria.php');
  include_once (XOOPS_ROOT_PATH.'/modules/rw_banner/class/class.banner.php');
  
  //recebendo par�metros de configura��o
  $block = array();
  $block['title'] = _MI_RWBLOCK4_NAME;
  $block['categ'] = $options[0];
  $block['qtde']  = $options[1];
  $block['cols']  = $options[2];
  $block['tempo']  = $options[3];
  $block['id_div'] = rand(1,2000);
  $block['lang_carreg'] = _MB_OPTION15;
  
  $categ = new Categoria(null,$options[0]);
  $banner = new RWbanners();
  $block['qtde_encontrado'] = count($banner->getBanners(false, 'ORDER BY RAND()', $options[0], $options[1]));
  $block['alt'] = ($block['qtde'] > 1 && $block['cols'] == 1)?($categ->getAlt()*$block['qtde_encontrado'])+(15*$block['qtde_encontrado']):$categ->getAlt()+20;

  return $block;
}

function edita_ajaxbanner($options){
  global $xoopsDB;
  $query = "SELECT cod,titulo FROM ".$xoopsDB->prefix("rw_categorias");
  $consulta = $xoopsDB->queryF($query);
  $categ = _MB_OPTION1."&nbsp;<select options[0] name=\"options[0]\" onchange='javascript:options0.value = this.value;'>";
  while(list($cod,$titulo) = $xoopsDB->fetchRow($consulta)){
  if ($options[0] == $cod)
    $sel = 'selected';
  else
    $sel = '';
  $categ .= '<option value="'.$cod.'" '.$sel.'>'.$titulo.'</option>';
  }
  $categ .= '</select>';
  $form = $categ;
  //Quantidade de banners � exibir no bloco
  $qtde = _MB_OPTION2."&nbsp;<input type='text' name='options[]' value='".$options[1]."' onchange='javascript:options1.value = this.value;' />";
  $form .= "<br />".$qtde;
  //Quantidade de colunas em que os banners ser�o exibidos
  $qtde = _MB_OPTION3."&nbsp;<input type='text' name='options[]' value='".$options[2]."' onchange='javascript:options2.value = this.value;' />";
  $form .= "<br />".$qtde;
  //Tempo de atualiza��o dos banners
  $qtde = _MB_OPTION13."&nbsp;<input type='text' name='options[]' value='".$options[3]."' onchange='javascript:options3.value = this.value;' />";
  $form .= "<br />".$qtde;

  return $form;
}
?>

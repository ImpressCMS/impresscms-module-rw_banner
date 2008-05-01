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
// Author: Rodrigo Pereira Lima (BrInfo - Solu��es Web)                      //
// Site: http://www.brinfo.com.br                                            //
// Project: RW-Banner                                                        //
// Descri��o: Sistema de gerenciamento de m�dias publicit�rias               //
// ------------------------------------------------------------------------- //

function exibe_banner($options){
  include_once (XOOPS_ROOT_PATH.'/modules/rw_banner/class/class.categoria.php');
  include_once (XOOPS_ROOT_PATH.'/modules/rw_banner/class/class.banner.php');

  $block = array();

  //recebendo par�metros de configura��o
  $block['categ'] = $options[0];
  $block['qtde']  = $options[1];
  $block['cols']  = $options[2];
  $block['redim']  = $options[3];
  $block['title'] = _MI_RWBLOCK1_NAME;

  $categ = new Categoria(null,$options[0]);
  $block['larg'] = $categ->getLarg();
  $block['alt'] = $categ->getAlt();

  $banner = new RWbanners();
  $arr = $banner->getBanners(false, 'ORDER BY RAND()', $options[0], $options[1]);

  $arr2 = array();
  $arr3 = array();
  for($i = 0; $i <= count($arr)-1; $i++){
    $arr[$i]->inchits();
    foreach($arr[$i] as $key=>$value){
      $arr2[$key] = $value;
    }
    $arr3[] = $arr2;
  }
  for($i = 0; $i <= count($arr3)-1; $i++){
    if (stristr($arr3[$i]['grafico'], '.swf')) {
      $arr3[$i]['swf'] = 1;
      $arq = explode('/',$arr3[$i]['grafico']);
      $grafico1 = _RWBANNER_DIRIMAGES.'/'.$arq[count($arq)-1];
      include_once(XOOPS_ROOT_PATH.'/modules/rw_banner/class/FlashHeader.php');
      $f = new FlashHeader($grafico1);
      $result = $f->getimagesize();
      $arr3[$i]['fps'] = ($result['frameRate']);
    }
  }
  $block['banners'] = $arr3;

  return $block;
}

function edita_banner($options){
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
  //Redimensionar imagens?
  if ($options[3] == 1)
    $check = 'checked="checked"';
  else
    $check = '';
  $qtde = _MB_OPTION4."&nbsp;<input type='checkbox' name='options[]' value='1' ".$check." onchange='javascript:options3.value = this.value;' />"._YES;
  $form .= "<br />".$qtde.'<br />'._MB_OPTION4_DESC;

  return $form;
}

?>

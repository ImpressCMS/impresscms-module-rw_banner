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
define("_RW_TAG_ERROR", '<div style="color: #FE2626;">Algo errado com a TAG <b>"%s"</b>, verifique a sintaxe e tente novamente.</div>');
define("_RW_TAG_ERROR1", '<div style="color: #FE2626;">A TAG <b>"%s"</b> n�o existe, antes de usar uma TAG ela deve ser cadastrada pela administra��o.</div>');
class RWTag
{
	var $db;
	var $id;
	var $title;
	var $name;
	var $codbanner;
	var $categ;
	var $qtde;
	var $cols;
	var $modid;
	var $obs;
	var $status;
	var $errormsg;
	var $isRandom = true;

    //Construtor
	function RWTag($dados=null, $id = null)
	{
        if ($dados == null && $id != null){
    	  $this->db = &Database::getInstance();
    	  $sql = 'SELECT * FROM '.$this->db->prefix('rw_tags').' WHERE id='.$id;
    	  $query = $this->db->query($sql);
    	  $row = $this->db->fetchArray($query);	
    	  
		  $this->id = $row['id'];
		  $this->title = $row['title'];
		  $this->name = $row['name'];
		  $this->codbanner = $row['codbanner'];
		  $this->categ = $row['categ'];
		  $this->qtde = $row['qtde'];
		  $this->cols = $row['cols'];
		  $this->modid = $row['modid'];
		  $this->obs = $row['obs'];
		  $this->status = $row['status'];
		  $this->isRandom = ($this->getCodbanner() == 0 || $this->getCodbanner() == '')?true:false;
        }elseif ($dados != null){
		  $this->id = (!empty($dados['id']))?$dados['id']:'';
		  $this->title = (!empty($dados['title']))?$dados['title']:'';
		  $this->name = (!empty($dados['name']))?$dados['name']:'';
		  $this->codbanner = (!empty($dados['codbanner']))?$dados['codbanner']:'';
		  $this->categ = (!empty($dados['categ']))?$dados['categ']:'';
		  $this->qtde = (!empty($dados['qtde']))?$dados['qtde']:'';
		  $this->cols = (!empty($dados['cols']))?$dados['cols']:'';
		  $this->modid = (!empty($dados['modid']))?$dados['modid']:'';
		  $this->obs = (!empty($dados['obs']))?$dados['obs']:'';
		  $this->status = (!empty($dados['status']))?$dados['status']:'';
		  $this->isRandom = ($this->getCodbanner() == 0 || $this->getCodbanner() == '')?true:false;
        }else{
		  $this->id = '';
		  $this->title = '';
		  $this->name = '';
		  $this->codbanner = '';
		  $this->categ = '';
		  $this->qtde = '';
		  $this->cols = '';
		  $this->modid = '';
		  $this->obs = '';
		  $this->status = '';
        }
	}
    // M�todos get e set de todos os atributos
    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }
    function getTitle()
    {
        return $this->title;
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

    function setCodbanner($codbanner)
    {
        $this->codbanner = $codbanner;
    }
    function getCodbanner()
    {
        return $this->codbanner;
    }

    function setCateg($categ)
    {
        $this->categ = $categ;
    }
    function getCateg()
    {
        return $this->categ;
    }
    
    function setQtde($qtde)
    {
        $this->qtde = $qtde;
    }
    function getQtde()
    {
        return $this->qtde;
    }

    function setCols($cols)
    {
        $this->cols = $cols;
    }
    function getCols()
    {
        return $this->cols;
    }

    function setModid($modid)
    {
        $this->modid = $modid;
    }
    function getModid()
    {
        return $this->modid;
    }

    function setObs($obs)
    {
        $this->obs = $obs;
    }
    function getObs()
    {
        return $this->obs;
    }

    function setStatus($status)
    {
        $this->status = $status;
    }
    function getStatus()
    {
        return $this->status;
    }
    
    function setError($error)
    {
        $this->errormsg = $error;
    }
    function getError()
    {
        return $this->errormsg;
    }
    //fim m�todos set e get dos atributos
    
    function clearDb(){
         $this->db = null;
    }
    
    //Insere uma nova tag no banco de dados
	function grava($flag=null){
		$this->db = &Database::getInstance();
        $sts = ($flag != null)?$flag:1;
        $sql = 'INSERT INTO '.$this->db->prefix('rw_tags').' (title, name, codbanner, categ, qtde, cols, modid, obs, status) VALUES ("'.$this->title.'", "'.$this->name.'", "'.$this->codbanner.'", "'.$this->categ.'", "'.$this->qtde.'", "'.$this->cols.'", \''.$this->modid.'\', \''.$this->obs.'\', "'.$sts.'")';
        if ($query = $this->db->queryF($sql))
          return true;
        else{
          $this->setError($this->db->error());
          return false;  
        }  
	}

	//Edita a tag instanciada e salva as altera��es no banco de dados
	function edita(){
		$this->db = &Database::getInstance();
		$sql = 'UPDATE '.$this->db->prefix('rw_tags').' SET title="'.$this->title.'", name="'.$this->name.'", codbanner="'.$this->codbanner.'", categ="'.$this->categ.'", qtde="'.$this->qtde.'", cols="'.$this->cols.'", modid=\''.$this->modid.'\', obs=\''.$this->obs.'\', status="'.$this->status.'" WHERE id= '.$this->id;
        if ($query = $this->db->queryF($sql))
          return true;
        else{
          $this->setError($this->db->error());
          return false;
        }
	}

	//Exclui a tag instanciada do banco de dados.
	function exclui(){
		$this->db = &Database::getInstance();
		$sql = 'DELETE FROM '.$this->db->prefix('rw_tags').' WHERE id= '.$this->id;
        if ($query = $this->db->queryF($sql))
          return true;
        else{
          $this->setError($this->db->error());
          return false;
        }
	}
	
    //Retorna um array associativo de todas as tags encontradas.
	function getTags($order, $inArray=false){
		$this->db = &Database::getInstance();
		$extra = ($order != null)?' '.$order:'';
   	    $sql = 'SELECT id FROM '.$this->db->prefix('rw_tags').$extra;
    	$query = $this->db->query($sql);
    	$tags = array();
    	while(list($id) = $this->db->fetchRow($query)){
          $tag = new RWTag(null,$id);
      	  unset($tag->db);
      	  unset($tag->errormsg);
      	  $tags[] =& $tag;
      	  unset($tag);
    	}
    	if ($inArray){
          foreach($tags as $tag){
            $arr_tags[] = $tag->getName();
          }
          return $arr_tags;
        }
    	return $tags;
	}

    //Altera o status da tag. Se o parametro sts for passado altera o status atual pelo sts sen�o ele altera o status para o inverso do status atual Ex.: Status = 0; Novo Status = 1;
    function mudaStatus($sts=null) {
      $this->status = (isset($sts))?$sts:($this->status == 1)?0:1;
      return $this->edita();
    }
    
	//Retorna o nome da categoria que a tag est� vinculada
	function getTagCategName(){
        $this->db = &Database::getInstance();
		$sql = 'SELECT titulo FROM '.$this->db->prefix('rw_categorias').' WHERE cod='.$this->categ;
    	$query = $this->db->query($sql);
    	list($nome) = $this->db->fetchRow($query);
    	return $nome;
	}
	
    //Retorna o nome do m�dulo que a tag instanciada est� vinculada. Caso n�o esteja vinculada a nenhum m�dulo retorna false
    function getModuleName(){
      $mids = unserialize($this->getModid());
      if (count($mids) == 1 && $mids[0] == 0){
        return false;
      }else{
        $mods = '';
        for ($i = 0; $i <= count($mids)-1; $i++){
          $sql = "SELECT name FROM ".$this->db->prefix("modules").' WHERE mid="'.$mids[$i].'"';
          if($query = $this->db->query($sql)){
            $tot = $this->db->getRowsNum($query);
            if($tot > 0){
              list($name) = $this->db->fetchRow($query);
              $mods .= $name.', ';
            }
          }
        }
        $mods = substr($mods,0,strlen($mods)-2);
        unset($mids);
        return $mods;
      }
    }
}
?>

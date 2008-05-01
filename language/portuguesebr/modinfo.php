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

//xoops_version.php
define("_MI_RWBANNER_NAME","rw-banner");
define("_MI_RWBANNER_DESC","Sistema de Gerenciamento e exibi��o de banners rand�micos.");
define("_MI_RWBANNER_DIR_NAME", "rw_banner");

define("_MI_RWBANNER_TABLE1", "rw_banner");
define("_MI_RWBANNER_TABLE2", "rw_categorias");
define("_MI_RWBANNER_TABLE3", "rw_tags");

define("_MI_RWBLOCK1_NAME","Banner Rotativo");
define("_MI_RWBLOCK1_NAME_DESC", "Cria um bloco com 1 ou mais banners rand�micos");
define("_MI_RWBLOCK2_NAME","Estat�sticas do Cliente");
define("_MI_RWBLOCK2_NAME_DESC", "Cria um bloco que exibe para o cliente as estat�sticas de seus banners");
define("_MI_RWBLOCK3_NAME","Banner DHTML");
define("_MI_RWBLOCK3_NAME_DESC", "Cria um bloco que exibe uma janela DHTML de fechamento autom�tico centralizada na tela.");
define("_MI_RWBLOCK4_NAME","Ajax Banner");
define("_MI_RWBLOCK4_NAME_DESC", "Cria um bloco que exibe os banners e utiliza ajax para dar refresh no bloco e mudar os banners.");
define("_MI_RWBLOCK5_NAME","Drop-in Banner");
define("_MI_RWBLOCK5_NAME_DESC", "Cria um bloco que exibe um box DHTML que surge na tela com os banners selecionados.");
define("_MI_RWBLOCK6_NAME","LightBox Banner");
define("_MI_RWBLOCK6_NAME_DESC", "Exibe o banners numa Div DHTML cheia de efeitos legais.");

define('_MI_RW_DIRIMAGES', "Dir. Banners:");
define('_MI_RW_DIRIMAGES_DESC', "Diret�rio padr�o para o upload dos banners");
define('_MI_RW_SHOWCADFORM', "Permitir Cadastro:");
define('_MI_RW_SHOWCADFORM_DESC', "Permitir que usu�rios cadastrem seus banners atrav�s de formul�rio na p�gina principal do m�dulo? Se sim formul�rio de cadastro � exibido.");
define('_MI_RW_NUMREGISTROS', "Quantidade de Banners:");
define('_MI_RW_NUMREGISTROS_DESC', "Quantidade de Banners exibidos por p�gina na administra��o do m�dulo.");
define('_MI_RW_PERMCLIENT', "Cliente pode alterar banner:");
define('_MI_RW_PERMCLIENT_DESC', "Sim permite que o cliente de banner possa alterar os dados de seus banners.");
define('_MI_RW_CAMPOSPERM', "Campos Permitidos:");
define('_MI_RW_CAMPOSPERM_DESC', "Selecione os campos que o cliente ter� permiss�o de alterar caso a op��o acima esteja ativada.");

define("_MI_RWBANNER_HISTORY","
<b>=> Version 1.5 (10/09/2006)<br/>
===================================<br/></b>
<ul>
<li>Resolvido enfim o problema de contabiliza��o dos banners em flash. Todo o action script do banner do m�dulo foi refeito e os bugs corrigidos.</li>
<li>Todo o m�dulo foi reformulado. Agora todo o seu c�digo � orientado a objeto e est� muito mais r�pido e est�vel.</li>
<li>Inclu�da a op��o de per�odo para a exibi��o dos banners. Na hora de cadastrar um voc� define um per�do (em dias) para esse banner ser exibido, terminado esse per�odo o banner � desativado e n�o mais � exibido para os usu�rios.</li>
<li>Com um pequeno hack no core do xoops, agora � poss�vel incluir banners em qualquer m�dulo que aceite bbcodes como o news ou o cbb. Portanto agora � poss�vel exibir banners em not�cias, artigos, posts de f�rum e muito mais. Para maiores informa��es sobre como usar este recurso leia o arquivo readme.txt</li>
<li>Adicionada a fun��o de gerenciar as TAGS SMARTY do m�dulo. Antes, para exibir seus banners no tema do site ou nos templates dos m�dulos voc� tinha que criar manualmente as tags inserindo o comando no arquivo header.php. Agora, o hack continua necess�rio, por�m voc� s� o inclui uma vez e a partir da� cria, edita, muda o status e apaga as tags direto pela administra��o do site.</li>
<li>2 novos blocos com efeitos DHTML foram criados, Drop-in Banner e LightBox Banner. Agora voc� pode dar um novo destaque aos seus banners.</li>
</ul>
<b>=> Version 1.4 RC (02/04/2006)<br/>
===================================<br/></b>
<ul>
<li>Inclus�o de um novo bloco. Ajax Banner, este bloco monta uma tabela com os banners selecionados atrav�s dos crit�rios de configura��o e muda os banners exibidos de x em x segundos tamb�m definidos nas configura��es.<li>
<li>Criados os templates para todos os blocos. Agora ficou muito mais f�cil alterar o formato da exibi��o dos banners dentro dos blocos.<li>
</ul>
<b>=> Version 1.3.2 RC1 (23/02/2006)<br/>
===================================<br/></b>
<ul>
<li>Inclus�o de um novo bloco. Banner DHTML, este bloco cria uma �rea flutuante que se fecha automaticamente em X segundos e possui op��o para sele��o de cor de fundo e da borda, quantos banners ser�o exibidos, em quantas colunas, mostrar o banner 1 vez a cada X reloads entre outras.</li>
</ul>
<b>=> Version 1.3.2 RC (05/02/2006)<br/>
===================================<br/></b>
<ul>
<li>Corrigido o problema de contabiliza��o de cliques dos banners em flash.</li>
<li>Altera��o na tela de inclus�o e edi��o de banners e inclus�o e edi��o de categorias. Agora est� sendo usado a classe de formul�rios do pr�prio xoops.</li>
<li>Inclus�o tamb�m na �rea de adi��o e edi��o de banners a op��o de upload do banner, agora n�o � necess�rio que se coloque toda vez a url da imagem, podendo ser escolhida a op��o de url ou upload. Para banners em flash (swf) somente usar o upload para que as est�tisticas deste banner funcionem.</li>
<li>Corrigidos os bugs da p�gina do m�dulo no lado do usu�rio, agora os usu�rios do site que s�o clientes de banners podem acompanhar as estat�sticas de seus banners atrav�s desta �rea.</li>
<li>Inclus�o da op��o de contrata��o de banners por clique, quando for atingido o total de cliques contratados o banner se torna inativo e n�o � mais exibido.</li>
</ul>
<b>=> Version 1.3 RC (18/09/2005)<br/>
===================================<br/></b>
<ul>
<li>Altera��o na fun��o de exibi��o dos banners no header e nos templates. Foi adicionada a op��o de se exibir uma categoria somente em um m�dulo espec�fico.</li>
<li>Devido � esta altera��o na fun��o, foi inclu�da mais uma op��o nos formul�rios de cadastro e edi��o de categorias, com esta nova op��o, o administrador do m�dulo tem como vincular uma categoria a um m�dulo espec�fico, fazendo com que os banners dessa categoria s� sejam exibidos no m�dulo vinculado.</li>
<li>Foram criadas as constantes de idioma.</li>
<li>Um bug ainda persiste, ainda n�o consegui resolver o problema de contabiliza��o de cliques para banner em flash e c�digo html.</li>
</ul>
<b>=> Version 1.1 RC (14/09/2005)<br/>
==================================<br/></b>
<ul>
<li>Foram corrigidos v�rios bugs encontrados na vers�o anterior.</li>
<li>Inclu�da a op��o de cadastrar banners para um determinado cliente.</li>
<li>A �rea administrativa foi modificada, ficando mais intu�tiva e organizada.</li>
<li>Adicionado um novo bloco, estat�ticas do cliente, que exibe para o cliente as principais estat�sticas de seus banners.</li>
<li>Criada a �rea do cliente, onde ele tem acesso as estat�sticas de seus banners, op��o de altera��o da url dos banners e ainda o envio das estat�sticas por email.</li>
</ul>
<b>=> Version 0.9 Beta 1 (11/09/2005)<br/>
==================================<br/></b>
<ul>
<li>Lan�amento p�blico da 1� vers�o de testes.</li>
</ul>");

define('_MI_RWBANNER_AUTHOR_WORD_DESC', "Agrade�o a todos os amigos da comunidade
 <a href='http://www.xoopstotal.com.br' target='_blank'>XoopsTotal</a> que me ajudaram
 com id�ias e sugest�es para o desenvolvimento deste m�dulo. Um agradecimento todo especial aos grandes amigos
 <a href='http://www.xoopstotal.com.br/userinfo.php?uid=11' target='_blank'>Wilson</a> ,
 <a href='http://www.xoopstotal.com.br/userinfo.php?uid=5' target='_blank'>Giba</a> e
<a href='http://www.xoopstotal.com.br/userinfo.php?uid=8' target='_blank'>EyeKeeper</a>
pela enorme ajuda, suas brilhantes id�ias, tradu��es e tamb�m pela colabora��o em todas as fases de testes do m�dulo.");

// About.php constants
define('_MI_RWBANNER_AUTHOR_INFO', "Desenvolvedores");
define('_MI_RWBANNER_DEVELOPER_LEAD', "Desenvolvedor L�der");
define('_MI_RWBANNER_DEVELOPER_CONTRIBUTOR', "Colaboradores");
define('_MI_RWBANNER_DEVELOPER_WEBSITE', "Website");
define('_MI_RWBANNER_DEVELOPER_EMAIL', "Email");
define('_MI_RWBANNER_DEVELOPER_CREDITS', "Cr�ditos");
define('_MI_RWBANNER_MODULE_INFO', "Informa��es de Desenvolvimento do m�dulo");
define('_MI_RWBANNER_MODULE_STATUS', "Condi��es");
define('_MI_RWBANNER_MODULE_RELEASE_DATE', "Data da vers�o");
define('_MI_RWBANNER_MODULE_DEMO', "Site de demonstra��o");
define('_MI_RWBANNER_MODULE_SUPPORT', "Site oficial de suporte");
define('_MI_RWBANNER_MODULE_BUG', "Reportar um bug para este m�dulo");
define('_MI_RWBANNER_MODULE_SUBMIT_BUG', "Enviar um bug");
define('_MI_RWBANNER_MODULE_FEATURE', "Sugest�es e novas caracter�sticas para este m�dulo");
define('_MI_RWBANNER_MODULE_SUBMIT_FEATURE', "Solicitar uma nova caracter�stica");
define('_MI_RWBANNER_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_RWBANNER_AUTHOR_WORD', "Palavras do autor");
define('_MI_RWBANNER_VERSION_HISTORY', "Hist�ria da vers�o");
define('_MI_RWBANNER_BY', "Por");
// RC
define('_MI_RWBANNER_WARNING_RC', "Este m�dulo foi disponibilizado sem quaisquer garantias. Este m�dulo � uma vers�o Release Candidate e n�o pode ser usado em um site de produ��o. O m�dulo ainda est� sob desenvolvimento ativo e seu uso � de sua pr�pria responsabilidade, o que significa que os autores n�o se responsabilizam.");

//admin/menu.php
define("_ADM_MENU_TITLE1","�ndice");
define("_ADM_MENU_TITLE2","Blocos/Grupos");
define("_ADM_MENU_TITLE3","Cadastrar Banner");
define("_ADM_MENU_TITLE4","Cadastrar Categoria");
define("_ADM_MENU_TITLE5","Suporte");
define("_ADM_MENU_TITLE6","Sobre o M�dulo");
define("_ADM_MENU_TITLE7","Prefer�ncias");
define("_ADM_MENU_TITLE8","Cadastrar Tags");

?>

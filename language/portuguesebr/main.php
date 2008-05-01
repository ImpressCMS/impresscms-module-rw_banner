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

//index.php
define("_NOPERM1","Voc� n�o possui banners de publicidade cadastrados no site portanto n�o possui permiss�o para acessar esta �rea!");
define("_MD_MSG_INDEX_NOUSER","Para poder utilizar os servi�os de publicidade do %s voc� precisa ser um usu�rio cadastrado.
   Este procedimento visa ter um melhor controle de nossos parceiros e um melhor gerenciamento de nossas m�dias publicit�rias.<br /><br />
   Caso j� seja um usu�rio cadastrado no site, clique <a href=\"%s\">aqui</a> e fa�a o login para que possa preencher o formul�rio de cadastro
   de banners e participar de nosso sistema de publicidade. Se voc� ainda n�o � um usu�rio cadastrado no site, clique <a href=\"%s\">aqui</a> e
   fa�a seu cadastro. Ap�s ter se cadastrado no site voc� estar� apto a participar de nosso sistema de publicidade.");
define("_MD_MSG_INDEX_OLAUSER","Ol� %s, seja bem vindo ao Sistema de Publicidade do %s.<br /></br>");
define("_MD_MSG_INDEX_NOBANNER","Voc� ainda n�o possui banners cadastrados em nosso sistema. Caso deseje participar
de nosso sistema de publicidade preencha o formul�rio de cadastro de banners clicando <a href=\"inser.php\">aqui</a>.");
define("_MD_MSG_INDEX_NOBANNER1","O cadastramento de novos banners est� desativado no momento, caso queira incluir um banner no sistema entre em contato com o administrador do site atrav�s do formul�rio de contato ou mp.");
define("_MD_CARREG","Carregando...");
define("_MD_MSG_INDEX_CADBANNER","Para cadastrar novos banners no sistema clique <a href=\"inser.php\">aqui</a>");
define("_MD_MSG_NEWBANNER","Ao cadastrar um banner ele ser� analisado pela equipe respons�vel. Algum membro da equipe entrar� em contado com voc� para definir os �ltimos detalhes sobre o banner, ap�s isso, o banner sendo aprovado ele ser� ativado e come�ar� a ser exibido no site.");

define("_MD_TITLE1","Seus Banners Cadastrados");
define("_MD_TITLE2","COD");
define("_MD_TITLE3","CATEGORIA");
define("_MD_TITLE4","IMPRESS�ES");
define("_MD_TITLE5","IMP. REST.");
define("_MD_TITLE6","CLIQUES");
define("_MD_TITLE7","% DE CLIQUES");
define("_MD_TITLE8","DATA CRIA��O");
define("_MD_TITLE9","STATUS");
define("_MD_TITLE10","OP��ES");
define("_MD_TITLE16","CLIQUES REST.");

define("_MD_BANNER_STATUS1","Banner Ativo");
define("_MD_BANNER_STATUS2","Banner Inativo");

define("_MD_BANNER_EXIBREST","Ilimitado");

define("_MD_EMAIL_STATS","Enviar Estat�stica por E-mail");

define("_MD_TITLE11","Estat�stica do Banner C�digo n�");
define("_MD_TITLE12","Imagem:");
define("_MD_TITLE13","Link:");
define("_MD_TITLE14","Alterar Link");
define("_MD_TITLE15","Enviar por E-mail as Estat�sticas deste banner");

define("_MD_BUTTON1","Ordernar");
define("_MD_BUTTON2","Banners por P�gina");

//include/function.php
define("_MD_SUBJECT_EMAILSTATS","Estat�sticas do seu banner no site");
define("_MD_BODY1_EMAILSTATS","Abaixo est�o as estat�sticas completas do seu banner no site");
define("_MD_BODY2_EMAILSTATS","Nome do Cliente:");
define("_MD_BODY3_EMAILSTATS","C�digo do Banner:");
define("_MD_BODY4_EMAILSTATS","Imagem Banner:");
define("_MD_BODY5_EMAILSTATS","Link do Banner:");
define("_MD_BODY6_EMAILSTATS","Impress�es Contratadas:");
define("_MD_BODY7_EMAILSTATS","Impress�es Realizadas:");
define("_MD_BODY8_EMAILSTATS","Impress�es Restantes:");
define("_MD_BODY9_EMAILSTATS","Cliques Recebidos:");
define("_MD_BODY10_EMAILSTATS","Porcentagem de Cliques:");
define("_MD_BODY11_EMAILSTATS","Cliques Contratados:");
define("_MD_BODY12_EMAILSTATS","Cliques Restantes:");
define("_MD_BODY13_EMAILSTATS","Data de Cadastro:");
define("_MD_BODY14_EMAILSTATS","Per�odo Contratado:");
define("_MD_BODY15_EMAILSTATS","Final do Per�odo:");
define("_MD_BODY16_EMAILSTATS","Relat�rio gerado em:");
define("_MD_BODY17_EMAILSTATS","dias");

define("_MD_MSG_SUCESS_EMAILSTATS","As estat�sticas de seu banner foram enviadas com sucesso para o seu e-mail cadastrado no site.");
define("_MD_MSG_FAIL_EMAILSTATS","Falha ao enviar as estat�sticas de seu banner. Tente novamente mais tarde.");

//inser.php
define("_MD_BTN_OP1","Cadastrar");
define("_MD_BTN_OP2","Editar");
define("_MD_BTN_OP3","Ilimitado");

define("_MD_TITLE24","N�mero de exibi��es:");
define("_MD_TITLE500","N�mero de cliques:");
define("_MD_TITLE5001","Per�odo de Exibi��o (em dias):");
define("_MD_TITLE25","Imagem(Url):");
define("_MD_TITLE26","Link(Url):");
define("_MD_TITLE27","Usar Html?");
define("_MD_TITLE28","C�digo HTML:");
define("_MD_TITLE29","Target:");
define("_MD_TITLE51_ED","Ulpload Banner:");
define("_MD_TITLE5000","Observa��es:");
define("_MD_TITLE5000_DESC","Escreva aqui observa��es sobre o seu banner, diga ao admin do site onde deseja que seu banner seja exibo, qual a frequencia, enfim, defina tudo que achar necess�rio sobre a exibi��o de seu banner.");

define("_MD_VALUE_BTN1","Inserir novo Banner");
define("_MD_VALUE_BTN3","Editar Banner");
define("_MD_VALUE_BTN10_ED","Enviar");

define("_MD_MSG2","Banner Alterado com Sucesso!!");
define("_MD_MSG8","Banner Cadastrado com Sucesso!!");
define("_MD_MSG10","Houve um problema ao cadastrar o banner.");
define("_MD_MSG11","Houve um problema ao editar o banner.");

define("_RW_TAG_ERROR", '<div style="color: #FE2626;">Algo errado com a tag de exibi��o do banner</div>');
?>

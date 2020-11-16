<?php
// $Id: index.php,v 1.12.12.1 2005/10/28 00:48:31 skalpa Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
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
//  ------------------------------------------------------------------------ //

include "header.php";
if (empty($_POST['submit']) | !$GLOBALS['xoopsSecurity']->check()) {
    include XOOPS_ROOT_PATH."/header.php";
    include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
    $company_v = "";
    $name_v = !empty($xoopsUser) ? $xoopsUser->getVar("uname", "E") : "";
    $email_v = !empty($xoopsUser) ? $xoopsUser->getVar("email", "E") : "";
    $url_v = !empty($xoopsUser) ? $xoopsUser->getVar("url", "E") : "";
    $icq_v = !empty($xoopsUser) ? $xoopsUser->getVar("user_icq", "E") : "";
    $location_v = !empty($xoopsUser) ? $xoopsUser->getVar("user_from", "E") : "";
    $comment_v = "";
    include "contactform.php";
    $contact_form->assign($xoopsTpl);

    // <FRAMESET framespacing="0" border="true" frameborder="1" rows="100,*">
    // <FRAME src="anagrafica.htm" noResize scrolling=no>
    // <FRAME src="sub_frame.htm" noResize scrolling=no>
    // </FRAMESET>
     
    // footer //
    include XOOPS_ROOT_PATH."/footer.php";
} 
else {
    $myts =& MyTextSanitizer::getInstance();
    if ( ! ( $usersEmail = checkEmail( $myts->stripSlashesGPC($_POST['usersEmail']) ) ) ) {
		redirect_header( XOOPS_URL . "/modules/" . $xoopsModule->getVar('dirname') . "/index.php", 2, _CT_INVALIDMAIL );
		exit();
    }

    redirect_header(XOOPS_URL."/index.php",2,$messagesent);
}

?>
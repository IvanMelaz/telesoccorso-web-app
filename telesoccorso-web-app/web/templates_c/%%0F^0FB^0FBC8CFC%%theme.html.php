<?php /* Smarty version 2.6.5-dev, created on 2006-05-06 10:24:25
         compiled from alightFC/theme.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
<meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
" />
<meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
" />
<meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
" />
<meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
" />
<meta name="generator" content="XOOPS" />
<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
 - <?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
</title>
<link href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/favicon.ico" rel="SHORTCUT ICON" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/xoops.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
" />
<!-- RMV: added module header -->
<?php echo $this->_tpl_vars['xoops_module_header']; ?>

<script type="text/javascript">
<!--
<?php echo $this->_tpl_vars['xoops_js']; ?>

//-->
</script>
<script language="JavaScript1.2">

var linkset=new Array()

linkset[0]='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news">Main News</a></div>'
linkset[0]+='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/submit.php">Submit News</a></div>'
linkset[0]+='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/archive.php">News Archive</a></div>'

linkset[1]='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads">File Downloads</a></div>'
linkset[1]+='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/topten.php?rate=1">Top Rated Downloads</a></div>'
linkset[1]+='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/submit.php">Submit a Download</a></div>'

linkset[2]='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mylinks/">Weblinks</a></div>'
linkset[2]+='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mylinks/topten.php?rate=1">Top Rated Links</a></div>'
linkset[2]+='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mylinks/submit.php">Submit a Link!</a></div>'

linkset[3]='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/">Main Forums</a></div>'

linkset[4]='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xoopsfaq/">FAQ&Help</a></div>'
linkset[4]+='<div class="menuitems"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php#lost">I lost My Password!</a></div>'

var ie4=document.all&&navigator.userAgent.indexOf("Opera")==-1
var ns6=document.getElementById&&!document.all
var ns4=document.layers

function showmenu(e,which){

if (!document.all&&!document.getElementById&&!document.layers)
return

clearhidemenu()

menuobj=ie4? document.all.popmenu : ns6? document.getElementById("popmenu") : ns4? document.popmenu : ""
menuobj.thestyle=(ie4||ns6)? menuobj.style : menuobj

if (ie4||ns6)
menuobj.innerHTML=which
else{
menuobj.document.write('<layer name=gui bgColor=#E6E6E6 width=165 onmouseover="clearhidemenu()" onmouseout="hidemenu()">'+which+'</layer>')
menuobj.document.close()
}

menuobj.contentwidth=(ie4||ns6)? menuobj.offsetWidth : menuobj.document.gui.document.width
menuobj.contentheight=(ie4||ns6)? menuobj.offsetHeight : menuobj.document.gui.document.height
eventX=ie4? event.clientX : ns6? e.clientX : e.x
eventY=ie4? event.clientY : ns6? e.clientY : e.y

//Find out how close the mouse is to the corner of the window
var rightedge=ie4? document.body.clientWidth-eventX : window.innerWidth-eventX
var bottomedge=ie4? document.body.clientHeight-eventY : window.innerHeight-eventY

//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<menuobj.contentwidth)
//move the horizontal position of the menu to the left by it's width
menuobj.thestyle.left=ie4? document.body.scrollLeft+eventX-menuobj.contentwidth : ns6? window.pageXOffset+eventX-menuobj.contentwidth : eventX-menuobj.contentwidth
else
//position the horizontal position of the menu where the mouse was clicked
menuobj.thestyle.left=ie4? document.body.scrollLeft+eventX : ns6? window.pageXOffset+eventX : eventX

//same concept with the vertical position
if (bottomedge<menuobj.contentheight)
menuobj.thestyle.top=ie4? document.body.scrollTop+eventY-menuobj.contentheight : ns6? window.pageYOffset+eventY-menuobj.contentheight : eventY-menuobj.contentheight
else
menuobj.thestyle.top=ie4? document.body.scrollTop+event.clientY : ns6? window.pageYOffset+eventY : eventY
menuobj.thestyle.visibility="visible"
return false
}

function contains_ns6(a, b) {
//Determines if 1 element in contained in another- by Brainjar.com
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function hidemenu(){
if (window.menuobj)
menuobj.thestyle.visibility=(ie4||ns6)? "hidden" : "hide"
}

function dynamichide(e){
if (ie4&&!menuobj.contains(e.toElement))
hidemenu()
else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
hidemenu()
}

function delayhidemenu(){
if (ie4||ns6||ns4)
delayhide=setTimeout("hidemenu()",500)
}

function clearhidemenu(){
if (window.delayhide)
clearTimeout(delayhide)
}

function highlightmenu(e,state){
if (document.all)
source_el=event.srcElement
else if (document.getElementById)
source_el=e.target
if (source_el.className=="menuitems"){
source_el.id=(state=="on")? "mouseoverstyle" : ""
}
else{
while(source_el.id!="popmenu"){
source_el=document.getElementById? source_el.parentNode : source_el.parentElement
if (source_el.className=="menuitems"){
source_el.id=(state=="on")? "mouseoverstyle" : ""
}
}
}
}

if (ie4||ns6)
document.onclick=hidemenu

</script>
</head>
<body>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="312"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
logo.jpg" width="312" height="116"></td>
    <td width="60%"><p align="center"><?php echo $this->_tpl_vars['xoops_banner']; ?>
</td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
navbarbg.jpg" height="37">
 <div id="popmenu" class="menuskin" onMouseover="clearhidemenu();highlightmenu(event,'on')" onMouseout="highlightmenu(event,'off');dynamichide(event)">
</div>
 <tr>
    <td class="navbar" width="20%" align="center"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
arrow.jpg"><a href="#" onMouseover="showmenu(event,linkset[0])" onMouseout="delayhidemenu()">News</a></td>
    <td class="navbar" width="20%" align="center"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
arrow.jpg"><a href="#" onMouseover="showmenu(event,linkset[1])" onMouseout="delayhidemenu()">Downloads</a></td>
    <td class="navbar" width="20%" align="center"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
arrow.jpg"><a href="#" onMouseover="showmenu(event,linkset[2])" onMouseout="delayhidemenu()">Weblinks</a></td>
    <td class="navbar" width="20%" align="center"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
arrow.jpg"><a href="#" onMouseover="showmenu(event,linkset[3])" onMouseout="delayhidemenu()">Forums</a></td>
    <td class="navbar" width="20%" align="center"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
arrow.jpg"><a href="#" onMouseover="showmenu(event,linkset[4])" onMouseout="delayhidemenu()">FAQ & Help</a></td>
  </tr>
</table><br>

  <table cellspacing="0" >
    <tr>
    
      <td id="leftcolumn" valign="top">
        <!-- Start left blocks loop -->
          <?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "alightFC/theme_blockleft.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endforeach; unset($_from); endif; ?>
        <!-- End left blocks loop -->

      </td>

      <td id="centercolumn" valign="top">

        <!-- Display center blocks if any -->
        <?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>

        <table cellspacing="0">
          <tr>
            <td id="centerCcolumn" colspan="2" valign="top" >

            <!-- Start center-center blocks loop -->
            <?php if (count($_from = (array)$this->_tpl_vars['xoops_ccblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "alightFC/theme_blockcenter_c.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endforeach; unset($_from); endif; ?>
            <!-- End center-center blocks loop -->

            </td>
          </tr>
          <tr>
            <td id="centerLcolumn" valign="top">

            <!-- Start center-left blocks loop -->
              <?php if (count($_from = (array)$this->_tpl_vars['xoops_clblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "alightFC/theme_blockcenter_l.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endforeach; unset($_from); endif; ?>
            <!-- End center-left blocks loop -->

            </td><td id="centerRcolumn" valign="top">

            <!-- Start center-right blocks loop -->
              <?php if (count($_from = (array)$this->_tpl_vars['xoops_crblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "alightFC/theme_blockcenter_r.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endforeach; unset($_from); endif; ?>
            <!-- End center-right blocks loop -->

            </td>
          </tr>
        </table>

        <?php endif; ?>
        <!-- End display center blocks -->

        <div id="content">
          <?php echo $this->_tpl_vars['xoops_contents']; ?>

        </div>
      </td>

      <?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>

      <td id="rightcolumn" valign="top" height="100%">
        <!-- Start right blocks loop -->
        <?php if (count($_from = (array)$this->_tpl_vars['xoops_rblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "alightFC/theme_blockright.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endforeach; unset($_from); endif; ?>
        <!-- End right blocks loop -->
      </td>

      <?php endif; ?>

    </tr>
  </table>

  <table cellspacing="0">
    <tr id="footerbar">
      <td><a href="http://www.4thefort.com/" target="_blank"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
poweredby.gif" alt="" /></a></td>
    </tr>
  </table>
</body>
</html>
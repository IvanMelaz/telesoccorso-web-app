<?php /* Smarty version 2.6.5-dev, created on 2006-05-06 10:36:34
         compiled from exnews/theme.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head><body bgcolor="#FFFFFF">
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
<meta name="generator" content="Microsoft FrontPage 5.0" />
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
</head>
<body> 
 <body bgcolor="#FFFFFF">

<!-- Start Header -->
  
<table class="exnews" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table cellspacing="0">
        <tr id="header"> 
          <td colspan="3" id="headerbanner"><table width="100%" border="0" cellpadding="0" cellspacing="0" >
              <tr> 
                <td id="headerbanner" align="center"><?php echo $this->_tpl_vars['xoops_banner']; ?>
</td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" valign="center">
             </tr> <tr> 
    </td>
                <td id="headerbarleft">EMPTY CELL</td>  
                <td id="headerbarcenter"><img align="center" img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/exnews/logo.jpg" /></td>  
                <td id="headerbarright">EMPTY CELL</td> </tr>
            </table>
          </td>
        </tr>

              <tr> 
                <td width="266" bgcolor="#8C0003" colspan="2" height="8" border="0" cellspacing="0" cellpadding="1"> </td>
              </tr>


        <tr> 
          <td align="center" colspan="2"><table cellspacing="0" cellpadding="0" width="300px" border="0">
                <tr align="center" width="300px"> 
                  
                  
                  <td width="0" bgcolor="#d7d7d7"></td>
                  <td id="headerbar"><a class="menuHead" 
                  href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/index.php">HOME</a></td>
              
                  <td width="1" bgcolor="#d7d7d7"></td>
                  <td id="headerbar"><a class="menuhead" 
                  href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/archive.php">ARCHIVES</a></td>
                  
                  <td width="1" bgcolor="#d7d7d7"></td>
                  <td id="headerbar"><a class="menuHead" 
		   href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/wfchannel/index.php?pagenum=2">WFCHANNEL</a></td>

                  <td width="1" bgcolor="#d7d7d7"></td>
                  <td id="headerbar"><a class="menuHead" 
                  href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/contact/">CONTACT</a></td>

                  <td width="1" bgcolor="#d7d7d7"></td>
                  <td id="headerbar"><a class="menuHead" 
                  href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/myalbum/">MYALBUM</a></td>
                   
                  <td width="1" bgcolor="#d7d7d7"></td>
                  <td id="headerbar"><a class="menuHead" 
                  href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/wfchannel/index.php?pagenum=3">ADVERTISING</a></td> 

                  <td width="1" bgcolor="#d7d7d7"></td>
                  <td id="headerbar"><a class="menuHead" 
                  href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/myAds/">CLASSIFIEDS</a></td>
                  

<td width="1"  bgcolor="#d7d7d7"></td>
                  

                </tr>
      </table><tr><td id="headerbar_vrijeme">&nbsp<span id="clock"></span>
		   <script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>

/themes/exnews/clock.js">
      </script>&nbsp;&nbsp|<?php if ($this->_tpl_vars['xoops_isuser']): ?>&nbsp Hello <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><?php echo $this->_tpl_vars['xoops_uname']; ?>
</a> <?php endif; ?></span> <span class="right"> 
            <?php if ($this->_tpl_vars['xoops_isuser']): ?> <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"></a> 
            <?php else: ?> &nbsp;&nbsp;&nbsp; <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php">Login</a> 
            <?php endif; ?> 
			</td> </td>

      <table  cellspacing="0">
        <tr> 
          <td id="leftcolumn">
          
 <!-- Start left blocks loop -->
<br>
            <?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> 
			<div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
<div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
160.gif" width="120" height="1" alt="" />
            <?php endforeach; unset($_from); endif; ?> 
            <!-- End left blocks loop -->

           <br>
        <br />
     </td>

<td id="centerLcolumn">

            <!-- Start center-left blocks loop -->

                <?php if (count($_from = (array)$this->_tpl_vars['xoops_clblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> 
                 <table class="blok" align="center" cellpadding="3" cellspacing="2">
                  <tr> 
                    <td> <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
                      <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div></td>
                  </tr>
                </table>
                <?php endforeach; unset($_from); endif; ?> 
                
            <!-- End center-left blocks loop -->
      <td id="centercolumn">

<!-- Start center-right blocks loop -->
              <?php if (count($_from = (array)$this->_tpl_vars['xoops_crblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
             <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
    <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>

</div>
              <?php endforeach; unset($_from); endif; ?>
            <!-- End center-right blocks loop -->
<div id="content"><div class="blockTitle">
          <?php echo $this->_tpl_vars['xoops_contents']; ?>


        </div></div>


        <!-- Display center blocks if any -->
        <?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>

        <table cellspacing="0">
          <tr>
            <td id="centerCcolumn" colspan="2">

            <!-- Start center-center blocks loop -->
            <?php if (count($_from = (array)$this->_tpl_vars['xoops_ccblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
             <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
    <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
            <?php endforeach; unset($_from); endif; ?>
            <!-- End center-center blocks loop -->

            </td>
          </tr>
          <tr>
            

            </td>

            </td>
          </tr>
        </table>

        <?php endif; ?>
        <!-- End display center blocks -->


        
      </td>


      <?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>


      <td id="rightcolumn">
        <!-- Start right blocks loop -->
        <?php if (count($_from = (array)$this->_tpl_vars['xoops_rblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
         <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
<div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div> 
<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
160.gif" width="120" height="1" alt="" />
   <?php endforeach; unset($_from); endif; ?> 
            <!-- End right blocks loop -->

            <br />
            <br />
          </td>
 <td id="centerRcolumn">

            

      <?php endif; ?>


    </tr>
  </table>

 <table width="1200" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td class="footerbar">
| 2004 | EXNEWS | </a>
</td>
    </tr>
  </table>
</td>
  </tr>
</table>

</body>

<td id="footerbar" width="125"><p align="center">
<br><img border="0" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/poweredby.gif"><br>
<br>Powered by <a target="_blank" href="http://www.xoops.org/">Xoops</a> CMS</td>
</html>

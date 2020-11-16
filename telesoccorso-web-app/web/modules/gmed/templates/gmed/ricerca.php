<?php

include "/var/www/modules/mysqli_open_db.php";


	   $WHERE_OPTION = $_POST['WHERE_OPTION'] ;
	   $ORDER = $_POST['ORDER'] ;
	   $SORT = $_POST['SORT'] ;
	   
	   // /////////////////////////////////
	   // Seleziona i campi da visualizzare
	   // /////////////////////////////////
	   $SELECTED_STATMNT = $_POST['VISUALIZZA'] ;
	   
	   $SELECTED_FIELDS = "";
	   for($i=0;$i<count($SELECTED_STATMNT);++$i){
	   		if ($i != (count($SELECTED_STATMNT) -1)) {
	   			$SELECTED_FIELDS = $SELECTED_FIELDS.$SELECTED_STATMNT[$i];
	   			$SELECTED_FIELDS = $SELECTED_FIELDS." , "; 
	   		} else {
	   			$SELECTED_FIELDS = $SELECTED_FIELDS.$SELECTED_STATMNT[$i];
	   		}
		}
	   
	   //////////////////////////////////////
	   // Seleziona la tabella da visualizzare
	   // //////////////////////////////////// 
	
	   $SQL_STRING = "SELECT * FROM asi_gmed WHERE " ;
	   
	   //////////////////////////////////////
	   // aggiunge opzione campo WHERE
	   // ////////////////////////////////////
	   $SELECT_TEXT = $_POST['FIELD'] ;
	   $SQL_STRING = $SQL_STRING.$SELECT_TEXT ;
	   
	   ////////////////////////////////////
	   // Seleziona le opzioni da visualizzare
	   //////////////////////////////////// 
	
		switch ($WHERE_OPTION) {
		     case "UGUALE":
		       $SQL_STRING = $SQL_STRING." ='".$_POST['FIND']."'" ;
		       break;
		     case "INIT":
		       $SQL_STRING = $SQL_STRING." LIKE '".$_POST['FIND']."%'" ;
		       break;
		     Case "CONTAIN":
		       $SQL_STRING = $SQL_STRING." LIKE '%".$_POST['FIND']."%'" ;
			    break;
		}
		
			    
	   //////////////////////////////////////
	   // SECONDO FILTRO SQL
	   //////////////////////////////////////
	    
	    
	   //////////////////////////////////////
	   // Determina l' ordinamento del campo
	   //////////////////////////////////////
	    
	   $SQL_STRING = $SQL_STRING." ORDER BY ".$ORDER." ".$SORT ;
      
      	// echo  $SQL_STRING ;
      
	
		///////////////////////////////////////////////////////
		//////
		///////////////////////////////////////////////////////
		
		$xoopsOption['pagetype'] = 'user';
		include '/var/www/mainfile.php';
		include_once XOOPS_ROOT_PATH.'/class/module.textsanitizer.php';
		include_once XOOPS_ROOT_PATH .'/modules/system/constants.php';
		
		
		$gperm_handler = & xoops_gethandler( 'groupperm' );
		$groups = is_object($xoopsUser) ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;
		$username = $xoopsUser->getVar('uname');
		$uid == $xoopsUser->getVar('uid');
		
		if ($username == "") {
		    redirect_header('index.php', 3, _US_SELECTNG);
		     exit();
		}
		
		///////////////////////////////////////////////////////
		////// HEADER 
		///////////////////////////////////////////////////////
		
		include "header_risultato_ricerca.html";
		
		## Fetch result
		$query = $SQL_STRING ;
		
		$result = $mysqli->query($query);
		
		while ($row = $result->fetch_assoc()) {
		
		$ID= $row['ID'];
		
		$DATA= $row['DATA'];
		$ORA = $row['ORA'];
		$CONVENZIONE= $row['CONVENZIONE'];
		$DOSSIER= $row['DOSSIER'];
		$NOMINATIVO= $row['NOMINATIVO'];
		$INDIRIZZO = $row['INDIRIZZO'];
		$COMUNE= $row['COMUNE'];
		$TELEFONO= $row['TELEFONO'];
		$NOTE= $row['NOTE'];
		$USCITA= $row['USCITA'];
		$MEDICO = $row['MEDICO'];
		$USCITA= $row['TEMPO'];
		$USER= $row['USER'];
		$USCITA= $row['REFERTO'];
		
			$str = "risultato_ricerca.html";
			eval("PrintTemplate(\"".GetTemplate($str)."\");");
		
		}
		
		/* free result set */
			mysqli_free_result($result);
		
		/*
			TEMPLATE
		*/
		
			function GetTemplate($template) {
			return str_replace("\"","\\\"",implode("",file($template)));
		
		}
		
		## QUESTA FUNZIONE STAMPA A VIDEO IL TEMPLATE RISULTANTE DALLA FUNZIONE PRECEDENTE
		function PrintTemplate($template) {
		
			echo $template;
		
		}
		
		///////////////////////////////////////////////////////
		////// FOOTER 
		///////////////////////////////////////////////////////
		include "fooder_risultato_ricerca.html";
		
		include "/var/www/modules/mysqli_close_db.php";


?>

<?php

	   $WHERE_OPTION = $_POST['WHERE_OPTION'] ;
	   $UTENTI = $_POST['UTENTI'] ;
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
	
	   $SQL_STRING = "SELECT ".$SELECTED_FIELDS." FROM anagrafica WHERE " ;
	   
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
		
		switch ($UTENTI) {
		     case "TUTTI":
		       $SQL_STRING = $SQL_STRING." AND (DATA_DISINSTALLAZIONE ='' OR DATA_DISINSTALLAZIONE <> '' OR DATA_DISINSTALLAZIONE IS NULL ) " ;
		       break;
		     case "ATTIVI":
		       $SQL_STRING = $SQL_STRING." AND (DATA_DISINSTALLAZIONE ='' OR DATA_DISINSTALLAZIONE IS NULL)" ;
		       break;
		     Case "NON_ATTIVI":
		       $SQL_STRING = $SQL_STRING. " AND NOT(DATA_DISINSTALLAZIONE ='' OR DATA_DISINSTALLAZIONE IS NULL)" ;
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
      
		include "/var/www/modules/mysqli_open_db.php";
		
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
		include "/var/www/modules/archive/templates/header_risultato_ricerca.html";
		
		## Fetch result
		$query = $SQL_STRING ;
		
		$result = $mysqli->query($query);
		
		while ($row = $result->fetch_assoc()) {
		
		$AB_CODI= $row['AB_CODI'];
		$NOMINATIVO= $row['NOMINATIVO'];
		$MATRICOLA= $row['MATRICOLA'];
		$INDIRIZZO = $row['INDIRIZZO'];
		$COMUNE= $row['COMUNE'];
		$TELEFONO= $row['TELEFONO'];
		$ENTE = $row['ENTE'];
		$DATI_TECNICI = $row['DATI_TECNICI'];
		$DATA_INSTALLAZIONE= $row['DATA_INSTALLAZIONE'];
		$DATA_DISINSTALLAZIONE= $row['DATA_DISINSTALLAZIONE'];
		
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
		include "/var/www/modules/archive/templates/footer_risultato_ricerca.html";
		
		include "/var/www/modules/mysqli_close_db.php";


?>

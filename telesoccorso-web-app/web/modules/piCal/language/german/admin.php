<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_AM_LOADED' ) ) {





// Appended by Xoops Language Checker -GIJOE- in 2005-06-29 17:19:32
define('_AM_PI_TH_OPTIONS','Optionen (f�r gew�hnlich leer)');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-24 19:05:03
define('_AM_TZOPT_SERVER','Gleich wie Server-Zeitzone');
define('_AM_TZOPT_GMT','Als GMT');
define('_AM_TZOPT_USER','Gleich wie user\'s Zeitzone');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-06 18:03:58
define('_AM_FMT_SERVER_TZ_ALL','Zeitzone des Servers (im Winter): %+2.1f<br />Zeitzone des Servers (im Sommer): %+2.1f<br />Zeitzone des Servers: %s<br />The value of XOOPS config: %+2.1f<br />The value of piCal using: %+2.1f<br />');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:11
define('_AM_FMT_SERVER_TZ_SYSTEM','Zeitzone im Winter: %+2.1f');
define('_AM_TH_SERVER_TZ_COUNT','Events');
define('_AM_TH_SERVER_TZ_VALUE','Zeitzone');
define('_AM_TH_SERVER_TZ_VALUE_TO','Changes (-14.0��14.0)');
define('_AM_JSALRT_SERVER_TZ','Don\'t forget backing-up events table before this operation');
define('_AM_NOTICE_SERVER_TZ','If your server set the timezone area with summer time (=Day Light Saving) and some events were registerd in piCal 0.6x or 0.7x, dont\'t push this button.<br />eg) It is natural to display both -5.0 and -4.0 in EDT');
define('_AM_MB_SUCCESSTZUPDATE','Events are modified with the timezone(s).');
define('_AM_PI_UPDATED','Plugins wurden updated');
define('_AM_PI_TH_TYPE','Typ');
define('_AM_PI_TH_TITLE','Titel');
define('_AM_PI_TH_DIRNAME','Modul Verzeichnisname');
define('_AM_PI_TH_FILE','Plugin Datei');
define('_AM_PI_TH_DOTGIF','Dot GIF');
define('_AM_PI_TH_OPERATION','Operation');
define('_AM_PI_ENABLED','Aktiv');
define('_AM_PI_DELETE','L�schen');
define('_AM_PI_NEW','Neu');
define('_AM_PI_VIEWYEARLY','Jahresansicht');
define('_AM_PI_VIEWMONTHLY','Monatsansicht');
define('_AM_PI_VIEWWEEKLY','Wochenansicht');
define('_AM_PI_VIEWDAILY','Tagesansicht');

define( 'PICAL_AM_LOADED' , 1 ) ;


// titles

// Appended by Xoops Language Checker -GIJOE- in 2004-06-22 18:39:02
define('_AM_OPT_PAST','fr�her');
define('_AM_OPT_FUTURE','sp�ter');
define('_AM_OPT_PASTANDFUTURE','fr�her&sp�ter');

define("_AM_CONFIG","piCal-Konfiguration");
define("_AM_GENERALCONF","Einstellungen");
define("_AM_ADMISSION","Termin-Freigabe");
define("_AM_MENU_EVENTS","Termin-Manager");
define("_AM_MENU_CATEGORIES","Kategorie-Manager");
define("_AM_MENU_CAT2GROUP","Kategorie-Berechtigungen");
define("_AM_ICALENDAR_IMPORT","iCalendar Import");
define("_AM_GROUPPERM","Gruppenberechtigungen");
define("_AM_TABLEMAINTAIN","Tabellen-Wartung (Upgrade)");
define("_AM_MYBLOCKSADMIN","piCal\'s Block&Gruppen-Admin");

// forms
define("_AM_BUTTON_EXTRACT","Herausfiltern");
define("_AM_BUTTON_ADMIT","Freigeben");
define("_AM_BUTTON_MOVE","Verschieben");
define("_AM_BUTTON_COPY","Kopieren");
define("_AM_CONFIRM_DELETE","L�schen - OK?");
define("_AM_CONFIRM_MOVE","Die Zuordnung zur alten Kategorie l�schen und zur angegebenen Kategorie hinzuf�gen - OK?");
define("_AM_CONFIRM_COPY","Der ausgew�hlten Kategorie zuordnen - OK?");

// format
define("_AM_DTFMT_LIST_ALLDAY",'d-m-Y');
define("_AM_DTFMT_LIST_NORMAL",'d-m-Y<\b\r />H:i');

// admission
define("_AM_LABEL_ADMIT","Ausgew�hlte Termine: ");
define("_AM_MES_ADMITTED","Termine wurden freigegeben");
define("_AM_ADMIT_TH0","Benutzer");
define("_AM_ADMIT_TH1","Start-Zeitpunkt");
define("_AM_ADMIT_TH2","End-Zeitpunkt");
define("_AM_ADMIT_TH3","Titel");
define("_AM_ADMIT_TH4","Regeln f�r wiederkehrende Termine");

// events manager & importing iCalendar

define("_AM_LABEL_IMPORTFROMWEB","iCalendar Daten aus dem Web importieren (URL beginnt mit 'http://' oder 'webcal://')");
define("_AM_LABEL_UPLOADFROMFILE","iCalendar Daten uploaden (lokale Datei)");
define("_AM_BUTTON_IMPORT","Importieren");
define("_AM_BUTTON_UPLOAD","Uploaden");
define("_AM_BUTTON_EXPORT","Exportieren");
define("_AM_LABEL_IO_CHECKEDITEMS","Ausgew�hlte Termine:");
define("_AM_LABEL_IO_OUTPUT","werden im iCalendar ausgegeben");
define("_AM_LABEL_IO_SELECTPLATFORM","Plattform w�hlen");
define("_AM_LABEL_IO_DELETE","werden gel�scht");
define("_AM_MES_EVENTLINKTOCAT","Termin(e) wurde(n) dieser Kategorie zugeordnet");
define("_AM_MES_EVENTUNLINKED","Termin(e) wurde(n) aus der Zuordnung zu der alten Kategorie entfernt");
define("_AM_FMT_IMPORTED","Termin(e) wurde(n) aus '%s' importiert");
define("_AM_MES_DELETED","Termin(e) wurde(n) gel�scht");
define("_AM_IO_TH0","Benutzer");
define("_AM_IO_TH1","Start-Zeitpunkt");
define("_AM_IO_TH2","End-Zeitpunkt");
define("_AM_IO_TH3","Titel");
define("_AM_IO_TH4","Regeln f�r wiederkehrende Termine");
define("_AM_IO_TH5","Freigabe");

// Group's Permissions
define( '_AM_GPERM_G_INSERTABLE' , "d�rfen hinzuf�gen" ) ;
define( '_AM_GPERM_G_SUPERINSERT' , "d�rfen uneingeschr�nkt hinzuf�gen" ) ;
define( '_AM_GPERM_G_EDITABLE' , "d�rfen editieren" ) ;
define( '_AM_GPERM_G_SUPEREDIT' , "d�rfen uneingeschr�nkt editieren" ) ;
define( '_AM_GPERM_G_DELETABLE' , "d�rfen l�schen") ;
define( '_AM_GPERM_G_SUPERDELETE' , "d�rfen uneingeschr�nkt l�schen" ) ;
define( '_AM_GPERM_G_TOUCHOTHERS' , "d�rfen die Eingaben anderer Benutzer �ndern" ) ;
define( '_AM_CAT2GROUPDESC' , "Kategorien ausw�hlen, zu denen Zugriff gew�hrt werden soll" ) ;
define( '_AM_GROUPPERMDESC' , "Hier k�nnen die Berechtigungen f�r jede Benutzergruppe einzeln eingestellt werden.<br />Um diese Funktion zu aktivieren, muss zuerst unter 'Einstellungen -> Berechtigungen f�r Benutzer' die Option 'Festgelegt durch Gruppenberechtigungen' ausgew�hlt werden.<br />Anmerkung: Die Einstellungen f�r die beiden Gruppen 'Administratoren'(Webmasters) und 'G�ste'(Anonymous Users) werden ignoriert." ) ;

// Table Maintenance
define( '_AM_MB_SUCCESSUPDATETABLE' , "Tabellen-Update war erfolgreich" ) ;
define( '_AM_MB_FAILUPDATETABLE' , "Tabellen-Update ist fehlgeschlagen" ) ;
define( '_AM_NOTICE_NOERRORS' , "Es existiert kein Fehler in den Tabellen oder Eintr�gen." ) ;
define( '_AM_ALRT_CATTABLENOTEXIST' , "Die Kategorie-Tabelle existiert nicht.<br />\nSoll diese Tabelle erstellt werden?" ) ;
define( '_AM_ALRT_OLDTABLE' , "Die Tabellenstruktur der Termin-Tabelle ist veraltet.<br />\nSoll diese Tabelle aktualisiert werden?" ) ;
define( '_AM_ALRT_TOOOLDTABLE' , "Ein Tabellen-Fehler ist aufgetreten.<br />\nVielleicht wird piCal 0.3x (oder fr�her) verwendet.<br />\nZuerst auf 0.4x oder 0.5x updaten." ) ;
define( '_AM_FMT_WRONGSTZ' , "%s Termin(e) sind mit einer falschen Zeitzone eingetragen.<br />Soll das repariert werden?" ) ;

// Categories
define( '_AM_CAT_TH_TITLE' , 'Titel' ) ;
define( '_AM_CAT_TH_DESC' , 'Beschreibung' ) ;
define( '_AM_CAT_TH_PARENT' , '�bergeordnete Kategorie' ) ;
define( '_AM_CAT_TH_OPTIONS' , 'Optionen' ) ;
define( '_AM_CAT_TH_LASTMODIFY' , 'Letzte �nderung' ) ;
define( '_AM_CAT_TH_OPERATION' , 'Operation' ) ;
define( '_AM_CAT_TH_ENABLED' , 'Aktivieren' ) ;
define( '_AM_CAT_TH_WEIGHT' , 'Position' ) ;
define( '_AM_CAT_TH_SUBMENU' , 'im Untermen� eintragen' ) ;
define( '_AM_BTN_UPDATE' , 'Aktualisieren' ) ;
define( '_AM_MENU_CAT_EDIT' , 'Kategorie editieren' ) ;
define( '_AM_MENU_CAT_NEW' , 'Neue Kategorie erstellen' ) ;
define( '_AM_MB_MAKESUBCAT' , 'Unterkategorie' ) ;
define( '_AM_MB_MAKETOPCAT' , 'Top-Level-Kategorie erstellen' ) ;
define( '_AM_MB_CAT_INSERTED' , 'Neue Kategorie erstellt' ) ;
define( '_AM_MB_CAT_UPDATED' , 'Kategorie aktualisiert' ) ;
define( '_AM_FMT_CAT_DELETED' , '%s Kategorie(n) gel�scht' ) ;
define( '_AM_FMT_CAT_BATCHUPDATED' , '%s Kategorie(n) aktualisiert' ) ;
define( '_AM_FMT_CATDELCONFIRM' , 'Soll die Kategorie %s gel�scht werden?' ) ;


}

?>

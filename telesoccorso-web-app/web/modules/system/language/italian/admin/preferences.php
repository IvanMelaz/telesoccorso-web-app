<?php
// $Id: preferences.php,v 1.6 2003/03/26 03:33:17 w4z004 Exp $

// ------------------------------------------------------------------------- //
//       Italian Translation by Marco Ragogna (m.ragogna@xoopsit.net)        //
//                and Andrea Bandino (a.bandino@xoopsit.net)                 //
//        webmasters of XOOPS :: Italian Corner  (www.xoopsit.net)           //
//              the XOOPS Official Italian Site                              //
// ------------------------------------------------------------------------- //

//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED","Updato");

define("_MD_AM_SITEPREF","Preferenze del sito");
define("_MD_AM_SITENAME","Nome del sito");
define("_MD_AM_SLOGAN","Slogan del sito");
define("_MD_AM_ADMINML","Indirizzo email dell'amministratore");
define("_MD_AM_LANGUAGE","Lingua di default");
define("_MD_AM_STARTPAGE","Modulo della pagina iniziale di default");
define("_MD_AM_NONE","Nessuno");
define("_MD_AM_SERVERTZ","Fuso orario del server");
define("_MD_AM_DEFAULTTZ","Fuso orario di default");
define("_MD_AM_DTHEME","Tema di default");
define("_MD_AM_THEMESET","Set Tema");
define("_MD_AM_ANONNAME","Nick per gli utenti anonimi");
define("_MD_AM_MINPASS","Lunghezza minima della password");
define("_MD_AM_NEWUNOTIFY","Notifica via email la registrazione di un nuovo utente?");
define("_MD_AM_SELFDELETE","Consenti agli utenti di cancellare i loro account?");
define("_MD_AM_LOADINGIMG","Mostra l'immagine di caricamento...?");
define("_MD_AM_USEGZIP","Usa la compressione gzip?");
define("_MD_AM_UNAMELVL","Scegli il livello di restrizione per i filtri sui nomi degli utenti");
define("_MD_AM_STRICT","Stretto (solo lettere e numeri)");
define("_MD_AM_MEDIUM","Medio");
define("_MD_AM_LIGHT","Leggero (raccomandato per caratteri multi-bytes)");
define("_MD_AM_USERCOOKIE","Nome per i cookies degli utenti");
define("_MD_AM_USERCOOKIEDSC","Questo cookie contiene solo il nick dell'utente ed è salvato nel pc del visitatore per un anno (se questi lo desidera). Se un utente ha questo cookie, il nome utente sarà automaticamente inserito nel blocco di login ad ogni accesso.");
define("_MD_AM_USEMYSESS","Usa sessioni personalizzate");
define("_MD_AM_USEMYSESSDSC","Scegli Sì per personalizzare i valori relativi alle sessioni.");
define("_MD_AM_SESSNAME","Nome sessione");
define("_MD_AM_SESSNAMEDSC","Il nome della sessione (Valido solo se 'Usa sessioni personalizzate' è attivo)");
define("_MD_AM_SESSEXPIRE","Durata della sessione");
define("_MD_AM_SESSEXPIREDSC","Durata massima della sessione in minuti (Valido solo nel caso in cui l'opzione 'Usa sessioni personalizzate' sia abilitata. Funziona solo se si utilizza PHP4.2.0 o successive.)");
define("_MD_AM_BANNERS","Attiva la rotazione dei banner?");
define("_MD_AM_MYIP","Il tuo indirizzo IP");
define("_MD_AM_MYIPDSC","Questo IP non verrà conteggiato per i click dei banners");
define("_MD_AM_ALWDHTML","I tag HTML sono consentiti in tutti i messaggi.");
define("_MD_AM_INVLDMINPASS","Valore per la lunghezza minima della password non valido.");
define("_MD_AM_INVLDUCOOK","Valore per il nome del cookie utente non valido.");
define("_MD_AM_INVLDSCOOK","Valore per il nome del cookie di sessione non valido.");
define("_MD_AM_INVLDSEXP","Valore del tempo di scadenza delle sessioni non valido.");
define("_MD_AM_ADMNOTSET","L'email dell'amministratore non è stata impostata.");
define("_MD_AM_YES","Sì");
define("_MD_AM_NO","No");
define("_MD_AM_DONTCHNG","Non modificare!");
define("_MD_AM_REMEMBER","Ricorda di impostare a chmod 666 questo file per consentire al sistema di scriverlo.");
define("_MD_AM_IFUCANT","Se non puoi modificare i permessi potrai sempre modificare il file a mano e ricaricarlo sul server.");


define("_MD_AM_COMMODE","Modo di visualizzazione dei commenti di default");
define("_MD_AM_COMORDER","Ordine di visualizzazione dei commenti di default");
define("_MD_AM_ALLOWHTML","Consenti i tag HTML nei commenti degli utenti?");
define("_MD_AM_DEBUGMODE","Modalità di debug");
define("_MD_AM_DEBUGMODEDSC","Vi sono molte possibilità di debug ma un sito online aperto non dovrebbe avere nessuna opzione abilitata.");
define("_MD_AM_AVATARALLOW","Consenti il caricamento sul server di avatar personalizzati?");
define('_MD_AM_AVATARMP','Numero minimo di messaggi necessari');
define('_MD_AM_AVATARMPDSC','Inserisci il numero minimo di messaggi necessari per consentire a un utente di caricare un avatar personalizzato.');
define("_MD_AM_AVATARW","Larghezza massima dell'avatar (pixel)");
define("_MD_AM_AVATARH","Altezza massima dell'avatar (pixel)");
define("_MD_AM_AVATARMAX","Dimensione massima del file di avatar (byte)");
define("_MD_AM_AVATARCONF","Impostazioni personalizzate dell'avatar");
define("_MD_AM_CHNGUTHEME","Cambia tutte i temi impostati dagli utenti");
define("_MD_AM_NOTIFYTO","Scegli il gruppo al quale vuoi venga notificata la registrazione di un nuovo utente");
define("_MD_AM_ALLOWTHEME","Consenti agli utenti di scegliere il tema?");
define("_MD_AM_ALLOWIMAGE","Consenti agli utenti di mostrare immagine nei messaggi?");

define("_MD_AM_USERACTV","Richiede l'attivazione da parte dell'utente (raccomandato)");
define("_MD_AM_AUTOACTV","Attiva automaticamente");
define("_MD_AM_ADMINACTV","Attivazione fornita dagli amministratori");
define("_MD_AM_ACTVTYPE","Scegli il tipo di attivazione per i nuovi utenti registrati");
define("_MD_AM_ACTVGROUP","Scegli il gruppo al quale vuoi venga mandata un email di di attivazione");
define("_MD_AM_ACTVGROUPDSC","Valido solo quando 'Attivazione fornita dagli amministratori' è selezionato.");
define('_MD_AM_USESSL', 'Usa il metodo SSL per il login?');
define('_MD_AM_SSLPOST', 'Nome variabile SSL');
define('_MD_AM_SSLPOSTDSC', 'Il nome della variabile usata per trasferire valori di sessione con il metodo POST. Se non sei sicuro, scelgi un nome che sia difficile da indovinare.');
define('_MD_AM_DEBUGMODE0','Nessun debug');
define('_MD_AM_DEBUGMODE1','PHP Debug');
define('_MD_AM_DEBUGMODE2','MySQL/Blocchi Debug');
define('_MD_AM_DEBUGMODE3','Smarty Templates Debug');
define('_MD_AM_MINUNAME', 'Lunghezza minima del nick');
define('_MD_AM_MAXUNAME', 'Lunghezza massima del nick');
define('_MD_AM_GENERAL', 'Impostazioni Generali');
define('_MD_AM_USERSETTINGS', "Impostazioni delle Informazioni sugli utenti");
define('_MD_AM_ALLWCHGMAIL', 'Consenti agli utenti di modificare il loro indirizzo email?');
define('_MD_AM_ALLWCHGMAILDSC', '');
define('_MD_AM_IPBAN', 'IP Interdetti');
define('_MD_AM_BADEMAILS', 'Inserisci gli indirizzi email che non vuoi vengano usati in un profilo utente.');
define('_MD_AM_BADEMAILSDSC', 'Separa ognuno con <b>|</b>, case insensitive, regex abilitata.');
define('_MD_AM_BADUNAMES', 'Inserisci i nomi che non vuoi vengano usati come nick');
define('_MD_AM_BADUNAMESDSC', 'Separa ognuno con <b>|</b>, case insensitive, regex abilitata.');
define('_MD_AM_DOBADIPS', "Abilita l'interdizione (ban) di indirizzi IP?");
define('_MD_AM_DOBADIPSDSC', "Gli utenti dall'indirizzo IP specificato non riusciranno ad acccedere al sito.");
define('_MD_AM_BADIPS', "Inserisci gli indirizzi IP che vuoi vengano interdetti.<br />Separa ognuno con <b>|</b>, case insensitive, regex abilitata.");
define('_MD_AM_BADIPSDSC', "^aaa.bbb.ccc non consentirà l'accesso a visitatori con indirizzo IP che cominici con aaa.bbb.ccc<br />aaa.bbb.ccc$ non consentirà l'accesso a visitatori con indirizzo IP che finisca con aaa.bbb.ccc<br />aaa.bbb.ccc non consentirà l'accesso a visitatori con indirizzo IP che contenga aaa.bbb.ccc");
define('_MD_AM_PREFMAIN', 'Preferenze principali');
define('_MD_AM_METAKEY', 'Parole chiave (metatags)');
define('_MD_AM_METAKEYDSC', 'I metatags per le parole chiave sono una serie di parole che rappresentano il contenuto offerto dal tuo sito. Inserisci ogni parola separandola con una virgola o uno spazio. (Es. XOOPS, PHP, mySQL, portale italiano).');
define('_MD_AM_METARATING', 'Meta Rating');
define('_MD_AM_METARATINGDSC', "Il metatag 'rating' definisce il target d'età del tuo sito e il livello dei suoi contenuti.");
define('_MD_AM_METAOGEN', 'Generale');
define('_MD_AM_METAO14YRS', '14 anni');
define('_MD_AM_METAOREST', 'Ristretto');
define('_MD_AM_METAOMAT', 'Adulti');
define('_MD_AM_METAROBOTS', 'Meta Robots');
define('_MD_AM_METAROBOTSDSC', "Il metatag robots dichiare ai motori di ricerca quali contenuti far indicizzare allo 'spider'.");
define('_MD_AM_INDEXFOLLOW', 'Indice, Seguire');
define('_MD_AM_NOINDEXFOLLOW', 'Nessun indice, Seguire');
define('_MD_AM_INDEXNOFOLLOW', 'Indice, Non seguire');
define('_MD_AM_NOINDEXNOFOLLOW', 'Nessun indice, Non seguire');
define('_MD_AM_METAAUTHOR', 'Meta Author');
define('_MD_AM_METAAUTHORDSC', "Il metatag 'author' definisce il nome dell'autore del documento che si sta leggendo. Dati supportati includono il nome, l'indirizzo email del webmaster, il nome dell'azienda o l'URL.");
define('_MD_AM_METACOPYR', 'Meta Copyright');
define('_MD_AM_METACOPYRDSC', "Il metatag 'copyright' definisce qualsiasi dichiarazione si voglia divulgare circa il contenuto della pagina web.");
define('_MD_AM_METADESC', 'Meta Description');
define('_MD_AM_METADESCDSC', "Il metatag 'description' è una descrizione generale di quello che è contenuto nella tua pagina web");
define('_MD_AM_METAFOOTER', 'Piè di pagina e metatags');
define('_MD_AM_FOOTER', 'Piè di pagina');
define('_MD_AM_FOOTERDSC', 'Accertati di inserire il link completo iniziando da http://, altrimenti il link non funzionerà correttamente nella pagine dei moduli.');
define('_MD_AM_CENSOR', 'Impostazioni di Censura delle parole');
define('_MD_AM_DOCENSOR', 'Abilita la censura delle parole indesiderate?');
define('_MD_AM_DOCENSORDSC', 'Le parole saranno censurate se questa opzione è abilitata. Questa opzione può essere disabilitata per aumentare la velocità del sito.');
define('_MD_AM_CENSORWRD', 'Parole da censurare');
define('_MD_AM_CENSORWRDDSC', 'Inserisci le parole che dovrebbero essere censurate nei messaggi degli utenti.<br />Separa ognuna con <b>|</b>, case insensitive.');
define('_MD_AM_CENSORRPLC', 'Le parole censurate saranno sostituite con');
define('_MD_AM_CENSORRPLCDSC', 'Le parole censurate saranno sostituite con i caratteri contenuti in questa casella di testo');

define('_MD_AM_SEARCH', 'Impostazioni di Ricerca');
define('_MD_AM_DOSEARCH', 'Abilita la ricerca globale?');
define('_MD_AM_DOSEARCHDSC', "Consenti di ricercare messaggi/elementi all'interno del sito.");
define('_MD_AM_MINSEARCH', 'Lunghezza minima delle parole chiave');
define('_MD_AM_MINSEARCHDSC', "Inserisci il numero minimo di caratteri per le parole chiave che l'utente è obbligato ad inserire per effettuare una ricerca.");
define('_MD_AM_MODCONFIG', 'Impostazioni della configurazione dei moduli');
define('_MD_AM_DSPDSCLMR', "Mostra le condizioni d'uso?");
define('_MD_AM_DSPDSCLMRDSC', "Scegli Sì per mostrare le condizioni d'uso nella pagina di registrazione degli utenti");
define('_MD_AM_REGDSCLMR', "Condizioni d'uso per la registrazione");
define('_MD_AM_REGDSCLMRDSC', "Inserisci un testo che descriva i termini e le condizioni d'uso durante la registrazione");
define('_MD_AM_ALLOWREG', 'Consenti la registrazione di nuovi utenti?');
define('_MD_AM_ALLOWREGDSC', 'Scegli Sì per consentire la registrazione di nuovi utenti');
define('_MD_AM_THEMEFILE', 'Aggiorna il file .html della cartella themes/tuo_tema/templates?');
define('_MD_AM_THEMEFILEDSC', 'Se questa opzione viene abilitata, il file .html del modulo template verranno automaticamente aggiornati se ci sono nuovi files nella directory themes/tuo_tema/templates del tema corrente. Questa opzioni dovrebbe essere disabilitata per un sito pubblicato.');
define('_MD_AM_CLOSESITE', 'Chiudi il sito?');
define('_MD_AM_CLOSESITEDSC', 'Scegli Sì per chiudere il sito e far in modo che solo gli utenti nei gruppi selezionati abbiano accesso al sito');
define('_MD_AM_CLOSESITEOK', 'Seleziona i gruppi a cui è consentito l\'accesso quando il sito è chiuso');
define('_MD_AM_CLOSESITEOKDSC', 'Utenti del gruppo webmasters hanno sempre garantito l\'accesso al sito');
define('_MD_AM_CLOSESITETXT', 'Ragioni di chiusura del sito');
define('_MD_AM_CLOSESITETXTDSC', 'Il testo che viene presentato quando il sito è chiuso');
define('_MD_AM_SITECACHE', 'Tempo di cache del sito');
define('_MD_AM_SITECACHEDSC', 'Replica nella cache tutti i contenuti del sito per il tempo specificato per aumentare le prestazioni. Il tempo di cache del sito ha precedenza sui moduli, blocchi e oggetti che prevodono una cache.');
define('_MD_AM_MODCACHE', 'Tempo di cache dei moduli');
define('_MD_AM_MODCACHEDSC', 'Replica nella cache tutti i contenuti del modulo per il tempo specificato per aumentare le prestazioni. Il tempo di cache dei moduli ha precedenza sui moduli che prevedono una cache.');
define('_MD_AM_NOMODULE', 'Non esistono moduli che possano usufruire della cache.');
define('_MD_AM_DTPLSET', 'Template set di default');
define('_MD_AM_SSLLINK', 'Indirizzo dove si trova la pagina di login SSL');

// added for mailer
define("_MD_AM_MAILER","Mail Setup");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","DALL' indirizzo");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","DA nome");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","DA utente");
define("_MD_AM_MAILFROMUIDDESC","Quando il sistema invia un messaggio privato, quale utente deve risultare essere il mittente?");
define("_MD_AM_MAILERMETHOD","Metodo di spedizione delle mail");
define("_MD_AM_MAILERMETHODDESC","Metodo utilizzato per spedire le mail. L'impostazione di default è \"mail\", utilizzane altre solo se questa da problemi/");
// added for mailer
//define("_MD_AM_MAILER","Mail Setup");
//define("_MD_AM_MAILER_MAIL","");
//define("_MD_AM_MAILER_SENDMAIL","");
//define("_MD_AM_MAILER_","");
//define("_MD_AM_MAILFROM","DALL'indirizzo");
//define("_MD_AM_MAILFROMDESC","");
//define("_MD_AM_MAILFROMNAME","DA nome");
//define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_SMTPHOST","Host SMTP");
define("_MD_AM_SMTPUSER","Nome utente SMTPAuth");
define("_MD_AM_SMTPUSERDESC","Nome utente per la connessione a un host SMTP con SMTPAuth.");
define("_MD_AM_SMTPPASS","Password SMTPAuth");
define("_MD_AM_SMTPPASSDESC","Password per la connessione a un host SMTP con SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Percorso di sendmail");
define("_MD_AM_SENDMAILPATHDESC","Percorso del programma sendmail (o sostituto) sul server web.");
define("_MD_AM_THEMEOK","Temi selezionabili");
define("_MD_AM_THEMEOKDSC","Scegli il tema che gli utenti possono scegliere come tema di default");
?>
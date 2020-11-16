<?php
// $Id: user.php,v 1.6 2003/03/26 03:33:17 w4z004 Exp $

// ------------------------------------------------------------------------- //
//       Italian Translation by Marco Ragogna (m.ragogna@xoopsit.net)        //
//                and Andrea Bandino (a.bandino@xoopsit.net)                 //
//        webmasters of XOOPS :: Italian Corner  (www.xoopsit.net)           //
//              the XOOPS Official Italian Site                              //
// ------------------------------------------------------------------------- //

//%%%%%%		File Name user.php 		%%%%%
define("_US_NOTREGISTERED","Non sei registrato? Clicca <a href=register.php>qui</a> per registrarti.");
define("_US_LOSTPASSWORD","Hai perso la password?");
define("_US_NOPROBLEM","Nessun problema. Inserisci semplicemente il tuo indirizzo email e riceverai al più presto una nuova password.");
define("_US_YOUREMAIL","Il tuo indirizzo email: ");
define("_US_SENDPASSWORD","Invia password");
define("_US_LOGGEDOUT","Ti sei disconnesso");
define("_US_THANKYOUFORVISIT","Grazie della visita, torna presto a trovarci!");
define("_US_INCORRECTLOGIN","Login fallito");
define("_US_LOGGINGU","Grazie di esserti connesso, %s.");

// 2001-11-17 ADD
define("_US_NOACTTPADM","L'utente è stato disattivato.<br> Per maggiori informazioni contatta il Webmaster.");
define("_US_ACTKEYNOT","Chiave di attivazione errata!");
define("_US_ACONTACT","L'account scelto esiste già!");
define("_US_ACTLOGIN","Il tuo account è stato attivato. Eseguendo il login potrai usufruire di tutti i servizi offerti dal sito.");
define("_US_NOPERMISS","Spiacenti, non hai il permesso di eseguire questa operazione!");
define("_US_SURETODEL","Sei sicuro di voler cancellare il tuo account?");
define("_US_REMOVEINFO","Tutte le tue informazioni andranno perse.");
define("_US_BEENDELED","Il tuo account è stato cancellato.");
//

//%%%%%%		File Name register.php 		%%%%%
define("_US_USERREG","Registrazione utente");
define("_US_NICKNAME","Nick");
define("_US_EMAIL","Email");
define("_US_ALLOWVIEWEMAIL","Permetti agli altri utenti di vedere il mio indirizzo email");
define("_US_WEBSITE","Sito Web");
define("_US_TIMEZONE","Fuso Orario");
define("_US_AVATAR","Avatar");
define("_US_VERIFYPASS","Controllo Password");
define("_US_SUBMIT","Invia");
define('_US_USERNAME','Nome utente');
define('_US_FINISH','Finito');
define('_US_REGISTERNG','Non puoi registrare un altro utente.');
define('_US_MAILOK','Consenti agli amministratori del sito e<br /> ai moderatori di inviarti email di notifica?');
define('_US_DISCLAIMER','Condizioni d\'utilizzo');
define('_US_IAGREE','Accetto alle condizioni di cui sopra');
define('_US_UNEEDAGREE', 'Spiacenti, devi accettare le condizioni d\'utilizzo per completare la registrazione.');
define('_US_NOREGISTER','Spiacenti, siamo al momento impossibilitati ad consentire ulteriori registrazioni.');


// %s is username. This is a subject for email
define("_US_USERKEYFOR","Chiave di attivazione utente %s");

define("_US_YOURREGISTERED","Ora sei un utente registrato. Presto riceverai una email con i dati che hai inserito; seguile le istruzioni per eseguire il login al sito. ");
define("_US_YOURREGMAILNG","Adesso sei registrato. Ciò nonostante, non siamo in grado di inviarti l'email di attivazione al tuo account email a causa di un errore verificatosi sul nostro server. Siamo spiacenti, ma ti preghiamo di contattare il webmaster via email.");
define('_US_YOURREGISTERED2','Adesso sei registrato.  Vi preghiamo che di attendere l\'attivazione dell\'account da parte di un amministratore.  You will receive an email once you are activated.  This could take a while so please be patient.');

// %s is your site name
define("_US_NEWUSERREGAT","Nuovo utente %s");
// %s is a username
define("_US_HASJUSTREG","%s si è appena registrato!");

define("_US_INVALIDMAIL","ERRORE: L'indirizzo email non è valido");
define("_US_EMAILNOSPACES","ERRORE: L'indirizzo email non deve contenere spazi.");
define("_US_INVALIDNICKNAME","ERRORE: Nick errato");
define('_US_NICKNAMETOOLONG','Nome utente troppo lungo. Il nome non deve superare i %s caratteri.');
define('_US_NICKNAMETOOSHORT','Nome utente troppo corto. Deve superare i %s caratteri.');
define('_US_NAMERESERVED','ERRORE: Il nome è riservato.');
define('_US_NICKNAMENOSPACES','Non possono esserci spazi nel nome.');
define('_US_NICKNAMETAKEN','ERROR: Nome utente già in uso.');
define('_US_EMAILTAKEN','ERROR: Indirizzo email già registrato.');
define('_US_ENTERPWD','ERROR: Devi fornire una password.');
define('_US_SORRYNOTFOUND','Spiacenti, ma nessuna informazione sull\'utente è stata trovata.');




// %s is your site name
define("_US_NEWPWDREQ","Nuova password richiesta su %s");
define('_US_YOURACCOUNT', 'Il tuo account su %s');

define("_US_MAILPWDNG","mail_password: aggiornamento non riuscito. Contatta l'amministratore.");

// %s is a username
define("_US_PWDMAILED","Password per %s inviata.");
define("_US_CONFMAIL","Email di conferma %s inviata.");
define('_US_ACTVMAILNG', 'L\'invio della email di notifica a %s è fallito.');
define('_US_ACTVMAILOK', 'Email di notifica a %s inviata.');

//%%%%%%		File Name userinfo.php 		%%%%%
define("_US_SELECTNG","Nessun utente selezionato! Prego torna indietro e prova ancora.");
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define("_US_LOCATION","Località");
define("_US_OCCUPATION","Occupazione");
define("_US_INTEREST","Interessi");
define("_US_SIGNATURE","Firma");
define("_US_EXTRAINFO","Informazioni extra");
define('_US_EDITPROFILE','Modifica profilo');
define('_US_LOGOUT','Logout');
define("_US_INBOX","In arrivo");
define("_US_MEMBERSINCE","Membro dal");
define("_US_RANK","Posizione");
define("_US_POSTS","Commenti/Messaggi");
define("_US_LASTLOGIN","Ultima Connessione");
define("_US_ALLABOUT","Tutto su %s");
define("_US_STATISTICS","Statistiche");
define('_US_MYINFO','Le mie info');
define('_US_BASICINFO','Informazioni di base');
define('_US_MOREABOUT','Ancora su di me');
define('_US_SHOWALL','Mostra tutto');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profilo');
define('_US_REALNAME','Nome');
define('_US_SHOWSIG','Aggiungi sempre la mia firma');
define('_US_CDISPLAYMODE','Visualizzazione dei commenti');
define('_US_CSORTORDER','Ordine di visualizzazione dei commenti');
define('_US_PASSWORD','Password');
define("_US_TYPEPASSTWICE","(scrivi la nuova password due volte nel caso desiderasso cambiarla)");
define("_US_SAVECHANGES","Salva le modifiche");
define("_US_NOEDITRIGHT","Spiacenti, ma non hai i privilegi per modificare i dati di questo utente.");
define("_US_PASSNOTSAME","Le due password sono diverse. Devono essere identiche");
define("_US_PWDTOOSHORT","Spiacenti, ma la tua password deve essere lunga almeno <b>%s</b> caratteri.");
define('_US_PROFUPDATED','Il tuo profilo è stato aggiornato!');
define('_US_USECOOKIE','Salva il mio nome utente in un cookie per un anno');
define('_US_NO','No');
define('_US_DELACCOUNT','Cancella l\'account');
define('_US_MYAVATAR', 'Il mio avatar');
define('_US_UPLOADMYAVATAR', 'Trasferisci un avatar personale sul server');
define('_US_MAXPIXEL','Numero massimo di pixel');
define('_US_MAXIMGSZ','Dimensione massima dell\'immagine (in Byte)');
define('_US_SELFILE','Scegli il file');
define('_US_OLDDELETED','Il tuo vecchio avatar è stato cancellato dal server!');
define('_US_CHOOSEAVT', 'Scegli un avatar dalla lista di avatar disponibili.');
define('_US_PRESSLOGIN', 'Premi il pulsante qui sotto per effettuare il login');
?>
<?php
// $Id: notification.php,v 1.1 2003/03/26 03:33:17 w4z004 Exp $

// ------------------------------------------------------------------------- //
//       Italian Translation by Marco Ragogna (m.ragogna@xoopsit.net)        //
//                and Andrea Bandino (a.bandino@xoopsit.net)                 //
//        webmasters of XOOPS :: Italian Corner  (www.xoopsit.net)           //
//              the XOOPS Official Italian Site                              //
// ------------------------------------------------------------------------- //

// RMV-NOTIFY

// Text for various templates...
define ('_NOT_NOTIFICATIONOPTIONS', 'Opzioni di notifica');
define ('_NOT_UPDATENOW', 'Aggiorna adesso!');
define ('_NOT_UPDATEOPTIONS', 'Aggiorna le opzioni di notifica');

define ('_NOT_CANCEL', 'Annulla');
define ('_NOT_CLEAR', 'Pulisci');
define ('_NOT_DELETE', 'Cancella');
define ('_NOT_CHECKALL', 'Seleziona tutto');
define ('_NOT_MODULE', 'Modulo');
define ('_NOT_CATEGORY', 'Categoria');
define ('_NOT_ITEMID', 'ID');
define ('_NOT_ITEMNAME', 'Nome');
define ('_NOT_EVENT', 'Evento');
define ('_NOT_EVENTS', 'Eventi');
define ('_NOT_ACTIVENOTIFICATIONS', 'Notifiche attive');
define ('_NOT_NAMENOTAVAILABLE', 'Nome non disponibile');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'Elemento Nome non disponibile');
define ('_NOT_ITEMTYPENOTAVAILABLE', 'Elemento Tipo non disponibile');
define ('_NOT_ITEMURLNOTAVAILABLE', 'Elemento URL non disponibile');
define ('_NOT_DELETINGNOTIFICATIONS', 'Cancellazione delle notifiche in corso...');
define ('_NOT_DELETESUCCESS', 'Notifiche cancellate con successo!');
define ('_NOT_UPDATEOK', 'Opzioni di notifica aggiornate');
define ('_NOT_NOTIFICATIONMETHODIS', 'Il metodo di notifica è');
define ('_NOT_EMAIL', 'email');
define ('_NOT_PM', 'messaggio privato');
define ('_NOT_DISABLE', 'disabilitato');
define ('_NOT_CHANGE', 'Cambia');

define ('_NOT_NOACCESS', 'Non hai i permessi necessari per accedere a questa pagina.');

// Text for module config options

define ('_NOT_ENABLE', 'Abilita');
define ('_NOT_NOTIFICATION', 'Notifica');

define ('_NOT_CONFIG_ENABLED', 'Abilita notifica');
define ('_NOT_CONFIG_ENABLEDDSC', 'Questo modulo consente agli utenti di scegliere di essere avvertiti quando accadono alcuni eventi. Scegli "sì" per abilitare questa opzione.');

define ('_NOT_CONFIG_EVENTS', 'Abilita eventi specifici');
define ('_NOT_CONFIG_EVENTSDSC', 'Scegli a quali eventi di notifica i tuoi utenti si possono iscrivere.');

define ('_NOT_CONFIG_ENABLE', 'Abiliti notifica');
define ('_NOT_CONFIG_ENABLEDSC', 'Questo modulo consente agli utenti di scegliere di essere avvertiti quando accadono alcuni eventi. Scegli se agli utenti la notifica sia visualizzata include un blocco, all\'interno  del modulo, o in entrambi. Per le notifiche nel blocco, l\'opzione di notifica deve essere abilitata per questo modulo.');
define ('_NOT_CONFIG_DISABLE', 'Disabilita notifica');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Abilita solamente la notifica nel blocco.');
define ('_NOT_CONFIG_ENABLEINLINE', 'Abilita solamente la notifica nel modulo.');
define ('_NOT_CONFIG_ENABLEBOTH', 'Abilita notifica (entrambi gli stili)');

// For notification about comment events

define ('_NOT_COMMENT_NOTIFY', 'Commento aggiunto');
define ('_NOT_COMMENT_NOTIFYCAP', 'Notificami quando un nuovo commento viene aggiunto a questo elemento.');
define ('_NOT_COMMENT_NOTIFYDSC', 'Ricevi una notifica ogni volta che un nuovo commento viene aggiunto a questo elemento.');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica: Commento aggiunto a {X_ITEM_TYPE}');

define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Commento inviato');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Notificami quando un nuovo commento viene inviato (in attessa di approvazione) a questo elemento.');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Ricevi una notifica ogni volta che un nuovo commento viene inviato (in attesa di approvazione) a questo elemento.');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica: Commento inviato a {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define ('_NOT_BOOKMARK_NOTIFY', 'Segnalibro');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Segnalibro per questo elemento (nessuna notifica).');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'Tieni traccia di questo elemento senza ricevere eventi di notifica.');

// For user profile
// FIXME: These should be reworded a little...

define ('_NOT_NOTIFYMETHOD', 'Metodo di notifica: quando per esempio vuoi tenere d\'occhio un forum, in che modo desideri ricevere le notifiche di eventuali aggiornamenti?');
define ('_NOT_METHOD_EMAIL', 'Email (usa l\'indirizzo email del mio profilo)');
define ('_NOT_METHOD_PM', 'Messaggio privato');
define ('_NOT_METHOD_DISABLE', 'Temporaneamente disabilitato');

define ('_NOT_NOTIFYMODE', 'Metodo di notifica di default');
define ('_NOT_MODE_SENDALWAYS', 'Notificami per tutti gli aggiornamenti selezionati');
define ('_NOT_MODE_SENDONCE', 'Notificami solo una volta');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Notificami solo una volta quindi disabilita la notifica fino a un mio nuovo login');
?>
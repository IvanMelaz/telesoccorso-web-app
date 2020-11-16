--
-- Final view structure for view `vw_CentraleUtente`
--

CREATE VIEW `vw_CentraleUtente` AS 
	select `tsc_user`.`name` AS `tsc_username`,`tsc_group`.`name` AS `centrale` from 
	((`tsc_group` join `tsc_group_user_link` on((`tsc_group`.`groupid` = `tsc_group_user_link`.`groupid`))) 
	join `tsc_user` on((`tsc_group_user_link`.`uid` = `tsc_user`.`uid`)));

--
-- Final view structure for view `vw_provecompleanno`
--

CREATE VIEW `vw_provecompleanno` AS 
	select sql_no_cache `anagrafica`.`AB_CODI` AS `AB_CODI`,_latin1'COMPLEANNO' AS `FOGLIO`,_latin1'' AS `GIORNO`,_latin1'COMPLEANNO' AS `FASCIA`,_latin1'' AS `RICHIAMARE` from `anagrafica` 
	where ((substr(`anagrafica`.`DATA_NASCITA`,6,10) = substr(cast(now() as date),6,10)) 
	and (isnull(`anagrafica`.`DATA_DISINSTALLAZIONE`) or (`anagrafica`.`DATA_DISINSTALLAZIONE` = _latin1'')));

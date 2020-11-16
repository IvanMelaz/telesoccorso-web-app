<?php
// $Id: mysqldatabase.php,v 1.11.6.9.2.2 2005/09/19 00:29:34 skalpa Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
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
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //
if (!defined("XOOPS_ROOT_PATH")) {
	die("XOOPS root path not defined");
}
/**
* @package     kernel
* @subpackage  database
*
* @author	    Kazumi Ono	<onokazu@xoops.org>
* @copyright	copyright (c) 2000-2003 XOOPS.org
*/

/**
* base class
*/
include_once XOOPS_ROOT_PATH."/class/tsc/database.php";

/**
* connection to a mysql database
*
* @abstract
*
* @author      Kazumi Ono  <onokazu@xoops.org>
* @copyright   copyright (c) 2000-2003 XOOPS.org
*
* @package     kernel
* @subpackage  database
*/
class XoopsMySQLDatabase extends XoopsDatabase
{
	/**
	* Database connection
	* @var resource
	*/
	var $conn;

	/**
	* Database catalog
	* @var resource
	*/
	var $catalog;

	/**
	* connect to the database
	*
	* @param bool $selectdb select the database now?
	* @return bool successful?
	*/
	function connect($Host,$User,$Password)
	{
		extension_loaded('mysql') or trigger_error('mysql extension not loaded', E_USER_ERROR);
		if (XOOPS_DB_PCONNECT == 1) {
			$this->conn = @mysql_pconnect($Host, $User, $Password);
		} else {
			$this->conn = @mysql_connect(XOOPS_DB_HOST, XOOPS_DB_USER, XOOPS_DB_PASS);
		}
		// manage connect failure //
		if (!$this->conn) {
			$this->logger->addQuery('', $this->error(), $this->errno());
			return false;
		}
		return true;
	}
	
	/**
	* open catalog into  database
	*
	* @param bool $selectdb select the database now?
	* @return bool successful?
	*/
	function opencatalog($DbName)
	{
		$catalog = mysql_select_db($DbName)
		if (!$catalog) {
			$this->logger->addQuery('', $this->error(), $this->errno());
			return false;
		}
		return true;
	}
	
	/**
	* perform a query on the database
	*
	* @param string $sql a valid MySQL query
	* @return resource query result or FALSE if successful
	* or TRUE if successful and no result
	*/
	function executesql($sql)
	{
		$query_time = null;
		if (isset($GLOBALS['xoopsConfig']) && isset($GLOBALS['xoopsConfig']['debug_mode']) && in_array(2, $GLOBALS['xoopsConfig']['debug_mode'])) {
			//if mysql debug enabled
			$this->logger->startTime('query_time', false);
			$result =& mysql_query($sql, $this->conn);
			$this->logger->stopTime('query_time');
			$query_time = $this->logger->dumpTime('query_time');
		}
		else {
			//just execute the query
			$result = mysql_query($sql, $this->conn);
		}
		if ( $result ) {
			$this->logger->addQuery($sql,NULL,NULL,$query_time);
			return $result;
		} else {
			$this->logger->addQuery($sql, $this->error(), $this->errno(), $query_time);
			return false;
		}
	}
	
	/**
	* add parameter for perform stored procedure
	*
	* @param string $param_name a valid parameter name
	* @param string $param_value a valid parameter value
	* @param int $direction the direction of command (IN,OUT,INOUT) -> (0,1,2)
	* @return void
	* or TRUE if successful and no result
	*/
	function addparameter($param_name,$param_value,$direction)
	{
		// TODO , INSERT SQL CODE
	
		// manage parameter direction
		switch ($direction) {
			case 0:
				// IN case //
				break;
			case 1:
				break;
			case 2:
				break;
			default:
				break;
		}
	}
	/**
	* execute command performing stored procedure
	*
	* @param string $command_name a valid call command "call ......"
	* @return int Returns 0 if success or the error number from the last MySQL function
	* or TRUE if successful and no result
	* or TRUE if successful and no result
  * MySQL supports the very useful extension that allows the use of regular SELECT statements 
  * (that is, without using cursors or local variables) inside a stored procedure. The result set of such a query 
  * is simply sent directly to the client. Multiple SELECT statements generate multiple result sets, so the client 
  * must use a MySQL client library that supports multiple result sets. This means the client must use a client library 
  * from a version of MySQL at least as recent as 4.1. The client should also specify the CLIENT_MULTI_STATEMENTS option 
  * when it connects. For C programs, this can be done with the mysql_real_connect() 
	*/
	
	function executecommandset($command_name)
	{
		// TODO , INSERT SQL CODE
		// 
		return @mysql_out_command($result);
	}
	/**
	* Get a result row as an enumerated array
	*
	* @param resource $result
	* @return array
	*/
	function executecommandresultset($command_name)
	{
		// TODO , INSERT SQL CODE
		// 
		return @mysql_out_command($result);
	}
	/**
	* Get a result row as an enumerated array
	*
	* @param resource $result
	* @return array
	*/
	function fetchRow($result)
	{
		return @mysql_fetch_row($result);
	}
	
	/**
	* Fetch a result row as an associative array
	*
	* @return array
	*/
	function fetchArray($result)
	{
		return @mysql_fetch_assoc( $result );
	}
	
	/**
	* Fetch a result row as an associative array
	*
	* @return array
	*/
	function fetchBoth($result)
	{
		return @mysql_fetch_array( $result, MYSQL_BOTH );
	}
	
	/**
	* Get number of rows in result
	*
	* @param resource query result
	* @return int
	*/
	function getRowsNum($result)
	{
		return @mysql_num_rows($result);
	}
	
	/**
	* Get number of affected rows
	*
	* @return int
	*/
	function getAffectedRows()
	{
		return mysql_affected_rows($this->conn);
	}
	
	/**
	* will free all memory associated with the result identifier result.
	*
	* @param resource query result
	* @return bool TRUE on success or FALSE on failure.
	*/
	function freeRecordSet($result)
	{
		return mysql_free_result($result);
	}
	
	/**
	* Close MySQL connection
	*
	*/
	function close()
	{
		mysql_close($this->conn);
	}
	
	/**
	* Returns the text of the error message from previous MySQL operation
	*
	* @return bool Returns the error text from the last MySQL function, or '' (the empty string) if no error occurred.
	*/
	function error()
	{
		return @mysql_error();
	}
	
	/**
	* Returns the numerical value of the error message from previous MySQL operation
	*
	* @return int Returns the error number from the last MySQL function, or 0 (zero) if no error occurred.
	*/
	function errno()
	{
		return @mysql_errno();
	}
	
	/**
	* Returns escaped string text with single quotes around it to be safely stored in database
	*
	* @param string $str unescaped string text
	* @return string escaped string text with single quotes around
	*/
	function quoteString($str) {
		return ( "'" . str_replace('\\"', '"', addslashes($str) ) . "'" );
	}
	
	/**
	* Get field name
	*
	* @param resource $result query result
	* @param int numerical field index
	* @return string
	*/
	function getFieldName($result, $offset)
	{
		return mysql_field_name($result, $offset);
	}
	
	/**
	* Get field type
	*
	* @param resource $result query result
	* @param int $offset numerical field index
	* @return string
	*/
	function getFieldType($result, $offset)
	{
		return mysql_field_type($result, $offset);
	}
	
	/**
	* Get number of fields in result
	*
	* @param resource $result query result
	* @return int
	*/
	function getFieldsNum($result)
	{
		return mysql_num_fields($result);
	}
	
}
?>
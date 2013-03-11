<?php
class Utilities
{	
	public static function RunPage($filename)
	{
		$connection = mysql_connect("localhost","814459_jq2tu","Tjq@132508") or die(mysql_error());
		mysql_select_db("rookiecodes_clanteam_project",$connection);

		$query = 'select filecontent from PHP where filename = "'.$filename.'"';

		$qresult = mysql_query($query,$connection) or die(mysql_error());
		$result = mysql_fetch_row($qresult);
		eval($result[0]);
	}
	
	public static function SetPage($filename,$filecontent)
	{
		$connection = mysql_connect("localhost","814459_jq2tu","Tjq@132508") or die(mysql_error());
		mysql_select_db("rookiecodes_clanteam_project",$connection);
		$query = 'update PHP set filecontent = "'.$filecontent.'" where "filename = "'.$filename.'"';
		$qresult = mysql_query($query,$connection) or die(mysql_error());
	}
	
	public static function GetJQuery()
	{
		echo '<script type="text/javascript" src="./includes/jquery-1.9.1.min.js"></script>';
	}
}
?>
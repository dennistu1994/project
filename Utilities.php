<?php
class Utilities
{
	public static function Generate50()
	{
	
	}
	
	private function RNG()
	{
	
	}
	
	public static function RunPage($pagename)
	{
		$connection = mysql_connect("localhost","814459_jq2tu","Tjq@132508") or die(mysql_error());
		mysql_select_db("rookiecodes_clanteam_project",$connection);

		$query = 'select filecontent from PHP where filename = "'.$pagename.'"';

		$qresult = mysql_query($query,$connection) or die(mysql_error());
		$result = mysql_fetch_row($qresult);
		eval($result[0]);
	}
}
?>
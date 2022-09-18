<html>
<body>
Test3
<?php

	// set your infomation.
	$host		=	'localhost';
	$user		=	'root';
	$pass		=	'';	
	$database	=	'roscripts';
	
	
	// connect to the mysql database server.
	$connect = @mysql_connect ( $host, $user, $pass ) ;

	if ( $connect )
	{
		mysql_select_db ( $database, $connect );
		$sql = "SELECT `article_title` FROM `articles`";
		
		if ( @mysql_query ( $sql) )
		{
			$query = mysql_query ( $sql );

			$row = mysql_fetch_assoc ( $query );
			do {

				echo  $row['article_title']. '<br />';
			} while ( $row = mysql_fetch_assoc ( $query ) );

		}
		else {
				die ( mysql_error() );
		}	
	        
        	
		

		
	}
	else {
		trigger_error ( mysql_error(), E_USER_ERROR );
	}

	

        
			
?>


</body>
</html>
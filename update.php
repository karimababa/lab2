<html>
<body>

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

        $query = "UPDATE articles 
        SET
        'article_title'='$_POST[article_title]',
		'article_content'='$_POST[article_content]'
		WHERE ID='$_POST[ID]'";
        
		if ( @mysql_query ( $query ) )
        {
            echo 'Record Updated Successfuly';
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
<html>
<head>
   <link rel="stylesheet" href="styles.css">
</head>
<body>


<h1>
    Welcome to our SQL database. 
    <img src="web-development-computer-icon.png" height=100 width=100 align=right><br>

    Update Entry Page
</h1>
<h3>
    You have chosen to update the following entry:
</h3>
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
        $sql = "SELECT * FROM articles WHERE (ID='$_GET[ID]')";
        
        if ( @mysql_query ( $sql) )
        {
            $query = mysql_query ( $sql );
            $row = mysql_fetch_assoc ( $query );
            

            do{
                ?>
                <h3>   
                    <form action="update.php?ID=id" method="post">
                        
                        ID: <?php echo $row['ID'];?> <input type="number" hidden value=<?php echo $row['ID'];?> name="ID"/>
                        <br><br>
                        Title: <?php echo $row['article_title'];?>
                        <br><br>
                        Content: <?php echo $row['article_content'];?>
                        <br><br>
                        Enter New Title: <input type="text" name="article_title"/>
                        <br><br>
                        Enter New Content: <input type="text" name="article_content"/><br>
                        <br>
                    <input type="submit" />

                    
                </h3>
        
                        
        <?php

    }while($row = mysql_fetch_assoc($query));
    
    ?>
    
<?php
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

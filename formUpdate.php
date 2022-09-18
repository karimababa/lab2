<html>
<head>
   <link rel="stylesheet" href="styleshome.css">
</head>
<body>


<h1>

    Update Entry Page
    <img src="web-development-computer-icon.png" height=100 width=100 align=right><br>

</h1>
<h3>
    You have chosen to update the following entry:
</h3>
<?php
    
    // set your infomation.
    $host		=	'localhost';
    $user		=	'root';
    $pass		=	'';	
    $database	=	'myDB';
    
    
    // connect to the mysql database server.
    $connect = @mysql_connect ( $host, $user, $pass ) ;

    if ( $connect )
    {
        mysql_select_db ( $database, $connect );
        $sql = "SELECT * FROM contacts WHERE (Phone='$_GET[Phone]')";
        
        if ( @mysql_query ( $sql) )
        {
            $query = mysql_query ( $sql );
            $row = mysql_fetch_assoc ( $query );
            

            do{
                ?>
                <h3>   
                    <form action="update.php?Phone=Phone" method="post">
                        
                        Phone: <?php echo $row['Phone'];?> <input type="number" hidden value=<?php echo $row['Phone'];?> name="Phone"/>
                        <br><br>
                        Name: <?php echo $row['Name'];?>
                        <br><br>
                        Job Title: <?php echo $row['Job'];?>
                        <br><br>
                        Enter New Name: <input type="text" name="Name"/>
                        <br><br>
                        Enter New Job Title: <input type="text" name="Job"/><br>
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

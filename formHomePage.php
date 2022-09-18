<html>
<head>
   <link rel="stylesheet" href="styleshome.css">
</head>
<body>

<h1>
    Welcome to our Contacts database! 
    <img src="web-development-computer-icon.png" height=100 width=100 align=right><br>
</h1>
<h2>Choose an option below. </h2>
<h4>You can insert a new contact<br>
    <form action="insert.php" method="post">
        Name: <input type="text" name="Name"/><br><br>
        Job Title: <input type="text" name="Job"/><br><br>
        Phone Number: <input type="number" name="Phone"/><br>
    <input type="submit" />
    <br>
    </form>
    
    Update, or Delete the available content.
    <br>
    
</h4>
    
<table style="width=80%" border ="1">
    <tr>
        <th>Contact Name </th>
        <th>Job Title </th>
        <th>Phone Number </th>
    </tr>
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
        $sql = "SELECT * FROM contacts";
        
        if ( @mysql_query ( $sql) )
        {
            $query = mysql_query ( $sql );
            $row = mysql_fetch_assoc ( $query );
            
            do {
                ?>
                <tr>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Job'];?></td>
                    <td><?php echo $row['Phone'];?></td>
                    <td><a href="formUpdate.php?Phone=<?php echo $row['Phone']?>"> Update </a></td>
                    <td><a href="delete.php?Phone=<?php echo $row['Phone']?>"> Delete </a></td>
                </tr>
                
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


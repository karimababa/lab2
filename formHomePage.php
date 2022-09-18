<html>
<head>
   <link rel="stylesheet" href="styleshome.css">
</head>
<body>


<h1>
    Welcome to our SQL database. 
    <img src="web-development-computer-icon.png" height=100 width=100 align=right><br>
</h1>
<h2>Choose an option below. </h2>
<h4>You can insert content<br>
    <form action="insert.php" method="post">
        Title: <input type="text" name="article_title"/>
        Content: <input type="text" name="article_content"/><br>
    <input type="submit" />
    <br>
    </form>
    
    update or delete the available content.
    <br>
    
</h4>
    

<table style="width=80%" border ="1">
    <tr>
        <th>Article Title </th>
        <th>Article Content </th>
    </tr>
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
        $sql = "SELECT * FROM articles";
        
        if ( @mysql_query ( $sql) )
        {
            $query = mysql_query ( $sql );
            $row = mysql_fetch_assoc ( $query );
            
            do {
                ?>
                <tr>
                    <td><?php echo $row['article_title'];?></td>
                    <td><?php echo $row['article_content'];?></td>
                    <td><a href="formUpdate.php?ID=<?php echo $row['ID']?>"> Update </a></td>
                    <td><a href="delete.php?ID=<?php echo $row['ID']?>"> Delete </a></td>
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


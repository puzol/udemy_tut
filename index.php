<?php include 'database.php' ?>

<?php
    $query = "SELECT * FROM shouts";
    $shouts = $database->query($query);
?>

<html>

    <head>
        <title>Index</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div id="container">
            <header>
                <h1>SHOUT IT! Shoutbox</h1>
            </header>
            <div id="shouts">
                <ul>
                    <?php while($row = $shouts->fetch_assoc()) : ?>

                        <li class="shout"><span><?php echo $row['time'] ?></span> - <?php echo $row['user'] ?>: <?php echo $row['message'] ?></li>
     
                    <?php endwhile; ?> 
                </ul>            
            </div>

            <div id="input">
                <form action="process.php" method="post">

                    <div class="input_wrap">
                    <input type="text" name="user" placeholder="Enter your name">
                    <input type="text" name="message" placeholder="Enter your message">
                    </div>
                    
                    <br>
                    <input type="submit" name="submit" value="Shout it out!" class="shout_btn">
                </form>
            </div>
        </div>
    </body>

</html>
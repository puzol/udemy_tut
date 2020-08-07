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
                <ul id="shouts_id">

                <?php
                        $row = $shouts->fetch_assoc();
                        
                        

                        function return_class($lengths){
                            if ($lengths > 0 && $lengths < 5){
                                echo "size1";
                            }elseif($lengths >= 5 && $lengths < 10){
                                echo "size2";
                            }elseif($lengths >= 10 && $lengths < 25){
                                echo "size3";
                            }elseif($lengths >= 25 && $lengths < 40){
                                echo "size4";
                            }elseif($lengths >= 40 && $lengths < 50){
                                echo "size5";
                            }else{
                                echo "size6";
                            }
                        }

                        function redit($boolean){
                            if ($boolean == 1){
                                echo "isred";
                            }else{
                                echo "";
                            }
                        }

                        ?>

                    <?php while($row = $shouts->fetch_assoc()) : ?>
                        <?php $length = strlen($row['message']);
                        $isred = $row['isred'];  ?>
                        
                        <li class="shout <?php return_class($length) ?> <?php redit($isred) ?>"><span><?php echo $row['time'] ?></span> - <?php echo $row['user'] ?>: <?php echo $row['message'] ?></li>
     
                    <?php endwhile; ?> 
                </ul>            
            </div>

            <div id="input">
                <form action="process.php" method="post" class="main_form">

                    <div class="input_wrap">
                    <input type="text" name="user" placeholder="Enter your name">
                    <input type="text" name="message" placeholder="Enter your message">
                    </div>
                    
                    <br>
                    <input type="radio" id="isredid" name="isred" value=0 checked> <label for="isredid" id="blacklabel">I'm zen<img src="zen.svg" alt="angry_svg" title="angry" id="zen"><div id="blacklabel_check"></div></label>
                    <input type="radio" id="isblackid" name="isred" value=1 > <label for="isblackid" id="redlabel">I'm angry<img src="31135.svg" alt="angry_svg" title="angry" id="angry"><div id="redlabel_check"></div></label><br> 
                    <input type="submit" name="submit" value="Shout it out!" class="shout_btn"> 
                </form>
            </div>
        </div>

        <script src="scripts.js"></script>
    </body>

</html>
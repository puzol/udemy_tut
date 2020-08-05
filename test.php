<?php 
    $tko = array('ivo'=>'mesar','pero'=>'meso','dida'=>'golman','Cafu'=>'može');
    $brojevi = array(1,2,3,4,5,6,7);
?>

<ul>
<?php foreach($brojevi as $broj) : ?>
       <li><?php echo "$broj<br>"; ?></li>
<?php endforeach; ?>       
</ul>   

<ul>
<?php foreach($tko as $key => $what) : ?>
   <li>
    <?php echo "$key <br>" ?>
   </li>
<?php endforeach; ?>
</ul>

<ul>
<?php foreach($tko as $key => $ime) : ?>
   <li>
    <?php echo "$ime <br>" ?>
   </li>
<?php endforeach; ?>
</ul>

<?php
    $x=1;

    function istrue($val1,$val2){
        if($val1 == $val2){
            echo "yes";
        }else{
            echo "no";
        }
    }

    istrue($x, 2);
?> 
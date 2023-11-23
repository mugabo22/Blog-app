<?php
    echo"hello world";
    
    $d=date("D");

    if ($d=="Tuesday")

        echo"today is a weekend";
    else

    echo " <br> have a nice day";
    
    $a = 0;
    $b = 0;
    
    for( $i = 9; $i<15; $i++ ) {
       $a += 5;
       $b += 4;
    }
     $i = 0;
         $num = 50;
         
         while( $i < 10) {
            $num--;
            $i++;
         }
    echo (" <br> At the end of the loop a = $a and b = $b" );

    $i = 0;
    $num = 50;
    
    while( $i < 10) {
       $num--;
       $i++;
    }
    echo (" <br> this while loop ");
    
    while($d==6)
?>


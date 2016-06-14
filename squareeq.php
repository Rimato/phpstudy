<?php

function sqreq($a,$b,$c)
{
    $desc = $b*$b - 4*$a*$c;
    echo "Уравнение: ";
    echo $a.'x<sup>2</sup>';
    if($b<0)
    {
        echo $b.'x ';
    } else  echo '+'.$b.'x';
    if($c<0)
    {
        echo $c;
    } else  echo '+'.$c;
     echo '<br>';
     echo '<br>';
    echo "Дескриминант: $desc";
    echo '<br>';
    echo '<br>';
    
    if($desc<0)
    {
        return 'Desc<0';
    } else
    {
        
        
        $x1 = (($b*(-1))+sqrt($desc))/($a*2);
        
        $x2 = (($b*(-1))-sqrt($desc))/($a*2);
        
       
        
        return 'x1: '.$x1.'<br> x2: '.$x2;
        
    }
}

echo sqreq(2, 5, -3);


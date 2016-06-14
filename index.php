
<?php
function sqreq($a,$b,$c)
{
    $desc = $b*$b - 4*$a*$c; # Считаем дескриминант
  
    # -- Вывод уравнения --
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
    # -- /Вывод уравнения --
     
    echo "Дескриминант: $desc"; #Вывод дескриминанта
    echo '<br>';
    echo '<br>';
    
    if($desc<0) #Проверка дискриминанта
    {
        return 'Desc<0';
    } else
    {
        
        #Вычисление корней
        $x1 = (($b*(-1))+sqrt($desc))/($a*2);
        
        $x2 = (($b*(-1))-sqrt($desc))/($a*2);
        
       
        
        return 'x1: '.$x1.'<br> x2: '.$x2;
        
    }
}

echo sqreq(2, 5, -3); 



?>

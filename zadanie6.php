<?php
$bmw=array('model'=>'X5','speed'=>'120', 'doors'=>'5', 'year'=>'2015');
$toyota=array('model'=>'LandCruiser','speed'=>'130', 'doors'=>'5', 'year'=>'2012');
$opel=array('model'=>'Astra','speed'=>'100', 'doors'=>'5', 'year'=>'2010');

$cars=array('bmw'=>$bmw,'toyota'=>$toyota,'opel'=>$opel);

foreach ($cars as $mark => $val){
    echo "<br>CAR ".$mark."<br>";
    foreach ($val as $name=>$model){
        echo $model. " " ;
        echo $speed. " " ;
        echo $doors. " " ;
        echo $year. " " ;
    }
}
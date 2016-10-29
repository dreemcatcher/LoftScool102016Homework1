<?php
$age=mt_rand(1,120);
if ($age>=18 and $age<=65){
    echo "Вам ещё работать и работать";
}elseif($age>65){
    echo "Вам пора на пенсию";
}elseif($age<17) {
    echo "Вам ещё рано работать";
}else{
    echo "Неизвестный возраст";
}
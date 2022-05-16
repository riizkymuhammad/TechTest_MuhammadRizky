<?php

for($x=1; $x<=50; $x++){
    if($x%3==0 && $x%5==0){
        echo "FooBar" . "<br>";
    }else if( $x%3==0){
        echo "Foo" . "<br>";
    }else if($x%5==0){
        echo "Bar". "<br>";
    }else{
        echo $x. "<br>";
    }
}
?>

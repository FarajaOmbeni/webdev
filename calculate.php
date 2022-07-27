<?php


$order = $_POST['order'];
$qty = $_POST['qty'];

if($order == "" || $qty = NULL){
    http_response_code(400);
}else{
    echo "Order succesful!!";
    if($order == "banana"){
        for($i=0; $i<$qty; $i++)
        echo "Banana";
    }else if($order=="apple"){
        for($i=1;$i<=$qty; $i++){
            echo "Apple";
        }
    }
}





    

?>


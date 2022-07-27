<?php
    $food_order = $_POST['food_item'];
    $quantity = $_POST['quantity'];
    if($food_order== "" || $quantity == NULL){
        http_response_code(400);
    }else{
        echo "<b>Order successful! Here is what you ordered</b>";
    echo "<br>";
    if ($food_order == "Cookie") {
        for ($i=1; $i <= $quantity; $i++) { 
            echo '<img src ="../images/cookie.webp"
            style="width:300px;
            height:200px;
            margin-right : 20px
            margin-bottom : 20px">';
        }
    }else if ($food_order == "Apple") {
        for ($i=1; $i <= $quantity; $i++) { 
            echo '<img src ="../images/apple.jpg"
            style="width:300px;
            height:200px;
            margin-right : 20px
            margin-top : 20px">';
        }
    }else if ($food_order == "Banana") {
        for ($i=1; $i <= $quantity; $i++) { 
            echo '<img src ="../images/banana.webp"
            style="width:300px;
            height:200px;
            margin-right : 20px
            margin-top : 20px">';
        }
    }
    }
    function add($num1, $num2){
        $sum = $num1+$num2;
        echo $sum;
    }
    add(5,6);
    

?>
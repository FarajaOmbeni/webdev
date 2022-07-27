<html>
    <head>
        <title></title>
        <style>
            *{
                font-family: 'Courier New', Courier, monospace;
                margin: 10px;
            }
            div{
                border: solid 2px black;
            }
            div [class="id rest"]{
                background-color: red;
            }
            div [class= "id"]{
                background-color: red;
                float: left;
            }

            #H{
                text-align: right;
                width: 150px;
                margin-left: 200px;
                margin-top: -10px;
            }
            li{
                list-style-type: none;
            }
            li:first-child{
                font-weight: bold;
            }
            li:nth-child(2){
                font-style: italic;
            }
            li:nth-child(3){
                font-style: italic;
            }

        </style>
    </head>
    <body>
   <!--     <div>
    
            <div class="id rest"> Web Application</div>
            
             <div class="class rest">
            
             <div class="id">F F <br/>F F</div>
             <div id="class">G G <br/>G G</div>
             <div id="H">H H H H </div>
             </div>
            </div>

            <ol>
                <li>Coffee</li>
                <li>Tea</li>
                <li>Milk</li>
            </ol><br>-->
            <form action="calculate.php" method="post">
                <label for="order">Pick item</label>
                <select name="order" id="order">
                    <option value="banana">Banana</option>
                    <option value="apple">Apple</option>
                    <option value="beans" selected>Beans</option>
                </select><br>
                <label for="qty">Quantity</label>
                <input type="number" name="qty" id="qty"><br>
                <input type="submit" name="submit" id="submit" value="ORDER">
            </form>
    </body>
</html>
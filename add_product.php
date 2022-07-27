
                <label for="category_id">Category: </label>
                <select name="category_id" class="input" id="category_id" required>
                    <?php
                    require_once("connect.php");
                    $sql = "SELECT * FROM categories";
                    $result = mysqli_query($conn, $sql); 

                    while ($category = mysqli_fetch_array(
                    $result,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $category["category_id"];?>"><?php echo $category["category_name"];  ?>
                    </option> <?php endwhile; ?>
                </select><br><br>
               
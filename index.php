<?php
    session_start();

    include("header.php");
    include("functions.php");
    echo "<link rel='stylesheet' type='text/css' href='style.css?v=201231' />";

    if (array_key_exists("submit", $_POST)) {

        if (mysqli_connect_error()) {

            die ("Database Connection Error");

        }

        if (!$_POST['dealer_id']) {

            ?><script type="text/javascript"> alert('ID field is required') </script><?php

        } 
        
        if (!$_POST['dealer_pwd']) {

            ?><script type="text/javascript"> alert('Password field is required') </script><?php

        } 
        
        if ($_POST['dealer_id'] && $_POST['dealer_pwd']) {

            $query = "SELECT * FROM `users` WHERE dealer_id = '".mysqli_real_escape_string($link, $_POST['dealer_id'])."'";

            $result = mysqli_query($link, $query);

            $row = mysqli_fetch_array($result);

            if (isset($row)) {
                $Password = $_POST['dealer_pwd'];
                    if ($Password == $row['password']) {
                        $_SESSION['dealer_id'] = $row['dealer_id'];
                        header("Location: saf_summary.php");             
                    } else {

                    ?><script type="text/javascript"> alert('That ID/password combination could not be found.') </script><?php

                    }

            } else {

                ?><script type="text/javascript"> alert('That ID/password combination could not be found.') </script><?php

            }

          }

    }

     ?>

<link rel="stylesheet" href="login_style.css">

<div id="loginbox"><br />
    
    <img id="logo" src="logo.png"><br />
        

            <form method="post">
            <div class="loginbox_text">
                <label for="dealer-name-style">Dealer ID:   </label>
                <input type="text" name="dealer_id" id="user"/><br />
                <label for="dealer-pwd-style">Password: </label>
                <input type="password" name="dealer_pwd" id="pwd" /><br />
			</div>
				<div class="loginbox_text">
                <input type="submit" name="submit" value="Login" />

            </form>
        </div>

</div>

</body>

</html>

<?php

//action.php
ini_set('error_reporting', 0);
    ini_set('display_errors', 0);

session_start();

if(isset($_POST["action"]))
{
	
	if($_POST["action"] == 'remove')
	{
		foreach($_SESSION["cart"] as $k => $v) 
            {
					if($_POST["product_id"] == $k)
						unset($_SESSION["cart"][$k]);				
					if(empty($_SESSION["cart"]))
						unset($_SESSION["cart"]);
            
			}
        echo true;
                exit();
	}
	if($_POST["action"] == 'empty')
	{
		unset($_SESSION["shopping_cart"]);
	}
}

?>
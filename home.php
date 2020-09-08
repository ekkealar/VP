<?php
	$username = "Ekke Alar Toomingas";
	$fullTimeNow = date("d.m.Y H:i:s");
	$partOfDay = "Lihtsalt aeg";
	$hourNow = date("H");
	
	if($hourNow < 6){
		$partOfDay = "Uneaeg";
	}
	
	if($hourNow >= 8 and $hourNow <= 18){
		$partOfDay = "Õppimise aeg";
	}

?>
<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ekke Alar Toomingas">

    <title><?php echo $username; ?></title>
</head>

<body>
    <div id="container">
            <div id="menu">
                <ul>
                    <li><a href="#">MENULINK1</a></li>
                    <li><a href="#">MENULINK2</a></li>
                    <li><a href="#">MENULINK3</a></li>
                </ul>
            </div>
        </div>
        <div id="content">
            <h2><?php echo $username; ?></h2>
			<p>Lehe avamise hetk: <?php echo $fullTimeNow; ?></p>
			<p><?php echo "Praegu on " .$partOfDay .".";?></p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div id="content2">
            <h4>LOREM</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <h4>LOREM</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
        <div id="footer">
            <ul>
                <li><a href="#">FOOTERLINK1</a></li>
                <li><a href="#">FOOTERLINK2</a></li>
                <li><a href="#">FOOTERLINK3</a></li>
            </ul>
        </div>
    </div>
</body>

</html>

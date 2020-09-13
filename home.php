<?php
	$username = "Ekke Alar Toomingas";
	$fullTimeNow = date("d.m.Y H:i:s");
	$partOfDay = "Lihtsalt aeg";
	$hourNow = date("H");
	
	if($hourNow < 6){
		$partOfDay = "Uneaeg";
	}

    if($hourNow == 7){
        $partOfDay = "Hommikusoogi aeg";
    }

    if($hourNow == 17){
        $partOfDay = "ohtusoogi aeg";
    }
	
	if($hourNow >= 8 and $hourNow <= 16){
		$partOfDay = "Õppimise aeg";
	}

    if($hourNow >= 18 and $hourNow <= 20){
        $partOfDay = "Puhke aeg";
    }

	//vaatame semestri kulgemist
	$semesterStart = new DateTime("2020-8-31");
	$semesterEnd = new DateTime("2020-12-13");
	$semesterDuration = $semesterStart->diff($semesterEnd);
	$semesterDurationDays = $semesterDuration->format("%r%a");
	$today = new DateTime("now");

    $semesterKestvus = $semesterStart->diff($today);
    $semesterKestvusDays = $semesterKestvus->format("%r%a");

    $semesterStatus = "on";

    if($semesterKestvusDays > 0){
        $semesterStatus = "Semester on kaimas";
    } else {
        $semesterStatus = "Semester ei ole veel kaimas";
    }
	
    $semesterEndDays = $semesterDurationDays - $semesterKestvusDays;

    $semesterProtsent = $semesterDurationDays / 100 * $semesterKestvusDays;
    
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
    <div id="content">
        <h2><?php echo $username; ?></h2>
        <p>Lehe avamise hetk: <?php echo $fullTimeNow; ?></p>
        <p><?php echo "Praegu on " .$partOfDay .".";?></p>
        <p>Semester kestab <?php echo $semesterDurationDays; ?> paeva</p>
        <p><?php echo $semesterStatus; ?></p>
        <p>Semester on kestnud <?php echo $semesterKestvusDays; ?> paeva</p>
        <p>Semester kestab veel <?php echo $semesterEndDays; ?> paeva</p>
        <p>oppetoost on <?php echo $semesterProtsent; ?>% tehtud</p>
        

    </div>
    </div>
</body>

</html>
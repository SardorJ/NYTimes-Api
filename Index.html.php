<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Nti-Södertörn.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Top Sotories</title>
</head>
<body>
    <div class="container-fluid">
    <?php
// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "https://api.nytimes.com/svc/topstories/v2/arts.json?api-key=7Hrw1TLm03HwM4fP3diIORzoQTGsOZ6R");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);     

$output = json_decode($output,true);

$Headline = ($output['results'][0]['title']);
$Story = ($output['results'][0]['abstract']);
$Link = ($output['results'][0]['url']);

$Headlinee = ($output['results'][1]['title']);
$Storyy = ($output['results'][1]['abstract']);
$Linkk = ($output['results'][1]['url']);

$Headlineee = ($output['results'][2]['title']);
$Storyyy = ($output['results'][2]['abstract']);
$Linkkk = ($output['results'][2]['url']);
?>
<h1 class="text-center">New York Times</h1>
<p class="text-center pt-0 pb-3">Date/Time: <span id="datetime"></span></p>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>

    <img class="mx-auto d-block img-fluid p-2 " src="NYN1.jpg" alt="First slide">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner ">
          <div class="carousel-item active text-center bg-dark">
            <h2><a href="<?php echo $Link ?>" class="text-white bg-dark"><?php echo $Headline ?></a></h2>
              <p class="text-white bg-dark"> <?php echo $Story ?> </p>
          </div>
          <div class="carousel-item text-center bg-dark">
              <!-- problem med färgen. För nåt konstigt skull blev text färgen blå, jag ändrade den med hjälp av bootstrap klass "text.white"-->
              <h2><a href="<?php echo $Linkk ?>" class="text-white bg-dark"><?php echo $Headlinee ?></a></h2>
              <p class="text-white bg-dark"> <?php echo $Storyy ?> </p>

          </div>
          <div class="carousel-item text-center bg-dark">

            <h2><a href="<?php echo $Linkkk ?>" class="text-white bg-dark "><?php echo $Headlineee ?></a></h2>
              <p class="text-white bg-dark"> <?php echo $Storyyy ?> </p>
          </div>

        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</body>
</html>
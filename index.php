<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Number Multiplier">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Number Multiplier</title>
  </head>
  <body>
    <center>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Number Multiplier</h1>";
?>
<?php
echo "<h3>Please Entre your First and Second Number you Want Multiplied</h3>";
?>

<!-- Function and direction toward results -->
    <form action="./results.php" method="post" target="results">
      <form action=" javascript: enterClicked()">
        <!-- Numeric Textfield for first number -->
      <label for="firstNumber"> Please Enter your First Number:</label>
      <input type="number" id="firstNumber" placeholder="Ex.12" step="1" name="firstNumber"><br><br>

      <!-- Numeric Textfield for second number -->
        <label for="secondNumber"> Please Enter your Second Number:</label>
      <input type="number" id="secondNumber" placeholder="Ex.4" step="1" name="secondNumber"><br><br>
                
      <input type="submit" value="Submit responses"> 
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      results
    </iframe>
      <!-- Multiply image -->
      <h1>
      <img src="./images/math.jpg" alt="Multiply" width="75%" height="auto"/>
      </h1>
          </center>
  </body>
</html>
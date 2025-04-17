<html> 
<head> 
    <title>Car Company Finder</title> 
</head> 
<body> 
    <h2>Find the Car Company</h2> 
    <form method="post"> 
        Enter Car Model: <input type="text" name="car_model" required> 
        <input type="submit" name="submit" value="Find Company"> 
    </form> 
 
    <?php 
    if (isset($_POST['submit'])) { 
        $carModel = strtolower(trim($_POST['car_model'])); // Normalize input 
 
        // List of car models and their companies 
        $cars = [ 
            "Safari" => "Tata", 
            "Nexon" => "Tata", 
            "Tigor" => "Tata", 
            "Tiago" => "Tata", 
            "XUV700" => "Mahindra", 
            "XUV300" => " Mahindra ", 
            "Bolero" => " Mahindra ", 
            "i20" => "Hyundai", 
            "verna" => " Hyundai ", 
            "venue" => " Hyundai ", 
            "creta" => "Hyundai", 
"swift" => " Suzsuki ", 
"Alto" => " Suzsuki ", 
"Baleno" => " Suzsuki ", 
"Breza" => "Suzsuki" 
 
        ]; 
 
        if (array_key_exists($carModel, $cars)) { 
            echo "<h3>The car company for <em>" . htmlspecialchars($carModel) . "</em> is 
<strong>" . $cars[$carModel] . "</strong>.</h3>"; 
        } else { 
            echo "<h3>Sorry, car model <em>" . htmlspecialchars($carModel) . "</em> not 
found in our list.</h3>"; 
        } 
    } 
    ?> 
</body> 
</html>

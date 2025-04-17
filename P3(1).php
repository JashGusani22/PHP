<html> 
<head> 
    <title>Simple PHP Calculator</title> 
</head> 
<body> 
    <h2>Simple Calculator</h2> 
    <form method="post"> 
        <input type="number" name="num1" placeholder="First Number" required> 
        <select name="operator"> 
            <option value="add">+</option> 
            <option value="subtract">−</option> 
            <option value="multiply">×</option> 
            <option value="divide">÷</option> 
        </select> 
        <input type="number" name="num2" placeholder="Second Number" required> 
        <input type="submit" name="calculate" value="Calculate"> 
    </form> 
 
    <?php 
    if (isset($_POST['calculate'])) { 
        $num1 = $_POST['num1']; 
        $num2 = $_POST['num2']; 
        $operator = $_POST['operator']; 
        $result = ""; 
 
        switch ($operator) { 
            case "add": 
                $result = $num1 + $num2; 
                break; 
            case "subtract": 
                $result = $num1 - $num2; 
                break; 
            case "multiply": 
                $result = $num1 * $num2; 
                break; 
            case "divide": 
                if ($num2 == 0) { 
                    $result = "Cannot divide by zero!"; 
                } else { 
                    $result = $num1 / $num2; 
                } 
                break; 
            default: 
                $result = "Invalid operation"; 
        } 
 
        echo "<h3>Result: $result</h3>"; 
    } 
    ?> 
</body> 
</html>

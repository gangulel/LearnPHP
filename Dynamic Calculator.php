<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Calculator</title>
</head>
<body>
    <h1>PHP Dynamic Calculator</h1>
    <!-- Form to Take Inputs -->
    <form method="POST" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        
        <label for="operator">Operator:</label>
        <select name="operator" id="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>
        
        <button type="submit">Calculate</button>
    </form>

    <h2>Result:</h2>
    <?php
    // PHP Function to Perform the Calculation
    function calculate($num1, $num2, $operator) {
        if (($operator == '/' || $operator == '%') && $num2 == 0) {
            return "Error: Division or modulus by zero is not allowed.";
        }

        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                return $num1 / $num2;
            case '%':
                return $num1 % $num2;
            default:
                return "Error: Invalid operator.";
        }
    }

    // Handling the Form Submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        // Call the calculate function and display the result
        $result = calculate($num1, $num2, $operator);
        echo "<strong>$result</strong>";
    }
    ?>
</body>
</html>

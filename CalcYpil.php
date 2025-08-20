<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
</head>
<body>

<div>
    <h2>Simple Calculator</h2>

    <?php
    // Initialize variables to store numbers and result
    $num1 = '';
    $num2 = '';
    $operator = '+';
    $result = '';
    $error = '';

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and get input values
        $num1_input = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $num2_input = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $operator = filter_input(INPUT_POST, 'operator', FILTER_SANITIZE_STRING);

        // Validate input
        if (!is_numeric($num1_input) || !is_numeric($num2_input)) {
            $error = "Please enter valid numbers.";
            // Keep the entered values if there's an input validation error
            $num1 = $num1_input;
            $num2 = $num2_input;
        } else {
            // Convert to float for calculations
            $num1_float = (float)$num1_input;
            $num2_float = (float)$num2_input;

            // Perform calculation using if-else if structure
            if ($operator == '+') {
                $result = $num1_float + $num2_float;
            } elseif ($operator == '-') {
                $result = $num1_float - $num2_float;
            } elseif ($operator == '*') {
                $result = $num1_float * $num2_float;
            } elseif ($operator == '/') {
                if ($num2_float != 0) {
                    $result = $num1_float / $num2_float;
                } else {
                    $error = "Cannot divide by zero!";
                }
            } else {
                $error = "Invalid operator selected.";
            }

            // If the calculation was successful and no error occurred, clear the input fields
            if (!$error) {
                $num1 = ''; // Clear the first number input
                $num2 = ''; // Clear the second number input
            } else {
                // If there was an error during calculation (e.g., division by zero), retain inputs
                $num1 = $num1_input;
                $num2 = $num2_input;
            }
        }
    }
    ?>

    <?php if ($error): ?>
        <div style="color: red;"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="num1" placeholder="Enter first number" value="<?php echo htmlspecialchars($num1); ?>" required><br><br>

        <select name="operator">
            <option value="+" <?php if ($operator == '+') echo 'selected'; ?>>+</option>
            <option value="-" <?php if ($operator == '-') echo 'selected'; ?>>-</option>
            <option value="*" <?php if ($operator == '*') echo 'selected'; ?>>*</option>
            <option value="/" <?php if ($operator == '/') echo 'selected'; ?>>/</option>
        </select><br><br>

        <input type="text" name="num2" placeholder="Enter second number" value="<?php echo htmlspecialchars($num2); ?>" required><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php if ($result !== '' && !$error): ?>
        <div>
            Result: <?php echo htmlspecialchars($result); ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>

<?php 
//try {
    // Code that might throw an exception
//} catch (Exception $e) {
    // Handle the exception
//} finally {
    // Code to execute regardless of exception
//} -->
function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}
try {
    echo divide(15, 0);
} catch (Exception $e) {
    echo  $e->getMessage();
} finally {
    echo "Process complete.";
}

?>
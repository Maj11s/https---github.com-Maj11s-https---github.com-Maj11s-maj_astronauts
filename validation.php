<?php
// here I have used validation from W3 Schools https://www.w3schools.com/php/php_form_validation.asp
function test_input($data) { //this function will 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } // (return tag) If called from within a function, the return() statement immediately ends execution of the current function, and returns its argument as the value of the function call

?>
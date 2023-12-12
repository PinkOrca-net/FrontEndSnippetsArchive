<?php
if (isset($_POST['input1']) && isset($_POST['input2'])) {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];

    // process the inputs
    echo "The inputs are:<br>'$input1'<br>and<br>'$input2'.";
} else {
    echo "Error: inputs not received.";
}

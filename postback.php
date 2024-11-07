<?php
// postback.php lightest code available for end user who want to get postback from a 3rd party

// Check if we received any data via POST
if (!empty($_POST)) {
    // Log the received data for testing purposes
    $log_data = json_encode($_POST) . "\n"; // Convert the data to JSON format
    file_put_contents('postback_log.txt', $log_data, FILE_APPEND); // Save to a log file postback_log.txt name can be modified depends on how you want
    
    // You can also display the received data to confirm it
    echo "Postback received! Data: " . print_r($_POST, true);
} else {
    echo "No data received.";
}
?>

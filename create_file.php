<?php
// Check if data is received
if(isset($_POST['data'])) {
    // Get the data sent from the form
    $data = $_POST['data'];

    // Define the file path
    $file_path = 'info.txt';

    // Open the file in write mode
    $file = fopen($file_path, 'w');

    // Write the data to the file
    fwrite($file, $data);

    // Close the file
    fclose($file);

    // Return a success message
    echo "File created successfully!";
} else {
    // If data is not received, return an error message
    echo "Error: Data not received.";
}
?>
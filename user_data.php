<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $DOB = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $user_data = [$fname, $lname, $email, $DOB, $gender, $country];

    $file = fopen('file.csv', 'a');

    if ($file) {
        echo 'File is opened';

        if (fputcsv($file, $user_data)) {
            echo 'File is written' . '<br>';
        } else {
            echo 'File could not be written' . '<br>';
        }
    } else {
        echo 'File could not be opened' . '<br>';
    }
    fclose($file);
} else {
    echo 'No data';
}
?>

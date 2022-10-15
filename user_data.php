<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $DOB = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $user_data = [$fname, $lname, $email, $number, $DOB, $gender, $country];

    $file = fopen('file.csv', 'a');

    if ($file) {
        echo 'File is opened' . '<br>';

        if (fputcsv($file, $user_data)) {
            echo 'File is written' . '<br>';
            print_r($user_data);
        } else {
            echo 'File not written';
        }
    } else {
        echo 'File could not be opened' . '<br>';
    }
    fclose($file);
} else {
    echo 'No data';
}
?>

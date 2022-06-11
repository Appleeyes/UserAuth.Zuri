<?php

    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

//$data = implode(" ", $userdata);
$user=[
    "name" => $username, "email" => $email, "password" => $password
];
    

    
    //save data into the file
    $filename= "../storage/users.csv";
    $filehandle= fopen($file, "a");
    $fputcsv= fputcsv($handle, $user);
    $fclose= ($handle);
    if $fputcsv{
       echo " <script>alert('User Successfully registered');
        window.location='../forms/login.html';
    </script>";
       
    }
    
    // echo "OKAY";


<?


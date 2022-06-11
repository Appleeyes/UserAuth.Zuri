<?php
if(isset($_POST['submit'])){
    $email = input($_POST["email"]);
    $password = input($_POST["password"]);

loginUser($email, $password);

}

// get user input
   $path = "../storage/users.csv";    
// read the entire file into a string
   $open = fopen($path, "r");   
//check if data match with data in csv
   $file = file_get_contents("../storage/users.csv");
      

//Start session with multidimentional array 
session_start();
    $csv = array_map('str_getcsv', file('../storage/users.csv'));
    $c_name = array_column($csv, 0);
    $c_email = array_column($csv, 1);
    $c_password = array_column($csv, 2);
    
//search the array row using the column and return the key
    $search = array_search($email, $c_email);
    $search_password = array_search($password, $c_password);
    
//save the row where the user is present in the variable
    $row = ($csv[$search]);
//extract the name
    $_SESSION['user'] = ($row[0]);
//extract the email
    $db_email = ($row[1]);
//extract the password
    $db_password = ($row[2]);  
    
    
if ($db_email == $email 
   $db_password == $password) {
   echo '<script>alert("Welcome ' . 
   
   $_SESSION['user'] . ' ");
        window.location="../dashboard.php";
              </script>';
} 
   
   else {
    
    echo '<script>alert("Invalid Username or Password");
              window.location="../forms/login.html";
              </script>';

}      
    
    

/*function loginUser($email, $password){
    
        Finish this function to check if username and password 
    from file match that which is passed from the form
    
}

echo "HANDLE THIS PAGE";*/

?>
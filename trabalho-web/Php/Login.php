<?php

define('HOST', '127.0.0.1');
define('DBNAME', 'moletom');
define('USER', 'root');
define('PASSWORD', '0102');

if(isset($_POST["submit"])){    
if(!empty($_POST['user']) && !empty($_POST['pass'])) {    
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $conn =  mysqli_connect(HOST, USER, PASSWORD, DBNAME);
    
    $query=mysqli_query($conn ,"SELECT * FROM login WHERE username='".$user."'");    
    $numrows=mysqli_num_rows($query);    
    //Realizando uma consulta no BD
    $instrucaoSQL = "Select Username, Password From login";
    $stmt = mysqli_prepare($conn, $instrucaoSQL);
    mysqli_stmt_bind_result($stmt, $User, $Pass);
    mysqli_stmt_execute($stmt);
    while (mysqli_stmt_fetch($stmt)) {

        if ($User == $user && $Pass == $pass) {
            setcookie('sess', $User, time() + (86400 * 30), "/"); // 86400 = 1 day
            header('location:../Html/Home.php');
        }
    }
    }    
    else {    
    $message = "Ambos os campos são necessários.";
    echo "<script type='text/javascript'>alert('$message');
    window.location = '../Html/Entrar.php';
    </script>";
}
}     

?>    
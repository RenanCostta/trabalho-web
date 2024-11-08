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
    if($numrows==0)    
    {    
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";    
    
    $result=mysqli_query($conn, $sql);    
        if($result){    
    echo "Account Successfully Created";    
    } else {    
    echo "Failure!";    
    }    
    
    } else {    
    $message = "Conta já registrada anteriormente.";
    echo "<script type='text/javascript'>alert('$message');
    window.location = '../Html/Entrar.php';
    </script>";
    exit;
    }    
    
} else {    
    $message = "Ambos os campos são necessários.";
    echo "<script type='text/javascript'>alert('$message');
    window.location = '../Html/Inscrever-se.php';
    </script>";
}    
}
?>    
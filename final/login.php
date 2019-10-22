<?php
    $con = mysqli_connect("localhost","root","","iwp");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
        $email = $_POST['email-id'];
        $password = $_POST['pwd'];
        $query1 = "select email from details where email = '$email'";
        $res1 = mysqli_query($con,$query1);
        $num =  mysqli_num_rows($res1);
        if($num == 0)
        {
            echo '<script language="javascript">';
            echo 'alert("Email-ID not registered")';
            echo '</script>';
            header("refresh: 0; url = log_in.html");
        }
        else{
            $query2 = "select password from details where email = '$email' ";
            $res2 = mysqli_query($con,$query2);
            $res = mysqli_fetch_assoc($res2);
            if($res['password']==$password)
            {
                echo '<script language="javascript">';
                echo 'alert("User authenticated")';
                echo '</script>';
                header("refresh: 0; url = index.html");
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("Incorrect Password")';
                echo '</script>';
                header("refresh: 0; url = log_in.html");
            }
        }
        
?>
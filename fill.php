<?php

$con = mysqli_connect('localhost:3306','root','12345','datab');

$roll=$_POST['roll'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phn'];

if(empty($roll) || empty($fname) ||  empty($lname) || empty($email) || empty($phone)){
    echo "<script>
    alert('Field is empty!');
    window.location.href='fillup.html';
    </script>";
}

$sql="INSERT INTO `student` (`roll` ,`first_name`,`last_name`,`email`,`phone`) VALUES ('$roll','$fname','$lname','$email','$phone')";
$rs=mysqli_query($con,$sql);

if($rs){
    echo "<script>
        alert('Successful');
        window.location.href='fillup.html';
    </script>";
}

else{
    echo "<script>
    alert('Unsuccessful ! check inputs');
    window.location.href='fillup.html';
    </script>";
}


?>
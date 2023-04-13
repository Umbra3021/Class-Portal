<html>
<link rel="stylesheet" href="table.css">

    <body>
        <div id="f">
        <?php
            $roll=$_POST['roll'];
            $con = mysqli_connect('localhost:3306','root','12345','datab');
            $sql= "SELECT * FROM `student` WHERE `roll` = '$roll'";
            $result =$con->query($sql);

            if($result !== false && $result->num_rows > 0){
                include('student.php');
            }

            else{
                echo "<h1>Roll Not Found</h1>";
            }



        ?>
        </div>
    </body>
</html>
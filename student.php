
           
<?php

    $con = mysqli_connect('localhost:3306','root','12345','datab');
    $result =$con->query($sql);
        echo "<table><tr><th>Roll no</th><th>First Name</th><th>Last Name</th><th>Email</th>
        <th>Phone no.</th></tr>";
         while($row = mysqli_fetch_array($result)){
                    
            echo "<tr><td>" . $row["roll"]. "</td><td>" . $row["first_name"]. " </td><td>" . $row["last_name"]. 
            "</td><td>" . $row["email"]. "</td><td>" .$row["phone"] ."</td></tr>";
            }
            echo "</table>";
            echo "<button onclick='history.back()'>Go Back</button>";

?>
<link rel="stylesheet" href="table.css">

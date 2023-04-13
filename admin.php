<?php


$con = mysqli_connect('localhost:3306','root','12345','datab');
$sql= "SELECT * FROM `student`;";
$result =$con->query($sql);
if($result->num_rows>0){
    echo "<table><tr><th>Roll no</th><th>First Name</th><th>Last Name</th><th>Email</th>
    <th>Phone no.</th></tr>";
   
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["roll"]. "</td><td>" . $row["first_name"]. " </td><td>" . $row["last_name"]. 
        "</td><td>" . $row["email"]. "</td><td>" .$row["phone"] ."</td></tr>";
    }
    echo "</table>";
    echo "<button onclick='history.back()'>Go Back</button>";
    echo "<button onclick='add()' style='margin-left:53%'>Add</button>"; 
    echo "<script src='script2.js'></script>"; 
    }
else{
    echo "<button onclick='history.back()'>Go Back</button>";
    echo "<button onclick='add()' style='margin-left:53%'>Add</button>"; 
    echo "<script src='script.js'></script>"; 
}

?>
<link rel="stylesheet" href="table.css">



<html>
<link rel="stylesheet" href="table.css">
<body>
    <div id="f">
       <?php 
       $user_name = $_POST['user'];
       $pass_word = $_POST['pass'];
       $u="admin";
       $pas="12345";
       if($user_name==$u && $pass_word==$pas){
       include('admin.php'); 
       }
       
       else{
        echo "<h1>Incorrect UserName or Password</h1>";
        echo "<button onclick='history.back()'>Go Back</button>";
       }
       ?>
    </div>

</body>
</html>
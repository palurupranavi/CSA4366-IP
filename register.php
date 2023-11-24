<?php
include 'db.php';
?>
<!DOCTYPE html>
<head>
<title>
registeration</title>
<style>
    body {
        font-family: Arial, Sans-serif;
        background-color:gray;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .container {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: white; /* Add semicolon here */
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
form
{
width:300px;
margin-left:20px;
}
form label
{
display:flex;
margin-top:10px;
font-size:18px;
}

    input[type="submit"] {
        width: 200px;
        height: 35px;
        margin-top: 20px;
        border: none;
        background-color: #ff7200;
        color: white;
        font-size: 18px;
        cursor: pointer;
    }
</style>
</head>
<center>
<body>
<form action="" method="POST">
<div class="container">
<h1>register form</h1>
<label>first name:</label>
<input type="text" name="firstname" placeholder="firstname">
<label>last name:</label>
<input type="text" name="lastname" placeholder="lastname">
<label>gender:</label>
<input type="text" name="gender" placeholder="gender">
<label>phone no:</label>
<input type="tel" name="number" placeholder="number">
<label>email:</label>
<input type="email" name="email" placeholder="email">
<label>password:</label>
<input type="password" name="password" placeholder="password">
<label>confirm password:</label>
<input type="cpassword" name="cpassword" placeholder="cpassword">
<input type="submit" name="save_btn" value="save">
</div>
</form>
<?php
$data=false;
if(isset($_POST['save_btn']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$number=$_POST['number'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
if($password===$cpassword)
{
$query="INSERT INTO register(firstname,lastname,gender,number,email,password,cpassword) VALUES('$firstname','$lastname','$gender','$number','$email','$password','$cpassword')";
$data=mysqli_query($con,$query);
?>
<script type="text/javascript">
alert("correct password")
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("try again")
</script>
<?php
}
}
if($data)
{
?>
<script type="text/javascript">
alert("data entered successfully")
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("data entered successfully")
</script>
<?php
}
?>
<p><a href="login.php">already have an account?</a></p>
</body>
</center>
</html>

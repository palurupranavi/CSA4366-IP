<?php
include 'db.php';
$id = $_GET['id'];
$select = "SELECT * FROM register WHERE id='$id'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_assoc($data); // Changed to fetch_assoc

if ($row) {
?>
    <center>
        <div>
            <form action="" method="POST">
                <input value="<?php echo $row['firstname']; ?>" type="text" name="firstname" placeholder="firstname"><br><br>
                <input value="<?php echo $row['lastname']; ?>" type="text" name="lastname" placeholder="lastname"><br><br>
                <input value="<?php echo $row['gender']; ?>" type="text" name="gender" placeholder="gender"><br><br>
                <input value="<?php echo $row['number']; ?>" type="tel" name="number" placeholder="number"><br><br>
                <input value="<?php echo $row['email']; ?>" type="email" name="email" placeholder="email"><br><br>
                <input type="submit" name="update_btn" value="update">
            </form>
            <button><a href="detail.php">back</a></button>
        </div>
    </center>
<?php
} else {
    echo "Record not found.";
}

if (isset($_POST['update_btn'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $update = "UPDATE register SET firstname='$firstname', lastname='$lastname', gender='$gender', number='$number', email='$email' WHERE id='$id'";
    $result = mysqli_query($con, $update);

    if ($result) {
?>
        <script type="text/javascript">
            alert("Updated successfully")
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Error. Try again.")
        </script>
<?php
    }
}
?>

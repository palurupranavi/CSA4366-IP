<?php
include 'db.php';

// Get user ID from the URL parameter
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Fetch user details from the database
    $query = "SELECT * FROM register WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <center>
        <h2>User Details</h2>
        <table>
            <tr>
                <th>ID</th>
                <td><?php echo $user['id']; ?></td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td><?php echo $user['firstname']; ?></td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td><?php echo $user['lastname']; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $user['gender']; ?></td>
            </tr>
            <tr>
                <th>Number</th>
                <td><?php echo $user['number']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $user['email']; ?></td>
            </tr>
        </table>
    </center>
</body>

</html>

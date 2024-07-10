<?php
$servername = "localhost"; // Replace with your server name
$username = "xcispcjl_pulsezest_mavi"; // Replace with your MySQL username
$password = "#@mc]yW5m98+"; // Replace with your MySQL password
$dbname = "xcispcjl_ANA"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT  id, first_name, course, branch, email FROM teachers ORDER BY id DESC LIMIT 5"; // Adjust the query as needed

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Details</title>
    <style>
        /* Styles for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Styles for the dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .ellipsis-button {
        font-size: 20px; /* Adjust the size as needed */
        cursor: pointer; /* Optional: add a pointer cursor on hover */
    }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Branch</th>
                <th>Email</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['first_name'] . '</td>';
                echo '<td>' . $row['course'] . '</td>';
                echo '<td>' . $row['branch'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>';
                echo '<div class="dropdown">';
                echo '<span class="ellipsis-button">&#8285;</span>'; // Three-dot button symbol
                echo '<div class="dropdown-content">';
                echo '<a href="#">View</a>'; // Add links for view/edit actions
                echo '<a href="#">Fees</a>';
                echo '<a href="#">Edit</a>';
                echo '</div>';
                echo '</div>';
                echo '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="6">No students found.</td></tr>';
        }

        mysqli_close($conn); // Close the database connection
        ?>

        </tbody>
    </table>

    <!-- Add any additional HTML content or scripts as needed -->

</body>

</html>

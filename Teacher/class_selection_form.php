<?php
// dashboard.php

// Start the session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["username"])) {
    // Redirect to the login page
    header("Location: /ana/login.php");
    exit();
}

// The rest of your dashboard.php code goes here
// ...

$teacherEmail = $_GET['id'];
$teacherName = $_GET['name'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-rn5sjJcN7eVfyx7F3Rxi0BOmkcd6OW9Uc5N+LssMcb7+Y+3Q7F2MI5/F4qilxNO" crossorigin="anonymous">
    <link rel="stylesheet" href="/ana/const/template.css">
    <title>Class Selection</title>
</head>

<body>
    <style>
        h1 {
            text-align: center;
            color: red;

            font-size: 2.5rem;
            font-weight: 600;
        }

        h1 img {
            height: 37px;
        }

        .container {}
    </style>


    <div class="slider">
        <header>ANA</header>
        <a href="#"><i class="fa-solid fa-qrcode"></i><span>Dashboard</span></a>
        <a href="/ana/Social/social.php"><i class="fa-solid fa-globe"></i><span>Social</span></a>
        <a class="active" href="/ana/Teacher/teacher.php"><i class="fa-solid fa-users"></i><span>Teachers</span></a>
        <a href="/ana/Student/student.php"><i class="fa-solid fa-user"></i><span>Students</span></a>
        <a href="#"><i class="fa-regular fa-folder"></i><span>Media</span></a>
        <a href="#"><i class="fa-solid fa-gear"></i><span>Setting</span></a>
        <a href="#"><i class="fa-solid fa-info"></i><span>Info</span></a>
        <a href="#"><i class="fa-regular fa-envelope"></i><span>Contact</span></a>
        <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Log Out</span></a>
    </div>


    <div class="container">
        <h2>Select Class Information:</h2>






        <p> <strong>Email:</strong> <?php echo $teacherEmail; ?><br>
            <strong>Name:</strong> <?php echo $teacherName; ?>
        </p>

        <form  id="classSelectionForm" method="post" action="process_class_selection.php" onsubmit="submitRecords(); return false;">
            <input type="hidden" id="teacherEmail" name="teacherEmail" value="<?php echo $teacherEmail; ?>">
            <input type="hidden" id="teacherName" name="teacherName" value="<?php echo $teacherName; ?>">
            <label for="branch">Branch:</label>
            <select id="branch" name="branch">
                <option value="branch1">Branch 1</option>
                <option value="branch2">Branch 2</option>
                <!-- Add more branches as needed -->
            </select><br><br>

            <label for="semester">Semester:</label>
            <select id="semester" name="semester" onchange="showSubjects()">
                <option value="semester1">Semester 1</option>
                <option value="semester2">Semester 2</option>
                <!-- Add more semesters as needed -->
            </select><br><br>

            <label for="subject">Subject:</label>
            <select id="subject" name="subject">
                <!-- Subjects related to the selected branch and semester will be displayed here -->
            </select><br><br>
            <input type="submit" class="btn" value="SUBMIT">
            <button type="button" onclick="addRecord()">Add Record</button>
        </form>

        <hr>

        <div id="classRecords">
            <table id="recordsTable" border="1">
                <thead>
                    <tr>
                        <th>Branch</th>
                        <th>Semester</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table body will be populated dynamically -->
                </tbody>
            </table>
        </div>

        <script>
            function showSubjects() {
                var branch = document.getElementById('branch').value;
                var semester = document.getElementById('semester').value;

                var subjects = getSubjectsForBranchAndSemester(branch, semester);

                var subjectSelect = document.getElementById('subject');
                subjectSelect.innerHTML = ''; // Clear previous options

                subjects.forEach(function(subject) {
                    var option = document.createElement('option');
                    option.value = subject;
                    option.textContent = subject; // Use textContent to set the visible text
                    subjectSelect.appendChild(option);
                });
            }


            function getSubjectsForBranchAndSemester(branch, semester) {
                // Simulating subjects retrieval based on branch and semester
                var subjects = [];

                if (branch === 'branch1' && semester === 'semester1') {
                    subjects = ['Maths', 'Physics', 'Chemistry'];
                } else if (branch === 'branch1' && semester === 'semester2') {
                    subjects = ['Biology', 'History', 'Geography'];
                } else if (branch === 'branch2' && semester === 'semester1') {
                    subjects = ['Computer Science', 'Electronics', 'Mechanics'];
                } else if (branch === 'branch2' && semester === 'semester2') {
                    subjects = ['Literature', 'Art', 'Music'];
                }

                return subjects;
            }


            function addRecord() {
                var branch = document.getElementById('branch').value;
                var semester = document.getElementById('semester').value;
                var subject = document.getElementById('subject').value;

                var tableBody = document.getElementById('recordsTable').getElementsByTagName('tbody')[0];
                var newRow = tableBody.insertRow(tableBody.rows.length);

                var cell1 = newRow.insertCell(0);
                var cell2 = newRow.insertCell(1);
                var cell3 = newRow.insertCell(2);

                cell1.innerHTML = branch;
                cell2.innerHTML = semester;
                cell3.innerHTML = subject;
            }

            function submitRecords() {
                var tableRows = document.getElementById('recordsTable').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                var records = [];

                // Loop through each row in the table
                for (var i = 0; i < tableRows.length; i++) {
                    var cells = tableRows[i].getElementsByTagName('td');
                    var record = {
                        branch: cells[0].innerText,
                        semester: cells[1].innerText,
                        subject: cells[2].innerText
                    };
                    records.push(record);
                }

                // Send the records to the server using AJAX (you may use fetch or XMLHttpRequest)
                var xhr = new XMLHttpRequest();
                var url = 'process_class_selection.php'; // Replace with your server-side script URL
                xhr.open('POST', url, true);
                xhr.setRequestHeader('Content-Type', 'application/json');

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            console.log('Records successfully sent to the server');
                        } else {
                            console.error('Error:', xhr.status);
                        }
                    }
                };

                xhr.send(JSON.stringify({
                    records: records
                }));
            }
        </script>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
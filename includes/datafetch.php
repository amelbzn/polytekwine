<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM students WHERE studentId=$id");
}
$sql = "SELECT * FROM students";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die("Invalid query: " . $conn->error);
}
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_assoc($resultData)) {
    echo '<tr>
            <td>' . $row["studentName"] . '</td>
            <td>' . $row["studentEmail"] . '</td>
            <td>' . $row["studentPhone"] . '</td>
            <td>' . $row["studentBDay"] . '</td>
            <td>' . $row["studentLevel"] . '</td>
            <td>' . $row["studentFormation"] . '</td>
            <td>' . $row["studentMsg"] . '</td>
            <td>' . $row["studentInscriptionDay"] . '</td>
            <td>    
                <a type="button" class="btn btn-gradient-danger btn-icon-text btn-sm" href="index.php?id=' . $row["studentId"] . '">
                <i class="mdi mdi-alert btn-icon-prepend" ></i> Delete </a>
            </td>
    </tr>';
}

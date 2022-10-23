<?php
function emptyInputLogin($username, $pwd)
{
    $result = false;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    return $result;
}
function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUser($conn, $username, $pwd)
{
    $uidExists =  uidExists($conn, $username, $username);
    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPsw"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    $password = password_hash($pwd, PASSWORD_DEFAULT);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } elseif ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];

        header("location: ../Admin/index.php");

        exit();
    }
}

function creatStudent($conn, $name, $email, $phone, $Bday, $level, $formation, $msg)
{

    $sql = "INSERT INTO students (studentName,studentEmail,	studentPhone,studentBDay,studentLevel,studentFormation,studentMsg,	studentInscriptionDay) VALUES (?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=stmtfailed");
        exit();
    }
    $date = date('m-d-Y');

    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $email, $phone, $Bday, $level, $formation, $msg, $date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../registration.php?error=none");

    exit();
}

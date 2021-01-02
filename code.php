<?php

date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'h:i:s A', time () );

$loginTime = "";
$logoutTime = "";
$differenceInTime = "";

if(isset($_POST["login"])){
    $_SESSION["loginTime"] = $currentTime;
    $loginTime = $_SESSION["loginTime"];
}

if(isset($_POST["logout"])){
    $_SESSION["logoutTime"] = $currentTime;

    $loginTime = $_SESSION["loginTime"];
    $logoutTime = $_SESSION["logoutTime"];

    $differenceInTimeCalu = strtotime($logoutTime) - strtotime($loginTime);
    $differenceInTime = gmdate( 'H:i:s', $differenceInTimeCalu );
    

    if(isset($_SESSION['totalTime'])){

        $_SESSION['totalTime'] = $_SESSION['totalTime'] + $differenceInTimeCalu;
        
    } else {
        
        $_SESSION['totalTime'] = $differenceInTimeCalu;
    }
    
}


if(isset($_POST['reset'])){
    
    session_unset();
    session_destroy();

}
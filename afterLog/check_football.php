<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'final_project');

    $sql = "SELECT * FROM football";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) >= 8){
        function_alert("目前此項比賽報名名額已滿，無法報名~~~");
    }
    else {
        header("Location: /final_project/team/football.html");
    }



    function function_alert($message) {     
        echo "<script>
        alert('$message');
        window.location.href='team_signup.html';
        </script>";
        return false;
    } 
    $conn->close();
<?php
if(isset($_POST["sub"]))
{
    $day=$_POST["day"];
    switch ($day)
    {
            case "1":
            echo "<h1 align='center'> Monday </h1>";
            break;

            case "2":
            echo "<h1 align='center'> Tuesday </h1>";
            break;

            case "3":
            echo"<h1 align='center'> Wednesday </h1>";
            break;

             case "4":
             echo"<h1 align='center'> Thursday </h1>";
             break;

            case "5":
            echo "<h1 align='center'> Friday </h1>";
            break;

            case "6":
            echo"<h1 align='center'> Saturday </h1>";
            break;

            case "7":
            echo"<h1 align='center'> Sunday </h1>";
             break;
            
            default:
            echo" <h1 align='center'>invalid number </h1>";

    
}
}
?>
<html>
    <body>
        <center>
            <form method="POST">
                Enter Your Day No:
                <input type="text" name="day" placeholder="Enter Your day no*">
                <br><br>
                <input type="Submit" name="sub" value="Submit">
            </form>
        </center>
    </body>

</html>
    

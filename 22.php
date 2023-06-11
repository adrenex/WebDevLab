<!DOCTYPE html>
<html>
    <head>
        <title>Insert Page</title>
    </head>
    <body>
        <center>
            <?php
                $username="root";
                $servername="localhost";
                $password="";
                $database = "myFile";
                $conn = mysqli_connect($servername,$username,$password,$database);
                if($conn === false)
                {
                    die("ERROR: Could not connect. ". mysqli_connect_error());
                }
                $first_name = $_REQUEST['fname'];
                $middle_name = $_REQUEST['mname'];
                $last_name = $_REQUEST['lname'];
                $password = $_REQUEST['pass'];
                $email = $_REQUEST['email'];
                $gender = $_REQUEST['gender'];
                $phone = $_REQUEST['num'];
                $address = $_REQUEST['addr'];
                $pin = $_REQUEST['pin'];
                $city = $_REQUEST['city'];
                $country = $_REQUEST['con'];
                $skill = $_REQUEST['skill'];
                $sql = "INSERT INTO formtable VALUES ('$first_name','$middle_name',
                '$last_name','$password','$email','$gender','$phone','$address','$pin','$city','$country','$skill')";
                if(mysqli_query($conn, $sql))
                {
                    echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";
                    kill");
                    echo nl2br("\n$first_name\n $middle_name\n $last_name\n "
                    ."$gender\n"."$phone\n"."$email\n"."$password\n"."$address\n"."$pin"."$city"."$country"."$s
                } 
                else
                {
                    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
                }
                mysqli_close($conn);
            ?>
        </center>
    </body>
</html>
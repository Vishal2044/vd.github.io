<?php

    include("connection.php");

    error_reporting(0);

    $query = "SELECT * FROM data";

    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    

    if($total != 0)
    {

        ?>

            <table>
                <tr>
                    <td>Email Address</td>
                    <td>Password</td>
                    <td>Re-password</td>
                    <td>Age</td>
                    <td>DOB</td>
                    <td>Country</td>
                    <td>State</td>
                    <td>City</td>
                    <td>myFile</td>
                </tr>
            

        <?php
        while($result = mysqli_fetch_assoc($data))
        {
            echo
            "<tr>
                <td>".$result [EmailAddress]."</td>
                <td>".$result [Password]."</td>
                <td>".$result [Repassword]."</td>
                <td>".$result [Age]."</td>
                <td>".$result [DOB]."</td>
                <td>".$result [Country]."</td>
                <td>".$result [State]."</td>
                <td>".$result [City]."</td>
                <td>".$result [myFile]."</td>
        </tr>";
        }
    }
    else
    {
        echo "No record found";
    }

?>
</table>
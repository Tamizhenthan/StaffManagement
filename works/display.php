<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Staff List</title>
    <style>
        body {
            background-image: linear-gradient(grey,grey);
        }
    </style>
</head>
<body>
    <br><br>
    <center><h2 style="font-family: arial black;">STAFF LIST</h2></center>
    <br>
    <table class="table table-hover table-dark">
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Qualification</th>
            <th>Age</th>
            <th>Mobile number</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "staff");

            $sql = "SELECT * FROM staff1";
            $result = $conn->query($sql);
            if($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>". $row["name"] ."</td>";
                    echo "<td>".$row["role"]."</td>";
                    echo "<td>".$row["quali"]."</td>";
                    echo "<td>".$row["age"]."</td>";
                    echo "<td>".$row["mobile"]."</td>";
                    echo "</tr>"; 
                }
            }
            else
            {
                echo "<tr><td colspan='5'>No Data available</td></tr>";
            }
            $conn->close();
        
        ?>
    </table>
</body>
</html>

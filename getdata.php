<?php
    $con = mysqli_connect("localhost", "root", "", "subham");
    $sql = "select * from datatable order by id asc";
    $result = mysqli_query($con, $sql);
    echo"<tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
        </tr>";
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];

        echo"<tr>
                <td>$id</td>
                <td>$username</td>
                <td>$password</td>
            </tr>";
    }
?>
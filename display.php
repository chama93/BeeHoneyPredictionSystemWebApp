<?php
require_once "./config.php";
if (isset($_POST['displaySend'])){
    $table ='<table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name </th>
        <th scope="col">Phone No.</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>';
    $sql = "SELECT * FROM user_tbl";
    $result = mysqli_query($conn,$sql);
    $number=1;
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $phone=$row['phone'];
        $username=$row['username'];
        $password=$row['password'];
        $table.='<tr>
        <td scope="row">'.$number.'</td>
        <td>'.$name.'</td>
        <td>'.$phone.'</td>
        <td>'.$username.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-success" 
        onclick="GetDetails('.$id.')"> Update </button>
        <button class="btn btn-danger" 
        onclick="DeleteUser('.$id.')"> Delete </button>
    </td>
      </tr>';
      $number++;
    }
    $table.='</table>';
    echo $table;
}
?>

<?php
include 'dbcon.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="jatailp.png">
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Add Pekerja</title>
</head>

<body>
<div class="container">
  <div class="info_pekerja mt-4">
     <h4 class="text-center text-striped"></h4>
 </div>

 <br>

<div>
    <!--<button class="btn btn-primary my-5"><a href="tambahpekerja.php" class="text-light"type="button" data-toggle="modal"data-target="#addNewUserModal">Tambah Pengguna</a></button>-->

    <table class="table table-striped table-bordered text-center">
         <thead>
             <tr>
               <th scope="col">Ic</th>
               <th scope="col">Nama</th>
               <th scope="col">Nombor Telefon</th>
               <th scope="col">Jantina</th>
               <!-- <th scope="col">JANTINA</th> -->
             </tr>
         </thead>

  <tbody>

  <?php  
  
  $sql = "SELECT * FROM `info_pekerja`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($pekerja=mysqli_fetch_assoc($result)){
      $id=$pekerja['id'];
      $ic_pekerja=$info_pekerja['ic'];
      $nama_=$info_pekerja['nama'];
      $no_hp=$info_pekerja['hp'];
      $jantina=$info_pekerja['jantina'];
      echo '<tr>
      <th scope="info_pekerja">'.$id.'</th>
      <td>'.$ic.'</td>
      <td>'.$nama.'</td>
      <td>'.$hp.'</td>
      <td>'.$jantina.'</td>
     <td>
        <button class="btn btn-primary"><a href="kemaskinipekerja.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
        <button class="btn btn-primary my-5"><a href="add.php" class="text-light"type="button" data-toggle="modal"data-target="#addNewUserModal">Tambah</a></button>

     </td>
    </tr>';
    }
 }
  ?>
  </tbody>

   </table>
</div>


<button class="btn btn-primary my-5"><a href="add.php" class="text-light"type="button" data-toggle="modal"data-target="#addNewUserModal">ADD</a></button>
<button type="submit" class="btn btn-primary"><a href="logout.php" class="text-light">Logout</button>

</body>

</html>
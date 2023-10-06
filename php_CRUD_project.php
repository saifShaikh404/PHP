<?php

$server = "localhost";
$uname = "root";
$pass = "";
$con = mysqli_connect($server, $uname, $pass);

if(!$con){
    die("some error occured " . mysqli_connect_error());
}

$newdb = "crudApp";
$query = "CREATE DATABASE $newdb";
$res = mysqli_query($con, $query);
$con = mysqli_connect($server, $uname, $pass, $newdb);
$value = false;

if(!$con){
    die("some error occured " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $text = $_POST['text'];
  $textarea = $_POST['textarea'];
  $query = "INSERT INTO `crud` (`Name`, `Description`, `Date`) VALUES ('$text', '$textarea', current_timestamp())";
  $res = mysqli_query($con, $query);
  $value = true;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    
  
    <title>PHP-CRUD APP</title>
  </head>
  <body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form actions="saif/php_CRUD_project.php" method="post">
  <div class="form-group">
    <label for="textEdit">Edit Title</label>
    <input type="text" name="textEdit" class="form-control" id="textEdit" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="textareaEdit">Edit Description</label>
    <textarea name="textarea" name="textareaEdit" id="textareaEdit" cols="30" class="form-control" rows="8"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php

// $editTitle = $_POST["textEdit"];
// $editDesc = $_POST["textareaEdit"];
// if($editTitle && $editDesc){
//   $query = "UPDATE `crud` SET `grade` = 'A' WHERE `Name` = 'akif'";
// }

?>

<!-- Navbar  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">iNotes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<?php

if($value){

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Your note has been submitted
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  
}

?>

<div class="container my-4">
<form actions="saif/php_CRUD_project.php" method="post">
  <div class="form-group">
    <label for="text">Title</label>
    <input type="text" name="text" class="form-control" id="text" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="textarea">Description</label>
    <textarea name="textarea" name="textarea" id="textarea" cols="30" class="form-control" rows="8"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="container">
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">srno</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $query = "SELECT * FROM `crud`";
    $res = mysqli_query($con, $query);
    $srno = 0;
    while($num = mysqli_fetch_assoc($res)){
      $srno = $srno + 1;
        echo "<tr>
        <th scope='row'>" . $srno . "</th>
        <td>" . $num['Name'] . "</td>
        <td>" . $num['Description'] . "</td>
        <td><div><button type='button' class='edit btn btn-sm btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button> <button class='btn btn-sm btn-primary'>Delete</button></div></td>
      </tr>";
    }
    ?>
  </tbody>
</table>



</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <script>
      let table = new DataTable('#myTable');
  </script>

  </body>

  <script>
      edits = document.getElementsByClassName("edit");
      Array.from(edits).forEach((ele)=>{
        ele.addEventListener("click",(e)=>{
          let parent = e.target.parentNode.parentNode;

          title = parent.getElementsByTagName("td")[0].innerText;
          description = parent.getElementsByTagName("td")[1].innerText;
          console.log(title, description);
          textEdit.value = title;
          textareaEdit.value = description;
          // editModal.toggle()
          // $('#editModal').modal('toggle');
        })
      })
    </script>
</html>
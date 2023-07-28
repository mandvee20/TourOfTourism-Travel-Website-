<?php
// connect to database 
$servername ="localhost";
$username = "root";
$password = "";
$database="tutorial";
$conn=mysqli_connect($servername , $username , $password,$database);
$insert =false;
if(!$conn){
    die("sorry we failed to connect ".mysqli_connect_error ());
}
// echo $_GET['update'];
// echo $_POST['snoEdit'];
// exit();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

      
    if(isset($_POST['snoEdit'])){
        $sno=$_POST['snoEdit'];
        $title = $_POST['titleEdit'];
        $descrip = $_POST['descripEdit'];
            $sql ="UPDATE `crud` SET `title` = '$title', `descrip` = '$descrip' WHERE `crud`.`sno` = $sno ";
    $res =mysqli_query($conn,$sql);
  

      
    }
    else{

        $title = $_POST['title'];
        $descrip = $_POST['descrip'];
            $sql ="INSERT INTO `crud` (`sno`, `title`, `descrip`, `timesp`) VALUES (NULL, '$title', '$descrip', current_timestamp());";
    $res =mysqli_query($conn,$sql);
    if($res){
        $insert=true;}
    }

    }

 
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    

    <title>PHP crud PROJECT</title>
</head>

<body>

<!-- edit modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
Edit Modal Label
</button> -->

<!--edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel">Edit Note  </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/Manas/crud.php" method="POST">
        <input type="hidden" class="snoEdit" id="snoEdit"> 
            <div class="mb-3 ">
                <h1>Add A Note !</h1>
                <label for="titleEdit" class="form-label">Node Title</label>
                <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Enter your TITLE Above !</div>
            </div>
            
            <div class="form-group">
                <label for="descripEdit" class="form-label">Description !</label>
                <textarea class="form-control" placeholder="Leave a description here" id="descripEdit" name="descripEdit"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update Note</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Manas/crud.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor" class="bi bi-airplane-engines-fill" viewBox="0 0 14 14">
  <path d="M8 0c-.787 0-1.292.592-1.572 1.151A4.347 4.347 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0Z"/>
</svg></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
   <?php
    if($insert){
        echo '<div class="alert alert-success" role="alert">
        Record Successfully Added !!
      </div>';
    }
   ?>
    <div class="container my-4">
        <form action="/Manas/crud.php" method="POST">
            <div class="mb-3 ">
                <h1>Add A Note !</h1>
                <label for="title" class="form-label">Node Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Enter your TITLE Above !</div>
            </div>
            
            <div class="form-group">
                <label for="descrip" class="form-label">Description !</label>
                <textarea class="form-control" placeholder="Leave a description here" id="descrip" name="descrip"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">ADD NODE</button>
        </form>
    </div>

    <div class="container my-4">

        <!-- <?php
        $sql="SELECT * FROM `crud`";
        $result =mysqli_query($conn,$sql);
        if($r= MYSQLI_NUM_rows($result)){
            while($row=mysqli_fetch_assoc($result)){
           echo $row['sno']." Title : ".$row['title']." with Description : " .$row['descrip'];
           echo"<br>";
            }
        }
        ?> -->
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql="SELECT * FROM `crud`";
        $result =mysqli_query($conn,$sql);
        if($r= MYSQLI_NUM_rows($result)){
            $sno =0;
            while($row=mysqli_fetch_assoc($result)){
                $sno = $sno+1;
                echo "<tr>
                <th scope='row'>". $sno."</th>
                <td>". $row['title']. "</td>
                <td>". $row['descrip']. "</td>
                <td> <button class='edit btn btn-primary' id=". $row['sno']. " >
                Edit 
                </button> 
                <a href='/del'>delete</a> </td> 
              </tr>";
          
            }
        }
    ?>
   

    
  </tbody>
</table>
        
        
    </div>
    <hr>
    <hr>
    <hr>
    <hr>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>

<script>
edits=document.getElementsByClassName('edit');
Array.from(edits).forEach((element)=>{
    element.addEventListener("click", (e)=>{
        console.log("edit", );
        tr= e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title,description);
        titleEdit.value = title;
        descripEdit.value = description;
        snoEdit.value= e.target.id;
        console.log(e.target.id);
        $('#editModal').modal('toggle');

    })
})
</script>
</body>

</html>
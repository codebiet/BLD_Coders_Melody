<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>MUSIC PLAYER</title>
    <link href="Style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    
<!-- it's a navbar -->

    <?php
    include("includes/header.php");
    ?>

<!-- it's a main section -->
<hr>
<div class="container row ">
  <ul class="flex">
   <li> <a href="#">Ganna </a></li>   
   <li><a href="#">Playlist </a></li>   
   <li>Punjabi Top 50</li>   
</ul>
</div>
<hr>

<div class="container my-3">
    <div class="media ">
        <img src="photo2.jpg"  width="150px" height="150px" class="mr-3" alt="...">

        <div class="media-body ml-3">
          <h5 class="mt-0">Punjabi Top 50</h5>
          <P>  created by ganna |Track 50</P>
          <button type="button" class="btn btn-danger my-3">PLAY ALL</button>
        </div>

      </div>
</div>



     
<!-- it's a table section -->

<table class="table container ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col" ></th>
        
        <th scope="col">TITLE</th>
        <th scope="col">ARTIST</th>
        <th scope="col">DURATION</th>
      </tr>
    </thead>
    <tbody>

      <tr onclick="window.location='https://ide.geeksforgeeks.org/Y4U8qx'">
     
        <th scope="row">1</th>  
        <td >
          <img src="dil.png" height="30px" width="30px">
        </td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>...</td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td >
          <img src="dil.png" height="30px" width="30px">
        </td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td >
          <img src="dil.png" height="30px" width="30px">
        </td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td >
          <img src="dil.png" height="30px" width="30px">
        </td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td >
          <img src="dil.png" height="30px" width="30px">
        </td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td >
          <img src="dil.png" height="30px" width="30px">
        </td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td >
          <img src="dil.png" height="30px" width="30px">
        </td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td >
          <img src="dil.png" height="30px" width="30px">
        </td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td >
          <img src="dil.png" height="30px" width="30px">
        </td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
<hr>
<!-- it's a footer section -->


<div class="music container-flex col-12">

  <div class="media col-3 ">
    <img src="photo2.jpg" class="mr-3 my-1"  width="40px" height="40px"   alt="...">
    <div class="media-body">
      <p>Afgan jalebi <br> phnathon</p>   
    </div>
  </div>

  <div class="media col-9">
    
    <div class="media-body">
      <audio controls class="my-1">
        <source src="horse.ogg" type="audio/ogg">
        <source src="horse.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    
    </div>
    
  </div>

</div>
 
    <!-- Optional JavaScript; choose one of the two! -->
<?php
    include("includes/footer.php");
    ?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
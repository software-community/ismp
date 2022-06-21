<html>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php
        $type_1 = "SELECT * FROM carousel";
        $records = mysqli_query($conn, $type_1); 
                      
        while( $data = mysqli_fetch_assoc($records)){
                                  
          $serial = $data['serial'];

          if ($serial=='0')
          {
            echo " <li data-target='#carouselExampleIndicators' data-slide-to='$serial' class='active'></li> ";
          }
          else
          {
            echo " <li data-target='#carouselExampleIndicators' data-slide-to='$serial'></li> ";
          }
        }
      ?>
    </ol>
    <div class="carousel-inner">
      <?php
        $type_2 = "SELECT * FROM carousel";
        $records1 = mysqli_query($conn, $type_2); 
                      
        while( $data = mysqli_fetch_assoc($records1)){
              
          $serial = $data['serial'];
          $name = $data['name'];

          $folder = 'images/carousel/';
          $path = $folder.$name;

          if ($serial=='0')
          {
            echo " <div class='carousel-item active'>
              <img class='d-block w-100' src='$path' alt='$serial'>
            </div> ";
          }
          else{
            echo " <div class='carousel-item'>
              <img class='d-block w-100' src='$path' alt='$serial'>
            </div> ";
          }
        }
      ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</html>
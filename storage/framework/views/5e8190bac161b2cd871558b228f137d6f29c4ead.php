<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <style>
    body {
      background-image: url("/backimg2.jpg");
      background-repeat: no-repeat;
      background-size: 100% 100%;
      background-attachment: fixed;
    }
    .postarticle {
      text-align: center;
      
    }
    #myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: red; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
}

#myBtn:hover {
    background-color: #555; /* Add a dark-grey background on hover */
}



.futeris {
    display: inline-block;
    margin: 0 16px;
    color: white;
}



    </style>
    <title>starta lapa</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="/">This site doesn't make sense</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
           
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">about</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">services</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="/contact">contact</a>
              </li>
            
            </li>
      
          </ul>
          
        </div>
    </div>
      </nav>





      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img_lights.jpg" height="400px" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img.jpg"   height="400px" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img1.jpg" height="400px" alt="Third slide">
          </div>
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




     


<!-- <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-m-6 border">
        <img src="img_lights.jpg" alt="" width="250px" height="200px">
        <button type="button" class="btn btn-danger">dsafsg</button>
      </div>
      <div class="col-xl-3 col-lg-4 col-m-6">
        <img src="img_lights.jpg" alt="" width="250px" height="200px">
      </div>
      <div class="col-xl-3 col-lg-4 col-m-6">
        <img src="img_lights.jpg" alt="" width="250px" height="200px">
      </div>
      <div class="col-xl-3 col-lg-4 col-m-6">
        <img src="img_lights.jpg" alt="" width="250px" height="200px">
      </div>
    </div>
  </div> -->
  <div class="container">
  <div class="row">
		<!-- <div class="col-lg-4 col-md-6 col-sm-6" style="padding: 15px; background-color: gray">
			<div class="thumbnail" style="padding: 15px">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img_lights.jpg" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Article 1</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.</p>
                <a href="/blogaieraksts" class="btn btn-primary">Go to article</a>
              </div>
            </div>
		</div>
	</div> -->
		
		
  
         <?php $__currentLoopData = $galadarbaarticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galadarbaarticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-lg-4 col-md-6 col-sm-6" style="padding: 15px; background-color: gray">
            	<div class="thumbnail" style="padding: 15px">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="/backimg.jpg" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title"><?php echo e($galadarbaarticle->head); ?></h2>
                <p class="card-text"><?php echo e($galadarbaarticle->body); ?></p>
                <a href="/blogaieraksts/<?php echo e($galadarbaarticle->id); ?>" class="btn btn-primary">Go to Ieraksts</a>
              </div>
            </div>
		      </div>
          </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
  
 
		<!-- <div class="col-lg-4 col-md-6 col-sm-6" style="padding: 15px; background-color: gray">
			<div class="thumbnail" style="padding: 15px">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img_lights.jpg" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Article 3</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.</p>
                <a href="/blogaieraksts" class="btn btn-primary">Go to article</a>
              </div>
            </div>
		</div>
	</div> -->
		<!-- <div class="col-lg-4 col-md-6 col-sm-6" style="padding: 15px; background-color: gray">
			<div class="thumbnail" style="padding: 15px">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img_lights.jpg" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Article 4</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.</p>
                <a href="/blogaieraksts" class="btn btn-primary">Go to article</a>
              </div>
            </div>
		</div>
	</div> -->
		<!-- <div class="col-lg-4 col-md-6 col-sm-6" style="padding: 15px; background-color: gray">
			<div class="thumbnail" style="padding: 15px">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img_lights.jpg" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Article 5</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.</p>
                <a href="/blogaieraksts" class="btn btn-primary">Go to article</a>
              </div>
            </div>
		</div>
	</div> -->
		<!-- <div class="col-lg-4 col-md-6 col-sm-6" style="padding: 15px; background-color: gray">
			<div class="thumbnail" style="padding: 15px">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img_lights.jpg" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Article 6</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.</p>
                <a href="/blogaieraksts" class="btn btn-primary">Go to article</a>
              </div>
            </div>
		</div>
	</div> -->
		
	
	</div>
	</div>
</div>
<div class="postarticle">
<div class="container">

<h2 style="padding: 30px; text-decoration: underline; color: white; background-color: black; border-radius: 25px">Post your own article</h2>

<form method="POST">
<?php echo e(csrf_field()); ?>

  <h4 style="margin: 10px; color: white">Name of the article:</h4>
<input type="text" name="head" style="width: 240px">
<h4 style="margin: 10px; color: white">Write article:</h4>
<textarea name="body" class="form-control" id="bodytextarea" rows="10"></textarea>
<button style="margin: 20px" type="submit" class="btn btn-secondary">Add article</button>
</form>
</div>
</div>




  <footer style="background-color: black">
    <nav>
        <ul style="margin-bottom: 0px; padding-top: 10px">
            <li class="futeris" style="padding-left: 55px">
                <p>&copy; <?php echo @date("Y"); ?> Copyright</p>
            </li>
            <li class="futeris"  style="padding-left: 805px">
                <p>Developed by Linards Ramza</p>
            </li>
        </ul>
    </nav>
</footer>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
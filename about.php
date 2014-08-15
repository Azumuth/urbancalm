<!DOCTYPE html>
<html lang="en">
<!-- Php Head Begins -->
<?php include 'inc/head.inc.php';?>
<!-- Php Head Ends -->
<body>

  <!--About section-->
  <section>


   <?php include 'inc/logonav.inc.php';?>
   <?php include 'inc/js.inc.php';?>

   <div class ="container">

     <div class="row">
      <div class="col-md-6 col-md-push-11">
        <h1>About</h1>
      </div>
    </div>
    <div class="row" id="about">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Consequatur, ea nihil repellendus nulla placeat veritatis
          enim odio sunt corporis aliquid nobis distinctio rerum 
          in eaque quibusdam magnam voluptatem iste autem.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Consequatur, ea nihil repellendus nulla placeat veritatis
          enim odio sunt corporis aliquid nobis distinctio rerum 
          in eaque quibusdam magnam voluptatem iste autem.</p>              
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Consequatur, ea nihil repellendus nulla placeat veritatis
            enim odio sunt corporis aliquid nobis distinctio rerum 
            in eaque quibusdam magnam voluptatem iste autem.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Consequatur, ea nihil repellendus nulla placeat veritatis
            enim odio sunt corporis aliquid nobis distinctio rerum 
            in eaque quibusdam magnam voluptatem iste autem.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Consequatur, ea nihil repellendus nulla placeat veritatis
              enim odio sunt corporis aliquid nobis distinctio rerum 
              in eaque quibusdam magnam voluptatem iste autem.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Consequatur, ea nihil repellendus nulla placeat veritatis
              enim odio sunt corporis aliquid nobis distinctio rerum 
              in eaque quibusdam magnam voluptatem iste autem.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Consequatur, ea nihil repellendus nulla placeat veritatis
                enim odio sunt corporis aliquid nobis distinctio rerum 
                in eaque quibusdam magnam voluptatem iste autem.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Consequatur, ea nihil repellendus nulla placeat veritatis
                enim odio sunt corporis aliquid nobis distinctio rerum 
                in eaque quibusdam magnam voluptatem iste autem.</p>
              </div>
              <!-- Flower image -->
              <div class="col-md-4" id="flower">
                <img src="images/slide-1.png" class="img-responsive" alt="Urban calm logo">
              </div>
            </div>

          </section>
          <!--Owner biography section-->
          <section>
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-push-9">
                  <h1>Owner Biography</h1>
                </div>  
              </div>
              <div class="row"  id="owner">
                <div class="col-md-6 col-md-push-5">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                  Consequatur, ea nihil repellendus nulla placeat veritatis
                  enim odio sunt corporis aliquid nobis distinctio rerum 
                  in eaque quibusdam magnam voluptatem iste autem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                  Consequatur, ea nihil repellendus nulla placeat veritatis
                  enim odio sunt corporis aliquid nobis distinctio rerum 
                  in eaque quibusdam magnam voluptatem iste autem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                  Consequatur, ea nihil repellendus nulla placeat veritatis
                  enim odio sunt corporis aliquid nobis distinctio rerum 
                  in eaque quibusdam magnam voluptatem iste autem.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Consequatur, ea nihil repellendus nulla placeat veritatis
                    enim odio sunt corporis aliquid nobis distinctio rerum 
                    in eaque quibusdam magnam voluptatem iste autem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                      Consequatur, ea nihil repellendus nulla placeat veritatis
                      enim odio sunt corporis aliquid nobis distinctio rerum 
                      in eaque quibusdam magnam voluptatem iste autem.</p>
                    </div>
                    <!--Owner image -->
                    <div class="col-md-2 col-md-pull-5">
                     <img src="images/slider-2.jpg" class="img-circle sm" class="img-responsive" alt="Owner">
                   </div>
                 </div>

               </section>

               <!--Spiritual information-->
               <section>
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-md-push-8">
                      <h1>Spiritual Information</h1>
                    </div>
                  </div>
                  <div class="row" id="spiritual">
                    <div class="col-md-6 col-md-push-1">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Consequatur, ea nihil repellendus nulla placeat veritatis
                        enim odio sunt corporis aliquid nobis distinctio rerum 
                        in eaque quibusdam magnam voluptatem iste autem.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                          Consequatur, ea nihil repellendus nulla placeat veritatis
                          enim odio sunt corporis aliquid nobis distinctio rerum 
                          in eaque quibusdam magnam voluptatem iste autem.</p>
                          <h2>Testimonial:  "Lorem ipsum dolor sit amet, consectetur 
                            adipisicing elit. Consequatur, ea nihil repellendus nulla
                            placeat veritatis enim odio sunt corporis aliquid nobis 
                            distinctio rerum in eaque quibusdam magnam voluptatem 
                            iste autem."</h2>
                          </div>
                          <div class="col-md-6 col-md-push-1">
                            <img src ="images/yoga-dunedin-imageb.jpg" class="img-circle" class="img-responsive" alt="Yogo Dunedin image">
                          </div>
                        </div>
                        <!-- Spiritual image -->

                      </section>











                      <script>
                      $(window).load(function(){
      //This 'body' jQuery will only load the fully rendered page when it is ready with js.  
      $('body').show();
      // nivoSlider instructions
      $('#slider').nivoSlider({
        effect: 'fade',
        animSpeed: 3000,
        pauseTime: 8000,
        directionNav: false,
        controlNav: false 
      });
    });
                      </script>
                    </body>
                    </html>

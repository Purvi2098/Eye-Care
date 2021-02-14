




<div class="wrapper">


<?php  

$Lnd=$_POST['lat'];
$long=$_POST['long'];

echo $Lnd . $long;

#include 'header.php';

 ?>




<!--=================================
 search-no-result-->

<section class="page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="search-no-result text-left text-sm-center clearfix position-relative">
          <div class="bg-title">
            <h2>oops</h2>
          </div>
          <div class="search-icon d-inline-block mr-30 mr-sm-40 position-relative theme-color">
            <i class="fa fa-search"></i>
          </div>
          <div class="search-contant d-inline-block text-left position-relative mt-20 mt-sm-0">
            <h2 class="theme-color">Nothing was found</h2>
            <p>Perhaps searching, or one of the links below, can help.</p>
            <div class="error-info mt-30">
              <a class="button xs-mb-10" href="dashboard.php">back to home</a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-6">
            <div class="no-result-search widget-search my-0 my-md-5">
              <i class="fa fa-search"></i>
              <input type="search" class="form-control border bg-white" placeholder="Search....">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

<!--=================================
 search-no-result-->


<?php include 'footer.php'; ?>

</div>




</body>

</html>

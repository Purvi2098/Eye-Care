<?php
session_start(); 
include'conetDB.php';
$id=$_SESSION['patientid'];
$t="0";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>FAQ</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="css/plugins-css.css" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="css/typography.css" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="#" data-style="styles"/>
<link rel="stylesheet" type="text/css" href="css/style-customizer.css" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-557RCPW');</script>
<!-- End Google Tag Manager -->

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="wrapper">

<header id="header" class="header transparent">

<!--=================================
 mega menu -->
 <div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 xs-mb-10">
        <div class="topbar-call text-center text-md-left">
          <ul>
            <li><i class="fa fa-envelope-o theme-color"></i> 17bmiit025@gmail.com</li>
             <li><i class="fa fa-phone"></i> <a href="tel:+7874126261"> <span>+91 7874126261 </span> </a> </li>
          </ul>
        </div>
      </div>
     
     </div>
  </div>
</div>

<div class="menu">
  <!-- menu start -->
   <nav id="menu" class="mega-menu menuFullWidth">
    <!-- menu list items container -->
    <section class="menu-list-items" style="height: 90px;">
     <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12">
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a><img id="l" src="images/logo.png" alt="Logo"> </a>
            <div class="menu-mobile-collapse-trigger"><span></span></div></li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">

         <ul class="menu-links" style="display: none; max-height: 400px; overflow: auto;">
         
         <li class="hoverTrigger active"><a href="dashboad.php">Home <div class="mobileTriggerButton"></div></a>    
         </li>


           <li class="hoverTrigger"><a href="javascript:void(0)">Treatments <i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                    <li class="hoverTrigger"><a href="Booking.php">General Checkup<div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="Cataract.php">Cataract surgery <div class="mobileTriggerButton"></div></a>   
                    </li>

                    <li class="hoverTrigger"><a href="retina.php">Retina surgery <div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="glaucoma.php">Glaucoma surgery <div class="mobileTriggerButton"></div></a>
                    </li>

                    
                </ul>
            </li>

           

            <li class="hoverTrigger"><a href="javascript:void(0)">Doctor <i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                  <?php  
                  $sSQl="SELECT  `DoctorName`,`DoctorID` FROM `doctor`";
                   if ($result = $con->query($sSQl)) {    
                       while ($row = $result->fetch_assoc()) { 
                         ?>
                    <li class="hoverTrigger"><a href="doctorProfile.php?name=<?php echo $row['DoctorName']; ?>&ID=<?php echo $row['DoctorID'] ?>">Dr. 
                    <?php echo $row['DoctorName']; 
                  ?> <div class="mobileTriggerButton"></div></a>
                    </li>
                    <?php  }
                    } ?>
                </ul>
            </li>

            <li class="hoverTrigger"><a href="javascript:void(0)">Patient Care<i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-side effect-expand-top" style="transition: all 400ms ease 0s;">

                    <li class="hoverTrigger"><a href="appointmentDetail.php">Appointment details<div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="orderDetail.php">Order detail <div class="mobileTriggerButton"></div></a>
                    </li>
                    
                    <li class="hoverTrigger"><a href="Prescription.php">Prescription <div class="mobileTriggerButton"></div></a>
                   </li>
  
                 </ul>
            </li>
      
            <li class="hoverTrigger"><a href="javascript:void(0)">EYEWEAR <i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                <li class="hoverTrigger"><a href="shopping.php">All Product<div class="mobileTriggerButton"></div></a>
                    </li>
                  <?php  
                  $sSQl="SELECT  * FROM `category`";
                   if ($result = $con->query($sSQl)) {    
                       while ($row = $result->fetch_assoc()) { 
                         ?>
                    <li class="hoverTrigger"><a href="SProduct.php?category=<?php echo $row['CategoryName']; ?>&ID=<?php echo $row
                    ['CategoryID']; ?>"> 
                    <?php echo $row['CategoryName']; ?>
                    <div class="mobileTriggerButton"></div>
                    </a>
                    </li>

                    <?php  }
                    } ?>
                </ul>
            </li>



             <li class="hoverTrigger"><a href="testimonial.php">testimonial<div class="mobileTriggerButton"></div></a>
             </li>

             <li class="hoverTrigger"><a href="javascript:void(0)">Contact <i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                    <li class="hoverTrigger"><a href="contact.php">Contact Us<div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="feedback.php">Feedback <div class="mobileTriggerButton"></div></a>
                      
                    </li>
                    
                    <li class="hoverTrigger"><a href="FAQ.php">FAQ <div class="mobileTriggerButton"></div></a>
                    </li>
                   
                </ul>
            </li>

             <li class="hoverTrigger"><a href="javascript:void(0)"><i class="fa fa-cogs"></i><div class="mobileTriggerButton"></div></a>
              <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                    <li class="hoverTrigger"><a href="changepassword.php">Change Password<div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="profile.php">Update profile<div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="logout.php">Log Out <div class="mobileTriggerButton"></div></a></li>
    
                </ul>
             </li>

            <li class="hoverTrigger"><a href="javascript:void(0)"><i class="fa fa-search"></i><div class="mobileTriggerButton"></div></a>
              <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                   <!--   <form action="#">
                  <input type="text"  class="form-control" name="search" placeholder="Search.." value="" >
                  <button class="btn search-button" type="submit" value="Search"> <i class="fa fa-search not-click"></i></button>
                </form> -->
                </ul>
             </li>



          <li>
           <div class="shpping-cart">
           <a class="cart-btn" href="#"> <i class="fa fa-shopping-cart icon"></i><strong class="item" style="background-color: #D8F8A6; color: black;"> <?php 
         $sql="SELECT count(*) As total FROM `add_to_cart` WHERE PatientID='".$id."'";
  
      if ($result = $con->query($sql)) {    
     while ($row = $result->fetch_object()) {

       echo $row->total;
        
    }
    $result->close();
  }
    ?></strong></a>
            <div class="cart">
              <div class="cart-title">
                 <h6 class="uppercase mb-0">Shopping cart</h6>
              </div>

              <?php  


                  $sSQl="SELECT p.ProductName,p.Image,p.Cost,a.ProductID,a.Quantity FROM add_to_cart a,product p WHERE a.ProductID=p.ProductID AND a.PatientID='".$id."'";
                   if ($result = $con->query($sSQl)) {    
                       while ($row = $result->fetch_assoc()) { 
              ?>
              <div class="cart-item">
                <div class="cart-image">
                  <img class="img-fluid" src="Admin/uploads/<?php echo $row['Image']; ?>" alt="">
                </div>
                <div class="cart-name clearfix">
                  <a href="#"><?php echo $row['ProductName'] ?><strong><?php echo $row['Quantity']; 
                  ?></strong> </a>
                  <div class="cart-price">
                   <ins>Rs. <?php echo $row['Cost']; ?></ins>
                 </div>
                </div>
                <div class="cart-close">
                    <a href="#"> <i class="fa fa-times-circle"></i> </a>
                 </div>
              </div> 
                <?php  
                  $cost= $row['Cost'];
                  $Quantity=$row['Quantity'];
                  $sum=$cost * $Quantity;
                  
                  $t+=$sum;
              }
                    } 

                    ?>

              <div class="cart-total">
                <h6 class="mb-15"> Total:<?php echo $t;?></h6>
                <a class="button black" href="Checkout.php">Checkout</a>
              </div>
            </div>
          </div>
           </li>


        </ul>
        
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>                  

<section class="page-section-ptb" data-jarallax='{"speed": 0.6}' style="background: url(images/bg/05.jpg); height: 450px; width: 100%">
  <div class="container">
  </div>
</section>



                            
<!--=================================
 faq-->

<section class="faq white-bg page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
       <div class="col-lg-8">
        <div class="section-title text-center">
            <h6>Have a question?</h6>
            <h2 class="title-effect">Frequently Asked Questions</h2>
            <p>why the sky's the limit when using our website.</p>
          </div>
      </div>
    </div>

     <div class="row">
       <div class="col-lg-12 col-md-12">
        <div class="tab nav-center">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="research-tab" data-toggle="tab" href="#research" role="tab" aria-controls="research" aria-selected="true">  General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false"> Retina </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="develop-tab" data-toggle="tab" href="#develop" role="tab" aria-controls="develop" aria-selected="false"> Cataract </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="result-tab" data-toggle="tab" href="#result" role="tab" aria-controls="result" aria-selected="false">  Glaucoma </a>
            </li>
            
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="research" role="tabpanel" aria-labelledby="research-tab">
             <div class="accordion accordion-border mb-30">
                <div class="acd-group acd-active">
                <a href="#" class="acd-heading acd-active">01. How to take care of vision ?</a>
                  <div class="acd-des">
                      <p>Everyone should have a regular dilated exam every year or two, and a dilated exam annually after age 60, according to the American Optometric Association (AOA). Between routine visits, you can take these essential steps which may maintain or improve your vision:</p>
                      <ul class="list list-mark mt-20">
                      <li>Eat at least 5 servings daily of fruits and vegetables.</li>
                      <li>Don't Smoke.</li>
                      <li>Take regular breaks while doing computer work and other tasks that mostly involve your eyes.</li>
                      <li>Wear your glasses. This sounds obvious, but many people with low to moderate vision loss leave them at home or tucked in a pocket or purse because of vanity or forgetfulness.</li>
                      <li>Wear sunglasses when out of doors. Wear sunglasses that protect your eyes from UVA and UVB rays. Wear them even on cloudy days.</li>
                      <li>Closely follow the recommended schedule for cleaning and wearing contact lenses.</li>
                      <li>If you have high blood pressure, high cholesterol, or diabetes, make sure these conditions are under control.</li>
                      </ul>
                  </div>
              </div>

              <div class="acd-group">
                <a href="#" class="acd-heading">02. What need to be perfomed in case of Itchy, burning or red eyes?</a>
                    <div class="acd-des">
                    <p>These symptoms can result from dry eye conditions common after age 50, or from high mucous production in allergy-prone contact lens wearers. Using artificial tears may help with dry eye. Some allergy sufferers can get some help from switching to disposable or daily wear lenses. Contact lens wearers and adults older than 50 with these symptoms should consult an eye care professional for appropriate treatment.</p>
                      
                </div>
              </div>

              <div class="acd-group">
              <a href="#" class="acd-heading">03. What are main category of eye professional?</a>
                <div class="acd-des">
                  <p>These are the main categories of eye professionals: </p>
                  <ul class="list list-mark mt-20">
                  <li>Opticians. They distribute glasses and do not diagnose eye problems.
                  </li>
                  <li>
Optometrists. These are eye healthcare providers who do eye exams and diagnose eye disease. They prescribe glasses and contact lenses and prescribe eye medicines to treat diseases.</li><li>

Ophthalmologists. These are medical doctors who diagnose and treat diseases that affect the eyes. And they do surgery. These healthcare providers may also provide routine vision care services like prescribing glasses and contact lenses.</li><li>

Primary care providers. Sometimes an eye problem is part of a general health problem. In these situations, your primary care provider should also be involved.</li>
                </ul>
                </div>
              </div>

              <div class="acd-group">
                  <a href="#" class="acd-heading">04. which symptoms shows that once need to see doctor?</a>
                  <div class="acd-des">
                    <p>These symptoms mean you should see an eye care professional soon: </p>
                    <ul class="list list-mark mt-20">
                    <li>Trouble seeing objects on the sides of your visual field</li>
                    <li>Trouble seeing at night or reading.</li>
                    <li>Objects are less sharp.</li>

<li>Trouble telling the difference between colors.</li>

<li>Blurring of objects that are far away or near.</li>

<li>Itching or fluid from your eye.</li>
                  </ul>
                  </div>
              </div>
              </div>
            </div>


            <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
              <div class="accordion accordion-border mb-30">
              <div class="acd-group acd-active">
              <a href="#" class="acd-heading acd-active">01. What is anti-VEGF treatment?</a>
              <div class="acd-des">
                  <p>Anti-VEGF treatment is a way to slow vision loss in people with conditions like wet form of AMD (Age related Macular Degeneration), CNVM (Choroidal Neo Vascular Membrane), Severe Diabetic Retinopathy, Macular Edema (swelling), Vascular Blocks, Neovascular Glaucoma (NVG), Vitreous Hemorrhage, etc. These retinal diseases, which were earlier considered incurable, or had very poor results with existing treatments are now being tackled with good results with these anti-VEGF agents. </p>
                    
                  </div>
              </div>

              <div class="acd-group">
              <a href="#" class="acd-heading">02. How will i know id Anti-VEFG treatment is regired or not?</a>
              <div class="acd-des">
                  <p>our ophthalmologist will determine if the treatment is appropriate for you. In some cases, your ophthalmologist may recommend combining anti-VEGF treatment with other therapies. For instance, some patients also receive photodynamic laser therapy. With this treatment, a special drug is injected into the veins in your arm, where it flows to your macula. Your ophthalmologist uses a special laser to activate this drug in order to close abnormal blood vessels in the macula. The treatment that's right for you will depend on the specific condition of your retina. As of now, there are three injections available with us for treatment. These are Lucentis, Avastin and Macugen. These injections are given inside the eye. The procedure is a very small one, but is performed inside the operation theatre to maintain the strict asepsis. The patient is discharged within 10-15 minutes of the procedure, and can resume his/her normal activities immediately. </p>
                      
                  </div>
              </div>

              <div class="acd-group">
              <a href="#" class="acd-heading">03. What are risk facotr? </a>
              <div class="acd-des">
                  <p>These are risks involed in Anti-VEGF therapy: </p>
                      <ul class="list list-mark mt-20">
                      <li>Retinal detachment may be caused by a number of factors ranging from a physiological weakness of the retina to a positive family history. 
                      </li>
                      <li>The risk of spontaneous retinal tears and detachments increase as we grow older.
                      </li>
                      <li> Nearsighted individuals are at an increased risk for retinal tears and detachments. 
                      </li>
                      <li>Persons who have had cataract surgery or have experienced a blow to the head or injury to the eye are also at risk for retinal tears or detachments. </li>
                      <li>If you have had a retinal detachment in one eye, you are at increased risk of developing one in the other eye.
                       But there is only about a one in ten chance of this happening. 
                       </li>
                       <li>
                       Retinal detachments do not happen as a result of straining your eyes, bending or heavy lifting. 
                       </li>
                       <li>
                       Retinal detachments in general are quite uncommon however and only about one person in ten thousand is affected.
                     </li>
                      </ul>
                  </div>
              </div>

              <div class="acd-group">
              <a href="#" class="acd-heading">04. What are prevention taken with retina detachment?</a>
                <div class="acd-des">
                    <p>If your family has a history of retinal detachment, or your doctor determines that you are at risk, it is important that you be familiar with the signs and symptoms of this condition and that you have regular and complete eye examinations.
                      <br>
Awareness of the symptoms of a PVD is the critical first step in preventing a retinal detachment. If you have new symptoms of a PVD (floaters, flashes, shower of spots) it is important to have a prompt and very thorough examination of the retina and its periphery to search for any retinal tears. If a retinal break can be discovered before a retinal detachment develops it can be treated with the laser to seal the break and prevent a retinal detachment. Fortunately the great majority of PVDs do not cause a retinal tear and not all retinal tears will lead to a detachment. In general, though, if a tear is associated with a symptomatic PVD it is at high risk for leading to a retinal detachment and should be treated. </p>
                    </div>
                </div>
              </div>
            </div>


            <div class="tab-pane fade" id="develop" role="tabpanel" aria-labelledby="develop-tab">
              <div class="accordion accordion-border mb-30">
                <div class="acd-group acd-active">
                  <a href="#" class="acd-heading acd-active">01. What is cataract?</a>
                  <div class="acd-des">
                  <p>Contrary to popular belief, a cataract is not a "film" over the eye. Rather it is a gradual opacification of the lens that causes the lens to become so clouded that light is either distorted or cannot reach the back of the eye (the retina) Retina: The transmitter located at the back of your eye that sends the images to your brain. </p>
                    
                </div>
              </div>

              <div class="acd-group">
              <a href="#" class="acd-heading">02. Does lasers are involved in operation? </a>
                  <div class="acd-des">
                  <p>YAG lasers are used in a later procedure to create a clear opening in the lens-containing membrane, if the membrane becomes cloudy in the months following the original cataract removal.
                    <br>
Also, "laser-assisted" cataract surgery does exist in a few centers. The technology is in its developmental stage and has not yet attained the popularity of non-laser cataract surgery techniques currently performed by the vast majority of cataract surgeons. </p>
                    
                </div>
              </div>

              <div class="acd-group">
              <a href="#" class="acd-heading">03. What are its symptoms?</a>
              <div class="acd-des">
              <p>Cataracts typically cause no symptoms until they have grown large enough to interfere significantly with the passage of light through the lens. Once symptoms of cataracts develop, they may include: </p>
              <ul class="list list-mark mt-20">
              <li>cloudy or blurry vision</li>
<li>double vision (diplopia)</li>
<li>a sense that colors appear faded</li>
<li>seeing halos around lights</li>
<li>an increased sensitivity to glare</li>
<li>a distortion of vision that makes objects appear as if you're looking at them through a veil.</li>
<br>
<p>Age-related cataracts develop very slowly and painlessly. In fact, you may not even realize that your vision is changing until you find yourself going to the eye doctor seeking a change in your eyeglass or contact lens prescription.</p>
              </ul>
              </div>
              </div>

              <div class="acd-group">
              <a href="#" class="acd-heading">04. What causes cataract?</a>
              <div class="acd-des">
              <p>Many things can cause a cataract to form, the most common being the natural aging process. As the lens of your eye ages, it gradually thickens and yellows, eventually becoming so cloudy that you are said to have a "cataract." Other diseases, like diabetes Diabetes: A disease in which the body does not produce enough, or properly use, the hormone insulin, Glaucoma: An eye disease that develops when too much pressure inside the eye damages the optic nerve due to the slow drainage of eye fluid through the eye's trabecular meshwork. Without treatment, Glaucoma can cause permanent blindness within just a few years. Symptoms include halos around lights, tunnel vision and vision loss. Glaucoma is most often treated with medications designed to reduce intraocular pressure. Some of these can increase the chances of developing cataracts. Eye injuries and chronic use of corticosteroids Corticosteroids: A class of steroid hormones used to treat a variety of conditions. Chronic use may lead to the formation of posterior subcapsular cataracts.
<br><br>
In many cases, cataracts are age-related, appearing first when a person is in his or her 40s or 50s, but not affecting vision until after age 60. In other cases, cataracts may be related to eye trauma, long-term diabetes, corticosteroid medications or radiation treatments. In infants, cataracts may be congenital (present since birth), occurring as a result of an infection that happened during pregnancy, especially toxoplasmosis, cytomegalovirus, syphilis, rubella or herpes simplex. In infants and young children, cataracts may also be one symptom of a metabolic disease affecting the body's processing of carbohydrates, amino acids, calcium or copper.
<br><br>
Cataracts are the world's leading cause of blindness, accounting for approximately 42 percent of all cases of blindness in all nations. In the United States, most cataracts are age-related, affecting more than half of all Americans older than 65 to some degree. Although the exact cause of age-related cataracts is still being investigated, some scientists suspect that this disorder is linked to chemical changes affecting a class of eye proteins called alpha-crystallins. Current research suggests that alpha-crystallins act as chemical "chaperones," which prevent the abnormal clumping of other types of proteins into cataracts. Inactivation of alpha-crystallins due to age-related exposure to oxidizing agents or ultraviolet light, or to very high levels of blood sugar (in diabetics), may make it possible for cataracts to form.</p>
              
              </div>
              </div>
              </div>
            </div>


            <div class="tab-pane fade" id="result" role="tabpanel" aria-labelledby="result-tab">
              <div class="accordion accordion-border mb-30">
              <div class="acd-group acd-active">
              <a href="#" class="acd-heading acd-active">01. Is Glaucoma curable?</a>
              <div class="acd-des">
              <p>Vision loss from Glaucoma cannot be reversed. Routine eye exams are essential to discover Glaucoma early and begin Glaucoma treatment before significant vision loss has occurred.</p>
              
              </div>
              </div>

              <div class="acd-group">
              <a href="#" class="acd-heading">02. if i am found to have Gluacoma how will it be treated?</a>
              <div class="acd-des">
              <p>Generally, eye drops can be prescribed to help lower the pressure in the eye. These drops must be used daily to have optimal effect, and continued for the rest of your life. It is not uncommon to be prescribed more than one type of drop to be used at the same time.</p>
              
              </div>
              </div>
              

              </div>
            </div>

            
          </div>
       </div>
       </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center mt-40">
           <h6 class="theme-color"> If you do not find the answer to your question listed within our FAQ's, you can always contact us directly at 
            <a class="theme-color" href="contact.php"> <button type="submit" class="button icon"> Contact Us</button></a> </h6>
        </div>
     </div>
  </div>
</section>

<!--=================================
 faq-->


</div>

<?php include'footer.php'; ?>

</body>

</html>

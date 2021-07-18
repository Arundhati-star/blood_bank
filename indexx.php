<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Bank</title>
     <?php include 'link.php' ?>
     <style>
    <?php include 'css/style.css' ?>
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand font-weight-bold text-danger" href="#">Blood Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blood Banks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Request Blood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Current Requests</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success ml-2 font-weight-bold" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/blood.jpg" alt="blood partner" width="1100" height="500">
      <div class="carousel-caption">
        <h3 class=" text-danger font-weight-bold">Blood Partner</h3>
        <p class="text-success font-weight-bold">Rejoice at every oppourtunity to make a desrving person</p>
        <button type="button" class="btn btn-warning"> <a href="signuppVisitor.php"  style="text-decoration:none;color: #00376b;">Donors Register Now!</a></button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/BloodBank.jpg" alt="blood bank" width="1100" height="500">
      <div class="carousel-caption">
        <h3  class=" text-danger font-weight-bold">Blood Bank</h3>
        <p class="text-warning font-weight-bold">I wish that each of respond</p>
        <p class="text-warning font-weight-bold">joyfully to call a "call for sharing blood" if time</p>
        <p class="text-warning font-weight-bold">and convenience permits</p>
         <button type="button" class="btn btn-warning"> <a href="signuppVisitor.php"  style="text-decoration:none;color: #00376b;">Donors Register Now!</a></button>
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/bloodbank1.jpg" alt="blood" width="1100" height="500">
      <div class="carousel-caption">
          <h3  class=" text-danger font-weight-bold">Blood Bank</h3>
        <p class="text-warning font-weight-bold">give blood give life</p>
         <button type="button" class="btn btn-warning"> <a href="signuppVisitor.php"  style="text-decoration:none;color: #00376b;">Donors Register Now!</a></button>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">About Us</h3>
</div>
<div class="container-fluid">
 <div class="row">
     <div class="col-lg-6 col-md-6 col-12">
         <img src="images/Blood-Bank.jpg"  class="img-fluid my-4" height="110" >
</div>
<div class="col-lg-6 col-md-6 col-12">
  <div class="pull-right">
         <h2 class="text-danger font-weight-bold pull-right ml-2 my-4">Blood Bank</h2>
         <p  class="text-info my-5 font-weight-bold pull-right">A blood bank is a center where blood gathered as a result of blood donation is stored and preserved for later use in blood transfusion. The term "blood bank" typically refers to a division of a hospital where the storage of blood product occurs and where proper testing is performed (to reduce the risk of transfusion related adverse events). However, it sometimes refers to a collection center, and some hospitals also perform collection. Blood banking includes tasks related to blood collection, processing, testing, separation, and storage.We celebrate World Blood Donor Day on 14 June every year. It was established across the countries in 2004, to spread the awareness for need to donate blood and thank the blood donors for their selfless work. </p>
         <ul style="list-style:none;mb-8;">
           <li class="text-danger font-weight-bold pull-right mb-3">
              Be a hero, A real hero in someone’s life.
</li>
           <li class="text-danger font-weight-bold pull-right">
              <!-- Actual awareness and right information can really benefit both the donor and recipient. -->
               <button type="button" class="btn btn-danger">Join Us!</button>

</li>

</ul>
</div>
</div>

</div>
</div>

</section>
<section class="my-5">
<div class="py-5">
  <div class="container-fluid">
               <div class="col-md-12 align add-bg">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="col-md-3 ">
                        <img src="https://indianbloodbank.com/public/images/add-icon.png">
                     </div>
                            <div class="col-md-6">
                        <h4>
                        27</h4>
                        <p>blood doners</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="col-md-3">
                        <img src="https://indianbloodbank.com/public/images/add-icon1.png">
                     </div>
                     <div class="col-md-6">
                        <h4>
                        61</h4>
                        <p>blood requests</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="col-md-3">
                        <img src="https://indianbloodbank.com/public/images/add-icon2.png">
                     </div>
                     <div class="col-md-6">
                        <h4>
                        10</h4>
                        <p>Active doners</p>
                     </div>
                  </div>
               </div> 
            </div>
</div>
</div>
</section>
<section class="my-5">

  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width:400">
  <img class="card-img-top" src="images/2019.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Why Donate blood?</h4>
    <p class="card-text">Blood is the part of life that is given to those who need it by those who have the resource to satisfy the need. The love of fellow human and a desire to share something of oneself is what singles out a blood donor from the others. Emergencies occur every minute. For each patient requiring blood, it is an emergency and the patients could have set back if blood is not available.Your blood donation is special</p>
    <a href="why.php" class="btn btn-primary mt-2">Know More</a>
  </div>
</div>

</div>
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width:400">
  <img class="card-img-top" src="images/img.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Who needs blood?</h4>
    <p class="card-text">Under normal circumstances, every two seconds someone needs a blood transfusion. Blood transfusions are used for trauma victims - due to accidents and burns - heart surgery, organ transplants, women with complications during childbirth, newborns and premature babies, and patients receiving treatment for leukemia, cancer or other diseases.</p>
    <a href="who.php" class="btn btn-primary">Know More</a>
  </div>
</div>

</div>
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width:400">
  <img class="card-img-top" src="images/bloodbank1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Most needed blood</h4>
    <p class="card-text">All blood types are needed. Common blood types are needed because there are many patients with them. Less common blood types are needed because there are fewer donors to give them. However, people with O- blood are particularly in demand because they are the "universal donor." It means that people of all blood types can receive O- blood safely, so it is used during life-threatening emergencies when the matching blood type is in short supply. AB types are universal recipients.</p>
    <a href="most.php" class="btn btn-primary">Know More</a>
  </div>
</div>

</div>
</div>
</div>

</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Our Users</h3>
</div>
<div class="container-fluid">
 <div class="row">
     <div class="col-lg-6 col-md-6 col-12">
            <div class="card" style="width:400">
  <img class="card-img-top" src="images/bloodbank1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Hospital Staff</h4>
    <a href="login.php" class="btn btn-primary">Hospital Login!</a>
  </div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
             <div class="card" style="width:400">
  <img class="card-img-top" src="images/bloodbank1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Receivers</h4>
    <a href="loginVisitor.php" class="btn btn-primary">Receivers Login!</a>
  </div>
</div>
</div>

</div>
</div>

</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Blood Samples</h3>
</div>
<div class="container-fluid">
 <div class="row">
     <div class="col-lg-8 col-md-8 col-12 mx-auto">
            <div class="card" style="width:150">
  <img class="card-img-top" src="images/BloodBank.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Available blood Samples</h4>
    <a href="tabl.php" class="btn btn-primary">Click here to know!</a>
  </div>
</div>
</div>
</div>
</div>

</section>
<section class="mt-5">
<div class="container-fluid">
 <div class="row">
     <div class="col-lg-12 col-md-12 col-12 ">

           <div class="alert alert-success py-5">
        <h3 class="text-center"> All content copyright © Blood Bank. All rights reserved.</h3>
</div>
        
</div>

</div>
</div>
</div>

</section>
</body>
</html>
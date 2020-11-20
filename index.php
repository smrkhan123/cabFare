<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cab fare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
</head>

<body>
  <div id="wrapper">
    <!-- Header Section -->

    <header>
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="logo.png" width="100" alt="CedCab" class="logoimage"></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#main">Book Cab</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Main Section/ Landing Page -->

    <section id="main">
      <div style="position: relative;">
        <img src="a.jpg" class='bg' alt="">
        <div class="container content">
          <div class="heading"></div>
          <h1 class="heading1">Book a Taxi to a destination in a Town</h1>
          <p class="para1">Choose from range, categories and prices</p>
          <div class="row">
            <div class="col-sm-12 col-md-1 col-lg-1"></div>
            <div class="col-sm-12 col-md-5 col-lg-5">
              <div class="formlogo">
                <center><img src="logo.png" width="100" alt="CedCab"></center>
              </div>
              <h3 class="heading3"><strong>Your Everyday travel Partner</strong></h3>
              <p class="para2">AC Cabs for time to time travel</p>
              <form class="form-horizontal myform" action="#">
                <div class="form-group ">
                  <!-- <label class="control-label col-sm-2" for="pickup">PickUp</label> -->
                  <div class="col-sm-10">
                    <select name="pickup" id="pickup" class="form-control" onchange="loc()">
                      <option value="">Select Your Pickup Location</option>
                      <option value="charbagh">Charbagh</option>
                      <option value="indiranagar">Indira Nagar </option>
                      <option value="bbd">BBD</option>
                      <option value="barabanki">Barabanki</option>
                      <option value="faizabad">Faizabad</option>
                      <option value="basti">Basti</option>
                      <option value="gorakhpur">Gorakhpur</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <!-- <label class="control-label col-sm-2" for="pickup">PickUp</label> -->
                  <div class="col-sm-10">
                    <select name="drop" id="drop" class="form-control" onchange="droploc()">
                      <option value="">Select Your Drop Location</option>
                      <option value="charbagh">Charbagh</option>
                      <option value="indiranagar">Indira Nagar </option>
                      <option value="bbd">BBD</option>
                      <option value="barabanki">Barabanki</option>
                      <option value="faizabad">Faizabad</option>
                      <option value="basti">Basti</option>
                      <option value="gorakhpur">Gorakhpur</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <!-- <label class="control-label col-sm-2" for="pickup">PickUp</label> -->
                  <div class="col-sm-10">
                    <select name="cab_type" id="cab_type" class="form-control" onchange="cabType()">
                      <option value="">Drop Down To Select Cab Type</option>
                      <option value="cedmicro">CedMicro</option>
                      <option value="cedmini">CedMini</option>
                      <option value="cedroyal">CedRoyal</option>
                      <option value="cedsuv">CedSuv</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <!-- <label class="control-label col-sm-2" for="pickup">PickUp</label> -->
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="luggage" placeholder="Enter Weight In KG">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" id="calculatedFare" class="btn btn-default form-control sub_btn" onclick="farecalc()">Calculate Fare</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6"></div>
          </div>
        </div>
      </div>
      <div class="bg_overlay"></div>
  </div>

  </section>
  <footer>
    <div class="sect10">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 socialIcons text-center">
            <img src="logo.png" width="100" alt="CedCab">
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 socialIcons text-center">
            <!-- <i class="fa fa-facebook" aria-hidden="true"></i>
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                      <i class="fa fa-instagram" aria-hidden="true"></i> -->
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 socialIcons text-center links">
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Help</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <p class="footer_cp">Designed & Developed By Sameer Khan</p>
    </div>
  </footer>
  </div>
  <script src="app.js"></script>
</body>

</html>
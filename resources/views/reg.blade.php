
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
        <form class="form-login" action="{{route('reg')}}" method="post" enctype='multipart/form-data'>
         @if(Session::has('message'))
           <div class="bg-danger"><h2 style="text-align: center;text-transform: capitalize;color:black;font-weight: bolder;background: rgb(246,248,252);
background: rgb(5,41,3);
background: linear-gradient(150deg, rgba(5,41,3,1) 0%, rgba(61,228,55,1) 3%, rgba(28,180,19,1) 94%); " >
                   {{Session::get('message')}}</h2></div>
           @endif
        <h2 class="form-login-heading">Registration</h2>
        <div class="login-wrap">
              <img id="myimg" alt="" width="100" height="100" style="display:none;margin: auto;border-radius: 50%">

            <input type="text" class="form-control" name="username" placeholder="User Name" autofocus required>
            <input type="hidden" class="form-control" name="_token"  value="<?php echo csrf_token() ?>">
         <br>
          <input type="email" class="form-control" name="useremail" placeholder="email"  autocomplete="false" required>
          <br>
          <input type="password" class="form-control" name="userpassword" placeholder="Password"  autocomplete="false">
      
          
      
          <br>
          <input type="file" onchange="previewimage(this)"class="form-control" name="image_url" placeholder="Image " required>
      
          <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> Confirm Registration</button>
          <hr>
        
          <div class="registration">
            Already have an account?<br/>
            <a class="" href="{{route('login')}}">
             Log In
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
  <script>
  function previewimage(thise)
  {
   document.getElementById('myimg').style.display="block";
   document.getElementById('myimg').src = window.URL.createObjectURL(thise.files[0])   
  }
  </script>
</body>

</html>

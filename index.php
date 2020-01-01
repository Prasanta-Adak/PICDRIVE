<head>
<link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="style/animate.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="./js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nixie+One&display=swap" rel="stylesheet">
    <script src="js/ajax_random_password.js"></script>
    <script src="js/ajax_user_check.js"></script>
    <script src="js/index.js"></script>
    <script src="js/ajax_sign_up.js"></script>
    <script src="js/ajax_activator.js"></script>
    <script src="js/ajax_login.js"></script>
</head>
<body style="background:#FCD0CF;" class="animated fadeIn slower">
    <div class="container-fluid">
    <div class="row">
    
    <div class="col-md-4 p-0">
    <img src="images/main_pic.jpg" alt="mainpic" class="shadow-lg w-100">
    </div>

    <div class="col-md-4 px-5 py-4">
    <h3 class="ml-2 mb-3">SIGN UP</h3>
    <form autocomplete="off" id="signup-form">
    <input type="text" name="fullname" id="fullname" placeholder="ENTER YOYR NAME" required="required">
    
    <div class="email-box">
    <input type="email" name="email" id="email" placeholder="ENTER YOUR EMAIL" required=required>
    <i class="fa fa-circle-o-notch fa-spin d-none email-loader"></i>
    </div>

    <div class="password-box">
    <input type="password" name="password" id="password" placeholder="PASSWORD" required="required">
    <i class="fa fa-eye show-icon"></i>
    </div>


    <button class="btn float-left py-2">CLICK GENERATE TO IMPROVE SECURITY</button>
    <button class="btn float-right generate-btn">GENERATE</button>
    <button class="btn submit-btn m-3" type="submit" disabled="disabled">Register Now</button>
    
    <div class="signup-notice"></div>
    
    </form>

<div class="px-2 d-none activator">
<span>Please check your email to get activation code</span>
<input type="text" name="code" id="code" class="my-3" placeholder="Activation code">
<button class="btn btn-dark activate-btn">Activate Now</button>
</div>

    </div>

   <div class="col-md-4 px-5 py-4">
   <h3 class="ml-2 mb-3">LOGIN</h3>
   <form autocomplete="off" id="login-form">
   <div class="email-box">
    <input type="email" name="email" id="login-email" placeholder="USERNAME" required="required">
    
    </div>

    <div class="password-box">
    <input type="password" name="password" id="login-password" placeholder="PASSWORD" required="required">
    <i class="fa fa-eye login-show-icon" style="position: absolute;
        top: 30%;
        right: 15px;
        color: #ccc;
        z-index: 1;
        cursor: pointer;
        font-size:15px;"></i>
    </div>
   
    <button class="btn login-submit-btn float-right" type="submit" style="background-color: black !important; 
    padding:10px 20px; 
    color:white !important;">Login Now</button>
    <br>

    
   </form>
   <div class="login-notice p-2">
    
    </div>

   <div class="px-2 d-none login-activator">
<span>Please check your email to get activation code</span>
<input type="text" name="code" id="login-code" class="my-3" placeholder="Activation code">
<button class="btn btn-dark login-activate-btn">Activate Now</button>
</div>

    </div>
    </div>
</body>
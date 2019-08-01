<!DOCTYPE html>
<html>
   <head>
      <title>Login | Sign-Up</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="fa/css/all.css">
      <link rel="stylesheet" href="fa/css/all.min.css">
      <link rel="stylesheet" href="fa/css/brands.css">
      <link rel="stylesheet" href="fa/css/brands.min.css">
      <link rel="stylesheet" href="fa/css/fontawesome.css">
      <link rel="stylesheet" href="fa/css/fontawesome.min.css">
      <link rel="stylesheet" href="fa/css/v4-shims.min.css">
      <link rel="stylesheet" href="fa/css/svg-with-js.css">
      <link rel="stylesheet" href="fa/css/solid.css">
      <link rel="stylesheet" href="slider.css">
      <link rel="stylesheet" href="motorweb.css">
      <link rel="stylesheet" href="erico.css" type="text/css">
          <style>
             body {
                   background: wheat;
             }


   .live_chat{
    text-align: center;
    font-style: italic;
    -webkit-text-stroke: 2px white;
    padding:4px;
    margin-left: 2%;

   }
   .live_chat a{
     margin-left: 50%;
   }
    .back_btn{
        margin-left: 46%;
        font-size: 18px;
        color: black;
        margin-top: 1%;
        border:3px solid black;
        background: deepskyblue;
        height: 30px;
        width: 5%;
    }

          </style>
           </head>

<body>
            <div class="nav" >

                        <div class="addd">REGISTRATION FORM</div>
                        <div class="back_btn"><a href="index.html">Back</a></div>
                    </div>
<h2 id="barmsg">LOGIN</h2>



<div class="colect1" id="colect1" >
      <form method="POST" action="signup.php"  >
        <label id="label1">Username </label>
        <input id="inp1"  type="username" name ="user" required  ><br>

        <label id="label2">Enter Password</label>
        <input id="inp2"  type="password" name="password" required>
        <button class="loginbtns" type="submit" id="loginbtn" name="login_btn">Login</button>

        <button id="create_ac_btn1" class="loginbtns" type="submit">Create Account</button>
        <div id="forgot_pass"><a href="" >Forgot Password?</a></div>
      </form>
 </div>
<div class="colect2" id="colect2">

         <form  method="POST" action ="signin.php" >

              <label id="label3">Your First Name</label>
              <input id="create_firstname"  type="username" name="username"><br>
              <label id="label4">Your Second Name</label>j
              <input id="create_secondname" type="username" name="surname" ><br>
              <label id="label5">Your Email Address</label>
              <input id="create_email"  type="email" name="email"><br>
              <label id="label6">Set Password</label>
              <input id="inp6" type="password" name="password"><br>
              <label id="label7">Confirm Password</label>
              <!-- <input id="inp7" type="password" ><br> -->
              <button id="create_ac_btn2" type="submit" name="create-acct">Signup</button>
      </form>



</div>

<script src="newjquerrydownload.js"></script>
<script  type="text/javascript">


     $('#create_ac_btn1').on('click',function(){
       $('#barmsg').html( "Create New Account");
});

$('#create_ac_btn2').on('click',function(){

var  $firstname   = $('#create_firstname').value();
var  $secondname  = $('#create_secondname').value();
var  $email       = $('#create_email').value();
var  $pass        = $('#inp6').value();
var  $password    = $('#inp7').value();

  if($firstname =='' || $secondname =='' || $email =='' || $pass =='' || $password ==''){
     alert("Fill all fields before you submit");

       if($pass!=="" && pass.length < 10 ){
             alert("Password too weak(Should be atleast 15 characters)");
       }
     }
  else   if ($password !== $pass){
           alert("Passwords don't match.Please check properly and re-enter password");

     }
  else if($pass==="" &&  $password !==""){
       alert("First fill the password");

  }
        else if($firstname !=='' && $secondname !=='' && $email !== ''){

     $('barmsg').html($firstname + $secondname + "Account succcesfully created");

        }
     });
</script>





 <script  >
 $('.addd').css({
 marginLeft:'20%',
 color:'deepskyblue',
 marginTop: '1%',
 fontStyle: 'italic',
 fontFamily:'fantasy',

});
$("#inp1,#inp2").on('focusin',function(){
  $("#label1,#label2").css({
    paddingTop:'4px',
    fontSize:'11px',
    width:'fill',
    backgroundColor:'black',
    paddingLeft:'3px',
    paddingRight:'3px',
    marginLeft:'60px',
    color:'deepskyblue',
  });
});

$("#create_firstname,#create_secondname,#create_email,#inp6,#inp7").on('focus', function(){
  $("#label3,#label4,#label5,#label6,#label7").css({
    paddingTop:'4px',
    fontSize:'11px',
    width:'fill',
    backgroundColor:'black',
    paddingLeft:'3px',
    paddingRight:'3px',
    marginLeft:'60px',
    color:'deepskyblue',

  });
});

$('#colect1').css({
  display:'block',}) ;
$('#colect2').css({
  display:'none',}) ;


$('#create_ac_btn1').on('click',function(){
  $('#colect1').css({
    display:'none',}) ;
  $('#colect2').css({
    display:'block',
  }) ;
});





</script>
</body>
</html>

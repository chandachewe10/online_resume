<x-app-layout>
<x-slot name="header"> 

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Skills</title>
<meta name="keywords" content="cambridge international examinations, examinations concil of zambia, past papers, gce, physics, pure physics, ordinary physics, science papers, physics papers ecz, physics past papers, science past papers">
<meta name="description" content="Education website">
<meta name="author" content="Chanda Chewe">	
<!--online bootsrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
<!-- bootstrap font awesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<!--jQuery Libarary-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}" ></script>
<!--font awesome online-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0&appId=420782169359786&autoLogAppEvents=1" nonce="mPXYOaQl"></script>
</head>
<!-- body -->
<style>
   #background-img{
        background-image:linear-gradient(rgba(255,255,255,0.5),rgba(255,255,255,0.5)),url('images/languages.jpg');
  background-size:100% 100%;
  background-repeat:no-repeat;
  background-position:center center;
    }
    .se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('images/Preloader_10.gif') center no-repeat #fff;
}
    
</style>

<body>
    <div class=background-color>
    <center>
       
        <div class="se-pre-con"></div>
        <div class="card" id="background-img"style="width: 80%; margin-top:50px; padding: 45px; ">
            <h3  style="font-weight:bold; color:black">SKILLS</h3>
            <form action={{"skills/".Auth::user()->id}} method="POST" >
@csrf
                <div class="col-md-1 col xs-1"> 
                    <center> <i class="fa fa-user" aria-hidden="true"  style=" font-size:50px; color:grey"></i> </center> 
                  </div>
                    <!-- Validation Errors -->
              <p style="width:100%; background-color:grey;"> 
          <x-auth-validation-errors class="mb-4" :errors="$errors" /></p>
                <div style="font-weight: bold; color:black">Skills</div>
               <textarea name="skills"  style="width:80%; height:200px; border-style: outset;border:4px solid #ccc; background-color: transparent;">e.g Programmer, typist etc</textarea>
                <!--Break line--><br>
                <input type="submit" value="Next -->" style="width: 100px; font-weight: bold; color:aliceblue; background-color:green; cursor: pointer; border-radius: 0px 15px; position: absolute; left:50%">
            </form>
        </div>
    </div>
    </center>
    <script>
        $(window).on('load',function(){
                   $('.se-pre-con').fadeOut(5000);
               });
  </script>
    </body>
    </html>
   
                         
   
    </x-slot name="header">                  
    </x-app-layout>


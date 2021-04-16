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
<title>Resume Maker - Chewetech</title>
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
<script src="{{asset('js/jquery-3.2.1.min.js')}}" ></script>
    <link href="{{asset('css/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}"  rel="stylesheet">
    <link href="{{asset('css/aos.css')}}" >
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
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


<script rc="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- body -->
<style>
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
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="width:80%; margin-top:35px">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <center><h2 style="font-weight:bold; color:grey">Welcome {{Auth::user()->name}}, Click Where You Ended</h2></center>
                    <hr>
                 <center> <h2 style="color:green;font-weight:bold"><a href="index">Personal Details </a>  </h2>
                 <i class="fa fa-file-text-o" aria-hidden="true"  style=" font-size:72px; color:grey"></i>
                 
                 <h2 style="color:green;font-weight:bold"><a href="{{route('profileroute')}}">Profile</a></h2>
                  
                  
                 
                  
                  
                  <hr>
                  <h2 style="color:green;font-weight:bold"><a href="{{route('employment')}}">Employment</a>  </h2>
                 
                 
                  
                  <hr>
                  <h2 style="color:green;font-weight:bold"><a href="{{route('education')}}">Education</a>  </h2>

                  <h2 style="color:green;font-weight:bold"><a href="{{route('skills')}}">Skills</a>  </h2>
                  
                  <hr>
                  
                  <h2 style="color:green;font-weight:bold"><a href="{{route('hobbies')}}">Hobbies</a>  </h2>
                  
                 
                  <h2 style="color:green;font-weight:bold"><a href="{{route('languages')}}">Languages and Links</a></h2>
                  
                  <hr>
                  


                  <button class="btn btn-success" onclick="personal()">Build My Resume Now</button>
                  <br><br>
                  <button class="btn btn-primary" onclick="shortcut()">Continue Where I Ended</button>
                </div></center>
            </div>
            <br><br><!--breakline-->
            
        </div>
        <center>
        <div style="background-color:black">
                   <p class="copyright_text" style="color:grey;font-weight:bold">© 2021 All Rights Reserved. <a href="http://www.chewetech.com" style="color:grey;font-weight:bold"> chewetech.com </a><br> Designed by:<a href="http://www.chewetech.com" style="color:grey;font-weight:bold"> Chanda C</a> </p>
</div>
</center>
        <script>
            function personal(){
                window.location="register";
            }
            //continue where i ended
            function shortcut(){
                window.location="login";
            }
        </script>
    </div>
                    
               </body>
            
    </html>


   
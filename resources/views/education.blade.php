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
<title>Education</title>
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
        background-image:linear-gradient(rgba(255,255,255,0.5),rgba(255,255,255,0.5)),url('images/image3.jpg');
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
            <h3  style="font-weight:bold; color:navy">TERTIARY EDUCATION</h3>
            <form action={{"education/".Auth::user()->id}} method="POST" >
              @csrf
            <!-- Validation Errors -->
              <p style="width:100%; background-color:grey;"> 
          <x-auth-validation-errors class="mb-4" :errors="$errors" /></p>
                <div class="col-md-1 col xs-1"> 
                    <center><i class='fas fa-user-graduate' style="font-size:50px; color:grey"></i></center>    
                  </div>
                <div style="font-weight: bold; color:navy">Name of College/University</div>
                <input type="text" placeholder="E.g CBU, UNZA, Nortec" name="college" style="border:2px solid #ccc; box-sizing:border-box; height: 40px;  border-style: outset; background-color: transparent;" required />
                <div style="font-weight: bold; color:navy">Started on</div>
              
                <select name="eDay">
               <option selected>Day</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
               <option>13</option>
               <option>14</option>
               <option>15</option>
               <option>16</option>
               <option>17</option>
               <option>18</option>
               <option>19</option>
               <option>20</option>
               <option>21</option>
               <option>22</option>
               <option>23</option>
               <option>24</option>
               <option>25</option>
               <option>26</option>
               <option>27</option>
               <option>28</option>
               <option>29</option>
               <option>30</option>
               <option>31</option>
               </select>

               <select name="emonth">
               <option selected>month</option>
               <option>january</option>
               <option>February</option>
               <option>March</option>
               <option>April</option>
               <option>May</option>
               <option>June</option>
               <option>July</option>
               <option>August</option>
               <option>September</option>
               <option>October</option>
               <option>Novermber</option>
               <option>December</option>
               </select>

               <select name="eyear">
               <option selected>Year</option>
               <option>2021</option>
               <option>2020</option>
               <option>2019</option>
               <option>2018</option>
               <option>2017</option>
               <option>2016</option>
               <option>2015</option>
               <option>2014</option>
               <option>2013</option>
               <option>2012</option>
               <option>2011</option>
               <option>2010</option>
               <option>2009</option>
               <option>2007</option>
               <option>2006</option>
               <option>2005</option>
               <option>2004</option>
               <option>2003</option>
               <option>2002</option>
               </select>


               <div style="font-weight: bold; color:navy">Stopped on</div>
               <select name="eDay1">
               <option selected>Day</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
               <option>13</option>
               <option>14</option>
               <option>15</option>
               <option>16</option>
               <option>17</option>
               <option>18</option>
               <option>19</option>
               <option>20</option>
               <option>21</option>
               <option>22</option>
               <option>23</option>
               <option>24</option>
               <option>25</option>
               <option>26</option>
               <option>27</option>
               <option>28</option>
               <option>29</option>
               <option>30</option>
               <option>31</option>
               </select>

               <select name="emonth1">
               <option selected>month</option>
               <option>january</option>
               <option>February</option>
               <option>March</option>
               <option>April</option>
               <option>May</option>
               <option>June</option>
               <option>July</option>
               <option>August</option>
               <option>September</option>
               <option>October</option>
               <option>Novermber</option>
               <option>December</option>
               </select>

               <select name="eyear1">
               <option selected>Year</option>
               <option>2021</option>
               <option>2020</option>
               <option>2019</option>
               <option>2018</option>
               <option>2017</option>
               <option>2016</option>
               <option>2015</option>
               <option>2014</option>
               <option>2013</option>
               <option>2012</option>
               <option>2011</option>
               <option>2010</option>
               <option>2009</option>
               <option>2007</option>
               <option>2006</option>
               <option>2005</option>
               <option>2004</option>
               <option>2003</option>
               <option>2002</option>
               </select>
<br> <br> 

                <div style="font-weight: bold; color:navy">Qualifications Obtained</div>
                <input type="text" placeholder="e.g Bsc Physics Hons, Diploma in Markerting "  name="qualifications" style="border:2px solid #ccc; box-sizing:border-box; height: 40px; border-style: outset; background-color: transparent;" required/><br><br>



                <div style="font-weight: bold; color:navy">Name of Secondary</div>
                <input type="text" placeholder="E.g Ndola girls, Mukuba etc" name="schools" style="border:2px solid #ccc; box-sizing:border-box; height: 40px;  border-style: outset; background-color: transparent;" required />
                <div style="font-weight: bold; color:navy">Started on</div>
              
                <select name="eDaysec">
               <option selected>Day</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
               <option>13</option>
               <option>14</option>
               <option>15</option>
               <option>16</option>
               <option>17</option>
               <option>18</option>
               <option>19</option>
               <option>20</option>
               <option>21</option>
               <option>22</option>
               <option>23</option>
               <option>24</option>
               <option>25</option>
               <option>26</option>
               <option>27</option>
               <option>28</option>
               <option>29</option>
               <option>30</option>
               <option>31</option>
               </select>

               <select name="emonthsec">
               <option selected>month</option>
               <option>january</option>
               <option>February</option>
               <option>March</option>
               <option>April</option>
               <option>May</option>
               <option>June</option>
               <option>July</option>
               <option>August</option>
               <option>September</option>
               <option>October</option>
               <option>Novermber</option>
               <option>December</option>
               </select>

               <select name="eyearsec">
               <option selected>Year</option>
               <option>2021</option>
               <option>2020</option>
               <option>2019</option>
               <option>2018</option>
               <option>2017</option>
               <option>2016</option>
               <option>2015</option>
               <option>2014</option>
               <option>2013</option>
               <option>2012</option>
               <option>2011</option>
               <option>2010</option>
               <option>2009</option>
               <option>2007</option>
               <option>2006</option>
               <option>2005</option>
               <option>2004</option>
               <option>2003</option>
               <option>2002</option>
               </select>


               <div style="font-weight: bold; color:navy">Stopped on</div>
               <select name="eDaysec1">
               <option selected>Day</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
               <option>13</option>
               <option>14</option>
               <option>15</option>
               <option>16</option>
               <option>17</option>
               <option>18</option>
               <option>19</option>
               <option>20</option>
               <option>21</option>
               <option>22</option>
               <option>23</option>
               <option>24</option>
               <option>25</option>
               <option>26</option>
               <option>27</option>
               <option>28</option>
               <option>29</option>
               <option>30</option>
               <option>31</option>
               </select>

               <select name="emonthsec1">
               <option selected>month</option>
               <option>january</option>
               <option>February</option>
               <option>March</option>
               <option>April</option>
               <option>May</option>
               <option>June</option>
               <option>July</option>
               <option>August</option>
               <option>September</option>
               <option>October</option>
               <option>Novermber</option>
               <option>December</option>
               </select>

               <select name="eyearsec1">
               <option selected>Year</option>
               <option>2021</option>
               <option>2020</option>
               <option>2019</option>
               <option>2018</option>
               <option>2017</option>
               <option>2016</option>
               <option>2015</option>
               <option>2014</option>
               <option>2013</option>
               <option>2012</option>
               <option>2011</option>
               <option>2010</option>
               <option>2009</option>
               <option>2007</option>
               <option>2006</option>
               <option>2005</option>
               <option>2004</option>
               <option>2003</option>
               <option>2002</option>
               </select>
<br> <br> 

                <div style="font-weight: bold; color:navy">Qualifications Obtained</div>
                <input type="text" placeholder="e.g School cert, GCE cert, etc "  name="secondaryq" style="border:2px solid #ccc; box-sizing:border-box; height: 40px; border-style: outset; background-color: transparent;" required/><br><br>



                <div style="font-weight: bold; color:navy">Name of Primary</div>
                <input type="text" placeholder="E.g Mopani Nkana Trust Sch" name="schoolp" style="border:2px solid #ccc; box-sizing:border-box; height: 40px;  border-style: outset; background-color: transparent;" required />
                <div style="font-weight: bold; color:navy">Started on</div>
              
                <select name="eDayprim">
               <option selected>Day</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
               <option>13</option>
               <option>14</option>
               <option>15</option>
               <option>16</option>
               <option>17</option>
               <option>18</option>
               <option>19</option>
               <option>20</option>
               <option>21</option>
               <option>22</option>
               <option>23</option>
               <option>24</option>
               <option>25</option>
               <option>26</option>
               <option>27</option>
               <option>28</option>
               <option>29</option>
               <option>30</option>
               <option>31</option>
               </select>

               <select name="emonthprim">
               <option selected>month</option>
               <option>january</option>
               <option>February</option>
               <option>March</option>
               <option>April</option>
               <option>May</option>
               <option>June</option>
               <option>July</option>
               <option>August</option>
               <option>September</option>
               <option>October</option>
               <option>Novermber</option>
               <option>December</option>
               </select>

               <select name="eyearprim">
               <option selected>Year</option>
               <option>2021</option>
               <option>2020</option>
               <option>2019</option>
               <option>2018</option>
               <option>2017</option>
               <option>2016</option>
               <option>2015</option>
               <option>2014</option>
               <option>2013</option>
               <option>2012</option>
               <option>2011</option>
               <option>2010</option>
               <option>2009</option>
               <option>2007</option>
               <option>2006</option>
               <option>2005</option>
               <option>2004</option>
               <option>2003</option>
               <option>2002</option>
               </select>


               <div style="font-weight: bold; color:navy">Stopped on</div>
               <select name="eDay1prim">
               <option selected>Day</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
               <option>13</option>
               <option>14</option>
               <option>15</option>
               <option>16</option>
               <option>17</option>
               <option>18</option>
               <option>19</option>
               <option>20</option>
               <option>21</option>
               <option>22</option>
               <option>23</option>
               <option>24</option>
               <option>25</option>
               <option>26</option>
               <option>27</option>
               <option>28</option>
               <option>29</option>
               <option>30</option>
               <option>31</option>
               </select>

               <select name="emonth1prim">
               <option selected>month</option>
               <option>january</option>
               <option>February</option>
               <option>March</option>
               <option>April</option>
               <option>May</option>
               <option>June</option>
               <option>July</option>
               <option>August</option>
               <option>September</option>
               <option>October</option>
               <option>Novermber</option>
               <option>December</option>
               </select>

               <select name="eyear1prim">
               <option selected>Year</option>
               <option>2021</option>
               <option>2020</option>
               <option>2019</option>
               <option>2018</option>
               <option>2017</option>
               <option>2016</option>
               <option>2015</option>
               <option>2014</option>
               <option>2013</option>
               <option>2012</option>
               <option>2011</option>
               <option>2010</option>
               <option>2009</option>
               <option>2007</option>
               <option>2006</option>
               <option>2005</option>
               <option>2004</option>
               <option>2003</option>
               <option>2002</option>
               </select>
<br> <br> 

                <div style="font-weight: bold; color:navy">Qualifications Obtained</div>
                <input type="text" placeholder="e.g Grade seven cert"  name="primaryq" style="border:2px solid #ccc; box-sizing:border-box; height: 40px; border-style: outset; background-color: transparent;" required/><br><br>









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
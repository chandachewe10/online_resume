<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="{{asset('css/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}"  rel="stylesheet">
    <link href="{{asset('css/aos.css')}}" >
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <noscript>
   
      <style type="text/css">   
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }

</style>



    </noscript>
  </head>
  <body id="top">
    <header class="d-print-none">
      <div class="container text-center text-lg-left">
        <div class="py-3 clearfix">
          <h1 class="site-title mb-0">{{$languages->name}}</h1>
          
           
          
        </div>
      </div>
    </header>
    <div class="page-content">
      <div class="container">
<div class="cover shadow-lg bg-white">
  <div class="cover-bg p-3 p-lg-4 text-white">
    <div class="row">
      <div class="col-lg-4 col-md-5">
        <div class="avatar hover-effect bg-white shadow-sm p-1"><img src="{{asset('storage/avatar.jpg' )}}" width="180" height="150"></div>
      </div>
      <div class="col-lg-8 col-md-7 text-center text-md-start">
        <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0" >{{$languages->name}}</h2>
        <p data-aos="fade-left" data-aos-delay="100">{{$languages->profession}}</p>
        <div class="d-print-none" data-aos="fade-left" data-aos-delay="200"><a class="btn btn-light text-dark shadow-sm mt-1 me-1" href='' target="_blank">My Resume</a><a class="btn btn-success shadow-sm mt-1" href="#contact">Hire Me</a></div>
      </div>
    </div>
  </div>
  <div class="about-section pt-4 px-3 px-lg-4 mt-1">
    <div class="row">
      <div class="col-md-6">
        <h2 class="h3 mb-3">About Me</h2>
        <p>{{$languages->comments}}</p>
      </div>
      <div class="col-md-5 offset-md-1">
        <div class="row mt-2">
          <div class="col-sm-4">
            <div class="pb-1">Full Names</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary">{{$languages->name}}</div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Email</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary">{{$languages->email}}</div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">First Phone contact</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary">{{$languages->phone1}}</div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Second Phone contact</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary">{{$languages->phone2}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <hr class="d-print-none"/>
  <div class="work-experience-section px-3 px-lg-4">
    <h2 class="h3 mb-4">Work Experience</h2>
    <div class="timeline">
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{$languages->workplace}} <span class="text-muted h6"> {{$languages->role}}</span></div>
          <div class="text-muted text-small mb-2">{{$languages->Day}} {{$languages->month}} {{$languages->year}}  to  {{$languages->present}}{{$languages->Daylast}} {{$languages->monthlast}} {{$languages->yearlast}}</div>
          <div>{{$languages->duties}}</div>
        </div>
      </div>
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{$languages->workplace1}} <span class="text-muted h6">{{$languages->role1}}</span></div>
          <div class="text-muted text-small mb-2">{{$languages->Daysecond}} {{$languages->monthsecond}} {{$languages->yearsecond}}  to  {{$languages->present1}}{{$languages->Day1}} {{$languages->month1}} {{$languages->year1}}</div>
          <div>{{$languages->duties1}}</div>
        </div>
      </div>
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{$languages->workplace2}} <span class="text-muted h6">{{$languages->role2}}</span></div>
          <div class="text-muted text-small mb-2">{{$languages->Dayseco}} {{$languages->monthseco}} {{$languages->yearseco}}  to  {{$languages->presen}}{{$languages->Day}} {{$languages->mon}} {{$languages->yea}}</div>
          <div>{{$languages->dutie}}</div>
        </div>
      </div>
    </div>
  </div>
  <hr class="d-print-none"/>
  <div class="page-break"></div>
  <div class="education-section px-3 px-lg-4 pb-4">
    <h2 class="h3 mb-4">Education</h2>
    <div class="timeline">
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{$languages->qualifications}} <span class="text-muted h6">from {{$languages->college}}</span></div>
          <div class="text-muted text-small mb-2">{{$languages->eDay}} {{$languages->emonth}} {{$languages->eyear}}  to  {{$languages->eDay1}} {{$languages->emonth1}} {{$languages->eyear1}}</div>
         
        </div>
      </div>
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{$languages->secondaryq}} <span class="text-muted h6">from {{ $languages->schools}}</span></div>
          <div class="text-muted text-small mb-2">{{$languages->eDaysec}} {{$languages->emonthsec}} {{$languages->eyearsec}}  to  {{$languages->eDaysec1}} {{$languages->emonthsec1}} {{ $languages->eyearsec1}}</div>
          <div></div>
        </div>
      </div>
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{$languages->primaryq}} <span class="text-muted h6">from {{ $languages->schoolp}}</span></div>
          <div class="text-muted text-small mb-2">{{$languages->eDayprim}} {{$languages->emonthprim}} {{$languages->eyearprim}}  to  {{$languages->eDay1prim}} {{$languages->emonth1prim}} {{ $languages->eyear1prim}}</div>
          <div></div>
        </div>
      </div>
    </div>
  </div>

  <hr class="d-print-none"/>
  <div class="skills-section px-3 px-lg-4">
    <h2 class="h3 mb-3">Skills</h2>
    <div class="timeline-card timeline-card-success card shadow-sm">
      <div class="card-body">
       {{$languages->skills}}
      </div>
   </div>
  </div><br><br>


  <hr class="d-print-none"/>
  <div class="page-break"></div>
  <div class="education-section px-3 px-lg-4 pb-4">
    <h2 class="h3 mb-4">Hobbies and Personal Links</h2>
  <div class="timeline-card timeline-card-success card shadow-sm">
    <div class="card-body">
      <div class="h5 mb-1">{{$languages->hobbies}}<span class="text-muted h6"></span></div>
      <div class="text-muted text-small mb-2">Personal Links</div>
      <div><div>{{$languages->links}}</div></div>
    </div>
 </div>
  
</div></div>
    </div>
   
    <script src="scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="scripts/aos.js?ver=1.2.0"></script>
    <script src="scripts/main.js?ver=1.2.0"></script>
  </body>
</html>
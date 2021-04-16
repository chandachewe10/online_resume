<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Online Resume') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <center> <h4 style="color:green;fontweight:bold">Your Resume Made Easy</h4>
                 <i class="fa fa-file-text-o" aria-hidden="true"  style=" font-size:72px; color:navy"></i>
                 <p>Simple resume takes the hassle out of resume writing. Just follow the easy prompts to create the perfect job-ready resume effortlessly. More templates to be available soon. </p>
                  <p>Do it in minutes with our resume builder and cover letter. It is simply done. Enjoy!</p> 
                  <i class="fa fa-print" aria-hidden="true"  style=" font-size:72px; color:navy"></i>
                  <h4 style="color:green;fontweight:bold">Simplicity</h4>
                  <p>Making Resume is the first step of any job search. Not sure how to make a resume? Our online Resume maker gives you a free resume template to follow as you begin. </p>
                  <i class="fa fa-copy" aria-hidden="true"  style=" font-size:72px; color:navy"></i>
                  <h4 style="color:green;fontweight:bold">A Resume Layout That Stands Out</h4>
                  <p>A creative, professional layout can grab a recruiter's attention. Our resume layout makes sure all your content is aligned and organised so your resume looks a work of art  </p>
                  <h4 style="color:green;fontweight:bold">Save Time</h4>
                  <i class="fa fa-file" aria-hidden="true"  style=" font-size:72px; color:navy"></i>
                  <p>Avoid hours of online research and wasted time playing with margins in microsoft word and let our simple Resume generator make a resume for you. We guide you through creating each resume section step by step, you just need to fill in the blanks. With our online Resume maker, you can create a Resume that showcase your greatest strengths and unique professional together with your work and background education.     </p>
                  
                  <button class="btn btn-success" onclick="personal()">Build My Resume Now</button>
                </div></center>
            </div>
            <br><br><!--breakline-->
          
        </div>
        
        <script>
            function personal(){
                window.location="index";
            }
        </script>
    </div>
</x-app-layout>

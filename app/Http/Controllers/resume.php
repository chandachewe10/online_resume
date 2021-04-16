<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;

use App\Models\User;
use Auth;
use PDF;
class resume extends Controller
{
    //personal details function
   public function personal(Request $request,$id){
        $validate=validator::make($request->all(),[
            'profession'=>['required','string'],
            'phone1'=>['required','numeric'],
            'phone2'=>['required','numeric'],
            'image'=>['required','mimes:gif,svg,jpg,png'],
        ]);
       if ($validate->fails()){
        return Redirect::back()->withErrors($validate);
       }
       else{
        $personalDetails=User::find($id);
        $personalDetails->profession=$request->input('profession');
        $personalDetails->phone1=$request->input('phone1');
        $personalDetails->phone2=$request->input('phone2');
        $personalDetails->image=$request->image->storeAs('myimage',$request->image->getClientOriginalName());
        $personalDetails->save();
        return redirect()->route('profileroute');
     }
    }
    //profile details function
    public function profile(Request $request, $id){
        $validate=validator::make($request->all(),[
            'comments'=>['required','string','max:500']
        ]);
        if ($validate->fails()){
            return Redirect::back()->withErrors($validate);  
        }
        else{
            $profile=User::find($id);
            $profile->comments=$request->input('comments');
            $profile->save();
            return Redirect::route('employment');
        }
        
    }

    //Employment details function
   public function employment(Request $request, $id){
    $validate=validator::make($request->all(),[
        'workplace'=>['required','string'],
        'Day'=>['required','numeric'],
        'month'=>['required'],
        'year'=>['numeric'],
        'present'=>['string'],
        'Daylast'=>['numeric'],
        'monthlast'=>['string'],
        'role'=>['required','string'],
        'duties'=>['required','string'],
        'yearlast'=>['numeric'],
    ]);
   if ($validate->fails()){
    return Redirect::back()->withErrors($validate);
   }
   else{
    $employment=User::find($id);
    $employment->role=$request->input('role');
    $employment->duties=$request->input('duties');
    $employment->workplace=$request->input('workplace');
    $employment->Day=$request->input('Day');
    $employment->month=$request->input('month');
    $employment->year=$request->input('year');
    $employment->Daylast=$request->input('Daylast');
    $employment->monthlast=$request->input('monthlast');
    $employment->yearlast=$request->input('yearlast');
    $employment->present=$request->input('present');
    $employment->save();
    return redirect()->route('employment1');
 }
}


//Employment details function 1
public function employment1(Request $request, $id){
    $validate=validator::make($request->all(),[
        'workplace1'=>['required','string'],
        'Daysecond'=>['required','numeric'],
        'monthsecond'=>['required'],
        'yearsecond'=>['numeric'],
        'role1'=>['required','string'],
        'duties1'=>['required','string'],
        'present1'=>['string'],
        'Day1'=>['numeric'],
        'month1'=>['string'],
        'year1'=>['numeric'],
    ]);
   if ($validate->fails()){
    return Redirect::back()->withErrors($validate);
   }
   else{
    $employment1=User::find($id);
    $employment1->role1=$request->input('role1');
    $employment1->duties1=$request->input('duties1');
    $employment1->workplace1=$request->input('workplace1');
    $employment1->Daysecond=$request->input('Daysecond');
    $employment1->monthsecond=$request->input('monthsecond');
    $employment1->yearsecond=$request->input('yearsecond');
    $employment1->Day1=$request->input('Day1');
    $employment1->month1=$request->input('month1');
    $employment1->year1=$request->input('year1');
    $employment1->present1=$request->input('present1');
    $employment1->save();
    return redirect()->route('employment2');
 }
}


//Employment details function 1
public function employment2(Request $request, $id){
    $validate=validator::make($request->all(),[
        'workplace2'=>['required','string'],
        'Dayseco'=>['required','numeric'],
        'monthseco'=>['required'],
        'yearseco'=>['numeric'],
        'presen'=>['string'],
        'Da'=>['numeric'],
        'mon'=>['string'],
        'dutie'=>['required','string'],
        'role2'=>['required','string'],
        'yea'=>['numeric'],
    ]);
   if ($validate->fails()){
    return Redirect::back()->withErrors($validate);
   }
   else{
    $employment1=User::find($id);
    $employment1->role2=$request->input('role2');
    $employment1->dutie=$request->input('dutie');
    $employment1->workplace2=$request->input('workplace2');
    $employment1->Dayseco=$request->input('Dayseco');
    $employment1->monthseco=$request->input('monthseco');
    $employment1->yearseco=$request->input('yearseco');
    $employment1->Da=$request->input('Da');
    $employment1->mon=$request->input('mon');
    $employment1->yea=$request->input('yea');
    $employment1->presen=$request->input('presen');
    $employment1->save();
    return redirect()->route('education');
 }
}





//Education details
public function education(Request $request, $id){
    $validate=validator::make($request->all(),[
        'college'=>['required','string'],
        'eDay'=>['required'],
        'emonth'=>['required','string'],
        'eyear'=>['required','numeric'],
        'eDay1'=>['required'],
        'emonth1'=>['required','string'],
        'eyear1'=>['required','numeric'],
        'qualifications'=>['required'],
        'schools'=>['required','string'],
        'secondaryq'=>['required','string'],
        'eDaysec'=>['required','numeric'],
        'emonthsec'=>['required','string'],
        'eyearsec'=>['required'],
        'eDaysec1'=>['required','numeric'],
        'emonthsec1'=>['required','string'],
        'eyearsec1'=>['required'],
        'schoolp'=>['required','string'],
        'primaryq'=>['required','string'],
        'eDay1prim'=>['required','string'],
        'emonth1prim'=>['required','string'],
        'eyear1prim'=>['required'],
       
    ]);
   if ($validate->fails()){
    return Redirect::back()->withErrors($validate);
   }
   else{
    $education=User::find($id);
    $education->college=$request->input('college');
    $education->eDay=$request->input('eDay');
    $education->emonth=$request->input('emonth');
    $education->eyear=$request->input('eyear');
    $education->qualifications=$request->input('qualifications');
    $education->eDay1=$request->input('eDay1');
    $education->emonth1=$request->input('emonth1');
    $education->eyear1=$request->input('eyear1');
    $education->schools=$request->input('schools');
    $education->secondaryq=$request->input('secondaryq');
    $education->eDaysec=$request->input('eDaysec');
    $education->emonthsec=$request->input('emonthsec');
    $education->eyearsec=$request->input('eyearsec');
    $education->schoolp=$request->input('schoolp');
    $education->primaryq=$request->input('primaryq');
    $education->eDaysec1=$request->input('eDaysec1');
    $education->emonthsec1=$request->input('emonthsec1');
    $education->eyearsec1=$request->input('eyearsec1');
    $education->eDayprim=$request->input('eDayprim');
    $education->emonthprim=$request->input('emonthprim');
    $education->eyearprim=$request->input('eyearprim');
    $education->eDay1prim=$request->input('eDay1prim');
    $education->emonth1prim=$request->input('emonth1prim');
    $education->eyear1prim=$request->input('eyear1prim');
    $education->save();
    return redirect()->route('skills');
 }
}


 //skills details
 public function skills(Request $request, $id){
    $validate=validator::make($request->all(),[
        'skills'=>['required','string','max:600']
    ]);
    if ($validate->fails()){
        return Redirect::back()->withErrors($validate);  
    }
    else{
        $skills=User::find($id);
        $skills->skills=$request->input('skills');
        $skills->save();
        return Redirect::route('hobbies');
    }
    
}


//Hobbies details
public function hobbies(Request $request, $id){
    $validate=validator::make($request->all(),[
        'hobbies'=>['required','string','max:1000']
    ]);
    if ($validate->fails()){
        return Redirect::back()->withErrors($validate);  
    }
    else{
        $hobbies=User::find($id);
        $hobbies->hobbies=$request->input('hobbies');
        $hobbies->save();
        return Redirect::route('languages');
    }
    
}

//Language details
public function languages(Request $request, $id){
    $validate=validator::make($request->all(),[
        'languages'=>['required','string','max:500'],
        'links'=>['string','max:500'],
    ]);
    if ($validate->fails()){
        return Redirect::back()->withErrors($validate);  
    }
    else{
        $languages=User::find($id);
        $languages->languages=$request->input('languages');
        $languages->links=$request->input('links');
        $languages->references='References available upon request';
        $languages->save();
        return view('showResume')->with('languages',$languages);   
        
    }
      }

      public function downloads($id){
        $languages=User::find($id);
        $pdf=PDF::loadView('download', compact('languages'));
        return $pdf->download('resume_maker.pdf');
     }
               
          }





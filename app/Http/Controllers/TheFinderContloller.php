<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TheFinderContloller extends Controller
{
    //function to fetch list of combinations and universities to display in home page
    public function combination_fetch(){
        $combinations = DB::select('SELECT title, id FROM combinations');
        $universities = DB::select('SELECT universities.name, universities.id FROM universities');
        return view('welcome',['combinations'=>$combinations] , ['universities'=>$universities]);

    }

    //function to sort courses taking combination and university
    public function find_courses(Request $request){


        $combination = $request->input('combinations');
        $university = $request->input('universities');

        //return $request;


        $subject_ids = DB::table('subjects_combination')
            ->where('combination_id', $combination)
            ->pluck('subject_id');

       
            $subject_one = $subject_ids[0];
            $subject_two = $subject_ids[1];
            $subject_three = $subject_ids[2];

        
        $courses_ids = DB::table('subjects_programmes')
                ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university')
                ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
                ->whereIn('programmes.university', [$university])
                ->whereIn('subject_id', [$subject_one, $subject_two])
                ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university')
                ->havingRaw('COUNT(DISTINCT subject_id) = 2')
                ->union(DB::table('subjects_programmes')
                ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university')
                ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
                ->whereIn('programmes.university', [$university])
                ->whereIn('subject_id', [$subject_one, $subject_three])
                ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university')
                ->havingRaw('COUNT(DISTINCT subject_id) = 2'))
                ->union(DB::table('subjects_programmes')
                ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university')
                ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
                ->whereIn('programmes.university', [$university])
                ->whereIn('subject_id', [$subject_two, $subject_three])
                ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university')
                ->havingRaw('COUNT(DISTINCT subject_id) = 2'))
                ->groupBy('programmes.id')
                ->get();
        

        $apply_link = DB::table('universities')
            ->where('name', $university)
            ->get('apply_link');

            //return $apply_link;

                //return $university;

        //return $courses_ids;

        return view('results',['courses'=>$courses_ids],['apply_links'=>$apply_link]);

    }

    //function to fetch list of combinations and locations to display in home page
    public function locations_fetch(){
        $combinations = DB::select('SELECT title, id FROM combinations');
        $locations = DB::select('SELECT title, id FROM locations');
        return view('by_location',['combinations'=>$combinations] , ['locations'=>$locations]);

    }

    //function to sort courses taking locations and combination
    public function find_courses_by_location(Request $request){


        $combination = $request->input('combinations');
        $location = $request->input('locations');


        $subject_ids = DB::table('subjects_combination')
            ->where('combination_id', $combination)
            ->pluck('subject_id');

       
            $subject_one = $subject_ids[0];
            $subject_two = $subject_ids[1];
            $subject_three = $subject_ids[2];

        

            $universities = DB::table('universities')
                ->whereIn('location', [$location])
                ->get();


        
                $courses_ids = DB::table('subjects_programmes')
                ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university', 'universities.apply_link')
                ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
                ->join('universities', 'universities.name', '=', 'programmes.university')
                ->whereIn('programmes.university', $universities->pluck('name')->toArray())
                ->whereIn('subject_id', [$subject_one, $subject_two])
                ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university', 'universities.apply_link')
                ->havingRaw('COUNT(DISTINCT subject_id) = 2')
                ->union(DB::table('subjects_programmes')
                    ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university', 'universities.apply_link')
                    ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
                    ->join('universities', 'universities.name', '=', 'programmes.university')
                    ->whereIn('programmes.university', $universities->pluck('name')->toArray())
                    ->whereIn('subject_id', [$subject_one, $subject_three])
                    ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university', 'universities.apply_link')
                    ->havingRaw('COUNT(DISTINCT subject_id) = 2'))
                ->union(DB::table('subjects_programmes')
                    ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university', 'universities.apply_link')
                    ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
                    ->join('universities', 'universities.name', '=', 'programmes.university')
                    ->whereIn('programmes.university', $universities->pluck('name')->toArray())
                    ->whereIn('subject_id', [$subject_two, $subject_three])
                    ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university', 'universities.apply_link')
                    ->havingRaw('COUNT(DISTINCT subject_id) = 2'))
                ->groupBy('programmes.id')
                ->get();
            
        



        //return $courses_ids;

        return view('results2',['courses'=>$courses_ids]);

    }


     //function to fetch list of combinations and jobs to display in home page
     public function jobs_fetch(){
        $combinations = DB::select('SELECT title, id FROM combinations');
        $jobs = DB::select('SELECT title, id FROM jobs');
        return view('by_job',['combinations'=>$combinations] , ['jobs'=>$jobs]);

    }

    //function to sort courses taking job and combination
    public function find_courses_by_job(Request $request){


        $combination = $request->input('combinations');
        $job = $request->input('jobs');


        $subject_ids = DB::table('subjects_combination')
            ->where('combination_id', $combination)
            ->pluck('subject_id');

       
            $subject_one = $subject_ids[0];
            $subject_two = $subject_ids[1];
            $subject_three = $subject_ids[2];

        
            $programmes = DB::table('jobs_programmes')
                ->whereIn('job_id', [$job])
                ->get();


            //return $programmes;


        
            $courses_ids = DB::table('subjects_programmes')
    ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university', 'universities.apply_link')
    ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
    ->join('universities', 'universities.name', '=', 'programmes.university')
    ->whereIn('programmes.id', $programmes->pluck('programme_id')->toArray())
    ->whereIn('subject_id', [$subject_one, $subject_two])
    ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university', 'universities.apply_link')
    ->havingRaw('COUNT(DISTINCT subject_id) = 2')
    ->union(DB::table('subjects_programmes')
        ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university', 'universities.apply_link')
        ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
        ->join('universities', 'universities.name', '=', 'programmes.university')
        ->whereIn('programmes.id', $programmes->pluck('programme_id')->toArray())
        ->whereIn('subject_id', [$subject_one, $subject_three])
        ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university', 'universities.apply_link')
        ->havingRaw('COUNT(DISTINCT subject_id) = 2'))
    ->union(DB::table('subjects_programmes')
        ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university', 'universities.apply_link')
        ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
        ->join('universities', 'universities.name', '=', 'programmes.university')
        ->whereIn('programmes.id', $programmes->pluck('programme_id')->toArray())
        ->whereIn('subject_id', [$subject_two, $subject_three])
        ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university', 'universities.apply_link')
        ->havingRaw('COUNT(DISTINCT subject_id) = 2'))
    ->groupBy('programmes.id')
    ->get();

        
        



        //return $courses_ids;

        return view('results2',['courses'=>$courses_ids]);

    }


    //function to fetch list of combinations and interests to display in home page
    public function interests_fetch(){
        $combinations = DB::select('SELECT title, id FROM combinations');
        $interests = DB::select('SELECT title, id FROM interests');

        //return $combinations;
        
        return view('by_interest',['combinations'=>$combinations] , ['interests'=>$interests]);

    }

    //function to sort courses taking interest and combination
    public function find_courses_by_interest(Request $request){


        $combination = $request->input('combinations');
        $interest = $request->input('interests');


        $subject_ids = DB::table('subjects_combination')
            ->where('combination_id', $combination)
            ->pluck('subject_id');

       
            $subject_one = $subject_ids[0];
            $subject_two = $subject_ids[1];
            $subject_three = $subject_ids[2];

        
            $programmes = DB::table('interests_programmes')
                ->whereIn('interest_id', [$interest])
                ->get();


            //return $programmes;


        
            $courses_ids = DB::table('subjects_programmes')
            ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university', 'universities.apply_link')
            ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
            ->join('universities', 'universities.name', '=', 'programmes.university')
            ->whereIn('programmes.id', $programmes->pluck('programme_id')->toArray())
            ->whereIn('subject_id', [$subject_one, $subject_two])
            ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university', 'universities.apply_link')
            ->havingRaw('COUNT(DISTINCT subject_id) = 2')
            ->union(DB::table('subjects_programmes')
                ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university', 'universities.apply_link')
                ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
                ->join('universities', 'universities.name', '=', 'programmes.university')
                ->whereIn('programmes.id', $programmes->pluck('programme_id')->toArray())
                ->whereIn('subject_id', [$subject_one, $subject_three])
                ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university', 'universities.apply_link')
                ->havingRaw('COUNT(DISTINCT subject_id) = 2'))
            ->union(DB::table('subjects_programmes')
                ->select('programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.id', 'programmes.university', 'universities.apply_link')
                ->join('programmes', 'programmes.id', '=', 'subjects_programmes.programme_id')
                ->join('universities', 'universities.name', '=', 'programmes.university')
                ->whereIn('programmes.id', $programmes->pluck('programme_id')->toArray())
                ->whereIn('subject_id', [$subject_two, $subject_three])
                ->groupBy('programmes.id', 'programmes.title', 'programmes.fee', 'programmes.capacity', 'programmes.duration', 'programmes.university', 'universities.apply_link')
                ->havingRaw('COUNT(DISTINCT subject_id) = 2'))
            ->groupBy('programmes.id')
            ->get();
        



        //return $courses_ids;

        return view('results2',['courses'=>$courses_ids]);

    }

}

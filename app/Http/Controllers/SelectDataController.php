<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use Faker\Factory as Faker;
use App\Models\Tutor_addsubjects;
use Inertia\Inertia;

class SelectDataController extends Controller
{

    function selectAllsubject()
    {

        return Tutor_addsubjects::join('teacher', 'teacher.id', '=', 'teacher_addsubjects.teacher_id')
            ->select('teacher.*', 'teacher_addsubjects.*')
            ->get();
    }

    function select_subjects()
    {
        $faker = Faker::create();
        $id = $faker->numberBetween(1, 100);

        return Tutor_addsubjects::where('teacher_id', '=', $id)
            ->join('teacher', 'teacher.id', '=', 'teacher_addsubjects.teacher_id')
            ->select('teacher.*', 'teacher_addsubjects.*')
            ->get();
    }

    function list_subjects()
    {
        $faker = Faker::create();
        $id = $faker->numberBetween(1, 100);

        return Tutor_addsubjects::where('teacher_id', '=', $id)->get();
    }

    function show($id, $name, $title_subject)
    {

        return Inertia::render('SubjectDetail', ['id' => $id, 'name' => $name, 'title_subject' => $title_subject]);


    }

    function showdetail(Request $request){

        $id = $request->input('id');
        $name = $request->input('name');
        $title_subject = $request->input('title_subject');
        $status = $request->input('status');

        $response = [
            'id' => $id,
            'name' => $name,
            'title_subject' => $title_subject,
            'status' => $status,

        ];

        return $response;

    }

    function check_login(Request $request){

        // if (auth()->check()) {

        //     return 'Login Success';
        // } else {

        //     return 'Login Not Success';
        // }

        $id = $request->input('id');
        $status = 1;

        $response = [
            'id' => $id,
            'status' => $status
        ];

        return $response;

        // return 'Login Success';


    }
}

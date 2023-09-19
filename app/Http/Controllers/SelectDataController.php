<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use Faker\Factory as Faker;
use App\Models\Tutor_addsubjects;

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
}

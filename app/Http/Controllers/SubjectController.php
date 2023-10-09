<?php

namespace App\Http\Controllers;

use App\Models\Type_subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    function subject_category(){


        return Type_subject::select()->get();

        // Type_subject::insert([
        //     'type_name' => 'อึ่นๆ',
        // ]);

        // return 'อึ่นๆ';

    }
}

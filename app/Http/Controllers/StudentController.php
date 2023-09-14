<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function register_student(Request $request){
        date_default_timezone_set('Asia/Bangkok');

        $date_stamp = date('y-m-d H:i:s');
        $reserce_date_stamp = date('y-m-d H:i:s');
        $table_number = $request->input('table');

        return Student::insert([
            'shop_id' => $request->input('shop_id'),


        ]);

    }
}

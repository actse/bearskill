<?php

namespace App\Http\Controllers;

use App\Models\Type_subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    function subject_category()
    {


        return Type_subject::select()->get();

        // Type_subject::insert([
        //     'type_name' => 'อึ่นๆ',
        // ]);

        // return 'อึ่นๆ';

    }

    function inser_subject(Request $request)
    {

        return $request;

        $subject = new Subject([
            'type_subject' => $request->input('type_subject'),
            'subject_name' => $request->input('subject_name'),
            'subject_detail' => $request->input('subject_detail'),
            'teaching_format' => json_encode($request->input('teaching_format')),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'teaching_days' => json_encode($request->input('teaching_days')),
            'location_teaching' => $request->input('location_teaching'),
        ]);
        $subject->save();

        return response()->json(['message' => 'Subject added successfully', 'subject' => $subject]);

    }
}

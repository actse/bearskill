<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Credit;
use App\Models\History_deduction;

use Faker\Factory as Faker;

class CreditController extends Controller
{
    //
    function insert(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $id = 1;
        $paymentactive = "active";

        if($paymentactive == null){
            $statuspayment = Users::where('id', '=', $id)->update([
                'status_payment_start' => 'active'
            ]);

            $statuspayment = Credit::insert([
                'teacher_id' => $request->input('id'),
                'status' => $request->input('status'),
                'coin' => $request->input('coin'),
                'created_at' => $request->input('created_at'),

            ]);
            return $statuspayment ? 'Data inserted successfully' : 'Data insertion failed';
        }else {
            $insercredit = Credit::insert([
                'teacher_id' => $request->input('id'),
                'status' => $request->input('status'),
                'coin' => $request->input('coin'),
                'created_at' => $request->input('created_at'),

            ]);
            return $insercredit ? 'Data inserted successfully' : 'Data insertion failed';

        }

    }

    function deduction_credit(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $faker = Faker::create();

        $deductcredit = History_deduction::insert([
            'teacher_id' => $faker->numberBetween(1,99),
            'student_id' => $faker->numberBetween(1,99),
            'title_deduction' => $faker->sentence,
            'deduction_coin' => $faker->numberBetween(1, 1000),
            'deduction_at' => $faker->dateTimeThisDecade(),
            'created_at' => now(),

        ]);


        // $deductcredit = History_deduction::insert([
        //     'teacher_id' => $request->input('teacher_id'),
        //     'student_id' => $request->input('student_id'),
        //     'title_deduction' => $request->input('title_deduction'),
        //     'deduction_coin' => $request->input('deduction_coin'),
        //     'deduction_at' => $request->input('deduction_at'),
        //     'created_at' => now(),

        // ]);

        return $deductcredit ? 'Data deductcredit successfully' : 'Data deductcredit failed';
    }
}

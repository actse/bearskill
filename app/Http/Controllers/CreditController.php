<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Credit;
use App\Models\Users;
use App\Models\History_deduction;

use Faker\Factory as Faker;

class CreditController extends Controller
{
    //
    function insert(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $id = $request->input('id');
        $coin = $request->input('coin');

        $statuspayment = Users::where('id', '=', $id)
            ->where('status_services_start', '=', 'active')->first();

        if ($statuspayment == null) {

            $statuspayment = Users::where('id', '=', $id)->update([
                'status_services_start' => 'active'
            ]);

            $statuspayment = Credit::insert([
                'users_id' => $id,
                'status' => 'notapproval',
                'coin' => $coin,
                'created_at' => now(),

            ]);

            return $statuspayment ? 'Data inserted successfully' : 'Data insertion failed';
        } else {

            if ($coin == 0) {

                return 'Data insertion failed';

            } else {

                Credit::insert([
                    'users_id' => $id,
                    'status' => 'notapproval',
                    'coin' => $coin,
                    'created_at' => now(),

                ]);

                return 'Data inserted successfully';
            }
        }
    }

    function deduction_credit(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $faker = Faker::create();

        $deductcredit = History_deduction::insert([
            'teacher_id' => $faker->numberBetween(1, 99),
            'student_id' => $faker->numberBetween(1, 99),
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentController extends Controller
{

    function register_student(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        // $date_stamp = date('y-m-d H:i:s');
        $faker = Faker::create();

        $insertstu = Student::insert([
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber,
            'password' => bcrypt('secret'), // You may use a default password or generate it differently
            'confirm_password' => bcrypt('secret'), // Same as password
            'stu_image' => $faker->imageUrl(),
            'prefix' => $faker->title,
            'firs_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'nickname' => $faker->userName,
            'birthday' => $faker->date,
            'lineid' => $faker->userName,
            'address' => $faker->address,
            'register_at' => $faker->dateTimeThisMonth,
        ]);

        // $insertstu = Student::insert([
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        //     'password' => $request->input('password'),
        //     'confirm_password' => $request->input('confirm_password'),
        //     'stu_image' => $request->input('stu_image'),
        //     'prefix' => $request->input('prefix'),
        //     'firs_name' => $request->input('firs_name'),
        //     'last_name' => $request->input('last_name'),
        //     'nickname' => $request->input('nickname'),
        //     'birthday' => $request->input('birthday'),
        //     'lineid' => $request->input('lineid'),
        //     'address' => $request->input('address'),
        //     'register_at' => $request->input('register_at'),
        // ]);

        // $insertstu = Student::insert([
        //     'email' => 'sarawut2608@gmail.com',
        //     'phone' => '0999999999',
        //     'password' => '12341234',
        //     'confirm_password' => '12341234',
        //     'stu_image' => 'basstsu.jpg',
        //     'prefix' => 'นาย',
        //     'firs_name' => 'sarawut',
        //     'last_name' => 'tabtimbua',
        //     'nickname' => 'basstsu',
        //     'birthday' => '09/09/1999',
        //     'lineid' => 'basstsu',
        //     'address' => '......',
        //     'register_at' => $date_stamp,
        // ]);

        return $insertstu;
    }
}

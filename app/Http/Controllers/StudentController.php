<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/3/13
 * Time: 22:51
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class StudentController
{
    public function test1()
    {

        $students = DB::table('student')->get();
        $students = $students->toArray();
        dd($students);
    }
}
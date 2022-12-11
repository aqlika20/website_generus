<?php

namespace App\Models;

use \Illuminate\Support\Str;
use App\Models\User;
use App\Models\Helper;
use App\Models\UserManagement;
use App\Models\Content;
use App\Models\Berita;
use App\Models\Subject;
use App\Models\Attendance;
use App\Models\ViewAttendance;
use App\Models\AttendanceStudent;
class Helper
{
    public static function generateRandomString($type,$value){
        if (!is_numeric($value)) {
            $value = 0;
        }
        $result = Str::random($value);
        switch ($type) {    
            case 'remember_token':
                $remember_token_exist = User::where([
                    ['remember_token', '=', $result],
                ])->first();
                if ($remember_token_exist) {
                    return self::generateRandomString($type,$value);
                }

                break;
        }

        return $result;
    }

    public static function defineNameBy($type, $value){
        switch($type){
            case 'id':
                $name = UserManagement::where('id', $value)->first();
                break;
        }

        return $name;
    }

}

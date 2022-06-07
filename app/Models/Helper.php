<?php

namespace App\Models;

use \Illuminate\Support\Str;
use App\Models\User;
use App\Models\Helper;

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
}

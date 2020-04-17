<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    //
    protected $table = 'blacklist';

    public static function check($ip) {
        if (Blacklist::where('ip', $ip) -> first()) {
            return true;
        } else {
            return false;
        }
    }
}

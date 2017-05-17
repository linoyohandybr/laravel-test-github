<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
   protected $fillable=['firstName','lastName','email','comment'];

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('m/d/Y H:i:s', $date)->format('m/d/Y');
    }

    public function getUpdatedAtAttribute($date)
    {
        return $date+1;
    }
}

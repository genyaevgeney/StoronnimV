<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use SoftDeletes;
    protected $table = 'feedbacks';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'email',
        'message', 
    ];

    /*static function getAll()
    {
    	$allRequests = self::orderBy('updated_at', 'desc')->get();
    	return $allRequests;
    }*/
}

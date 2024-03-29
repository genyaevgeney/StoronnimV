<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
     * This model class deals with 'news' DB table.
     *
     */
class News extends Model
{
    use SoftDeletes;
    protected $table = 'news';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'title',
        'tag',
        'content',
        'type',
        'user_id',
        'title_image',
        'alt',
        'event_date',       
    ];

    static function getAll()
    {
    	$allNews = self::orderBy('updated_at', 'desc')->get();
    	return $allNews;
    }

    static function getLastAnnouncement()
    {
    	$lastAannouncement = self::where('type', 'announce')->
    							   orderBy('updated_at', 'desc')->
    							   first();
    	return $lastAannouncement;
    }

    static function getLastNews($i)
    {
    	$lastNews = self::orderBy('updated_at', 'desc')->
    					  take($i)->
    					  get();
    	return $lastNews;
    }
}

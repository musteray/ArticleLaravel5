<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\carbon;

class Article extends Model
{
    //
    protected $fillable = 
    [
        'user_id',
    	'title',
    	'body',
    	'published_at'
    ];

    protected $dates = ['published_at'];

    // Mutators 
    public function setPublishedAtAttribute($date)
    {
    	$this->attributes["published_at"] = carbon::parse($date);
    }


    // Scope 
    public function scopePublished($query)
    {	
    	$query->where("published_at", '<=', carbon::now());
    }

    public function scopeUnpublished($q)
    {
    	$q->where("published_at", ">", carbon::now());
    }
    // End of scope

    // Relationship
    public function user()
    {
        return $this->belongsTo('App\User');
    }   

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    } 


    // Not working the tagList
    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }

    
}

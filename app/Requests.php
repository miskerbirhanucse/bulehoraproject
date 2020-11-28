<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    //
    protected $fillable = [
        'item_no', 'user_id', 'BId', 'brief_description', 'isDeanApproved',
        'isHeadApproved', 'user_id',
    ];
    public $timestamps = true;
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}

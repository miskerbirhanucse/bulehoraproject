<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add_Information extends Model
{
    protected $fillable = [
        'BID','user_id','item_no','brief_description_of_good_or_related_service'
    ];
    public $timestamps = true;
    public function user(){
        return $this->belongsTo(User::class);
    }
}

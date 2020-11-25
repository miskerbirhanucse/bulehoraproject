<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialInformation extends Model
{
    use HasFactory;

    protected $fillable = ['item_no','BID','brief_description_of_good_or_related_service','user_id'];

    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}

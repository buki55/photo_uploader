<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*
    protected $fillable = ['image_name', 'user_id', 'id_name',
                 'id_name', 'tag_no', 'carapace_length',
                 'carapace_width','take_date', 'part', 'env',
                 'location', 'beach_name', 'nest_id'];
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

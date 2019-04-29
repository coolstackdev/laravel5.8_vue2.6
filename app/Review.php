<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id_from', 'user_id_to', 'review_text', 'review_rate', 'rental_id'];
}

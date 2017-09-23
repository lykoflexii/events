<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;
    protected $dates = ['starts_at'];
    protected $fillable =
    ['name', 'description', 'location', 'price', 'starts_at'];
    public function isFree() {
      return $this->price == 0;
    }
}

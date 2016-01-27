<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarded = ['id'];
	
	public function ticket()
    {
        return $this->belongsTo('App\Model\Ticket');
    }
}

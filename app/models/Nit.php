<?php

class Nit extends Eloquent{


	protected $table = 'nits';
	public  $timestamps = false;

	public function user()
    {
        return $this->belongsTo('User');
    }
}
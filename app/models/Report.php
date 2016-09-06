<?php

class Report extends Eloquent {
	protected $fillable = array('name','email', 'tel','cell','company','country');

    public function answers()
    {
        return $this->hasMany('Answer');
    }

}
<?php

class Answer extends Eloquent {

	protected $fillable = array('report_id','section','answers');

    public function report()
    {
        return $this->belongsTo('Report');
    }

}
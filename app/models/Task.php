<?php

class Task extends \Eloquent {

    protected $fillable = [];

    /**
     * The database table used by the model.
     *
     * @var string
     */
     protected $table = 'tasks';

     /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
     // protected $hidden = array('password', 'remember_token');
     
    public function user()
    {
        return $this->belongsTo('User');
    }

}

<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;
    
    public $timestamps = false;

     /**
     * The database table used by the model.
     *
     * @var string
     */
     protected $table = 'users';

     /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * Retrieve all tasks associated to a user
     */
    public function tasks()
    {
        return $this->hasMany('Task');
    }

    public function setPasswordAttribute($value)
    {

        $this->attributes['password'] = Hash::make($value);
    }

   /**
    *  @param
    *  @return
    */
    public function getAll()
    {

    }


}

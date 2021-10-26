<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $with=['FromUser'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['formatted_created_at'];

    public function FromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    /**
     * Get the 
     *
     * @param  string  $value
     * @return string
     */
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}

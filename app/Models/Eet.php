<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eet extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eet';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['formatted_eet'];

    /**
     * Get the 
     *
     * @param  string  $value
     * @return string
     */
    public function getFormattedEetAttribute()
    {
        $hour = 0;
        $minute = $this->eet;
        if ($this->eet >= 60) {
            $hour = floor($this->eet / 60);
            $minute = $this->eet % 60;
        }
        return $hour.":".$minute;
    }
}

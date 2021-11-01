<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Eod extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eod';

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
    protected $appends = ['file_url'];

    /**
     * Get the 
     *
     * @param  string  $value
     * @return string
     */
    public function getFileUrlAttribute()
    {
        return $this->file_pdf ? Storage::url($this->file_pdf) : null;
    }
}

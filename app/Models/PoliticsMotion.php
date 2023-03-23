<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliticsMotion extends Model
{
    protected $table = '_politics_motion';
    protected $fillable = ['motion', 'Description', 'Approve','DisApprove'];
}

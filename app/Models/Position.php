<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;



    protected $fillable = ['name','report_To'];

    public function manager(){
        return $this->belongsTo(Position::class, 'report_To');

    }

    public function subordinates(){
        return $this->hasMany(Position::class, 'report_To');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'chapters';

    protected $guarded = ['id'];


    public function manhwa() {
        return $this->belongsTo(Manhwa::class,'manhwa_id', 'id');
    }

    public function chapterImages() {
        return $this->hasMany(ChapterImages::class,'chapter_id', 'id');
    }
}

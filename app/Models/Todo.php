<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Spatie\Translatable\HasTranslations;

class Todo extends Model
{
    use HasFactory;
    use SoftDeletes;
    // use HasTranslations;

    protected $table = 'todos';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'body', 'completed', 'created_by'];
    // public $translatable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}

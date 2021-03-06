<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = [
        'uuid',
        'title'
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public static function boot()
    {
        parent::boot();

        static::created(function (Snippet $snippet) {
            $snippet->steps()->create([
                'order' => 1
            ]);
        });

        static::creating(function (Snippet $snippet) {
            $snippet->uuid = Str::uuid();
        });
    }

    public function steps()
    {
        return $this->hasMany(Step::class)
            ->orderBy('order', 'asc');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

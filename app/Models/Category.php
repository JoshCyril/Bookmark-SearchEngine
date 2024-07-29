<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug'];

    public function collections(): BelongsToMany
    {
        return $this->belongsToMany(Collection::class);
    }

    public function urls(): BelongsToMany
    {
        return $this->belongsToMany(Url::class);
    }
}

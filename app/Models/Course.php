<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'status',
        'category_id',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(
            CourseCategory::class
        );
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}

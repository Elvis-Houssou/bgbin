<?php

namespace App\Models;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name', 'description', 'images'
    ];

    /**
     * Define a one-to-many relationship.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     */
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * Define a one-to-many relationship.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     */
    public function sub_categories(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }

    public function getImagePath()
    {
        switch ($this->sub_category_id) {

        }
    }
}

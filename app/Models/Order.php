<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;


     /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'mesure', 'doublure', 'description', 'images'
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

    /**
     * Define a one-to-many relationship.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     */
    public function bands(): BelongsTo
    {
        return $this->belongsTo(Band::class, 'band_id', 'id');
    }

}

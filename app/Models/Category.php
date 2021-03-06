<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Category extends Model implements Searchable
{
    use HasFactory;

    protected $guarded = [];

    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function getSearchResult(): SearchResult
    {
        $url = 'url';

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Product extends Model implements Searchable
{
    use HasFactory;

    protected $guarded = [];

    public function getSearchResult(): SearchResult
    {
        $url = 'url';

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }

    public function price()
    {
        return $this->hasOne(Price::class);
    }

    public function color()
    {
        return $this->hasOne(Color::class);
    }
}

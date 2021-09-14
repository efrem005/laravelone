<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function getCategory(): Collection
    {
        return \DB::table($this->table)
            ->select(\DB::raw('categories.id, categories.title, categories.slag, count(news.category_id) as count'))
            ->leftJoin('news', 'news.category_id', '=', 'categories.id')
            ->groupBy('categories.id')
            ->get();
    }

    public function getCategoryOne(int $id)
    {
        return \DB::table($this->table)->find($id);
    }

    public function countCategory(): int
    {
        return \DB::table($this->table)->count();
    }

    public function getCategorySearch(string $item)
    {
        return \DB::table($this->table)
            ->join('news', 'news.category_id', '=', 'categories.id')
            ->where('categories.slag', '=', $item)
            ->select('news.id', 'news.title as title', 'news.author', 'news.created_at', 'categories.title as category')
            ->get();
    }

}

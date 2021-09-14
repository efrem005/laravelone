<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews(): Collection
    {
        return \DB::table($this->table)->get();
    }

    public function getNewOne(int $id)
    {
        return \DB::table($this->table)->find($id);
    }

    public function countNews(): int
    {
        return \DB::table($this->table)->count();
    }

    public function getNewsLimit($page): Collection
    {
        return \DB::table($this->table)->limit(6)->offset($page * 6)->get();
    }

}

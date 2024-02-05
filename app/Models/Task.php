<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'long_description'];

    public function toggleComplete()
    {
        $this->completed = !$this->completed;
        $this->save();
    }

    public function scopeTitle(Builder $query, string $title): Builder
    {
        return $query->where('title', 'LIKE', '%' . $title . '%');
    }

    public function scopeCompleted(Builder $query): Builder|QueryBuilder
    {
        return $query->latest()->where('completed', 1);
    }

    public function scopeNotCompleted(Builder $query): Builder|QueryBuilder
    {
        return $query->latest()->where('completed', 0);
    }


}

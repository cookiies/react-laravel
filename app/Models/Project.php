<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
        ];
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}

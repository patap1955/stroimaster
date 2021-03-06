<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public static function menu()
    {
        return self::all();
    }

    public static function pageShow($view)
    {
        return self::where('slug', $view)->first();
    }
}

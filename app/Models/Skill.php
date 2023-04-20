<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "color"
    ];
    public static function getAvailableBackgroundColor(){
        $element = json_decode(File::get(resource_path('json/costomization.json')));
        return $element->backgrounds;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "description",
        "icon_name",
        "color"
    ];
    public static function getAvailableTextColor(){
        $element = json_decode(File::get(resource_path('json/costomization.json')));
        return $element->texts;

    }

    public static function getAvailableIcons(){
        $element = json_decode(File::get(resource_path('json/costomization.json')));
        return $element->icons;

    }
}

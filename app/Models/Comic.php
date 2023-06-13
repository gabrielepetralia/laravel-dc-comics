<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'series',
      'type',
      'sale_date',
      'price',
      'thumb',
      'artists',
      'writers',
      'description',
      'slug'
    ];

    public static function generateSlug($str)
    {

      $slug = Str::slug($str, '-');
      $original_slug = $slug;
      $slug_exixts = Comic::where('slug', $slug)->first();
      $c = 1;
      while ($slug_exixts) {
        $slug = $original_slug . '-' . $c;
        $slug_exixts = Comic::where('slug', $slug)->first();
        $c++;
      }

      return $slug;
    }
}

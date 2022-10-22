<?php

namespace App\Traits\Models;

use Illuminate\Database\Eloquent\Model;

trait HasSlug
{

    protected static function bootHasSlug()
    {
        static::creating(function (Model $model) {
            $model->slug = $model->slug
                ?? str($model->{self::slugFrom()})
                    ->slug()
                    ->pipe(function ($str) {
                        return self::slugIndex($str);
                    });
        });
    }

    public static function slugFrom() : string
    {
        return 'title';
    }

    public static function slugIndex(string $string): string
    {
        $count = self::where('slug', 'like', $string . '%')->count();
        return $count ? $string . '-' . $count : $string;
    }

}

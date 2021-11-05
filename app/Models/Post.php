<?php

namespace App\Models;

use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        self::observe(PostObserver::class);
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }

    public function getTitleAttribute($title){
        switch (app()->getLocale()) {
            case 'en':
                $title = $this->title_en;
                break;
            case 'ru':
                $title = $this->title_ru;
                break;
            default:
                $title = $this->title_uz;
                break;
        }
        return $title;
    }

    public function getTextAttribute($text){
        switch (app()->getLocale()) {
            case 'en':
                $text = $this->text_en;
                break;
            case 'ru':
                $text = $this->text_ru;
                break;
            default:
                $text = $this->text_uz;
                break;
        }
        return $text;
    }
}

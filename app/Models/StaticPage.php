<?php

namespace App\Models;

use App\Observers\StaticPageObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    use HasFactory;

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        self::observe(StaticPageObserver::class);
    }

    protected $guarded = [];

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

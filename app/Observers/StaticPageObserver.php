<?php

namespace App\Observers;
use App\Models\StaticPage;

class StaticPageObserver
{
    /**
     * Handle the StaticPage "creating" event.
     *
     * @param  \App\Models\StaticPage  $page
     * @return void
     */
    public function creating(StaticPage $page)
    {
        $this->setSlug($page);
        $this->setTitle($page);
        $this->setUser($page);
    }

    /**
     * Handle the StaticPage "updating" event.
     *
     * @param  \App\Models\StaticPage  $page
     * @return void
     */
    public function updating(StaticPage $page)
    {
        $this->setSlug($page);
        $this->setTitle($page);
    }

    private function setSlug(StaticPage $page)
    {
        if (empty($page->slug)) {
            $page->slug = \Str::slug($page->title_uz);
        }
    }

    private function setTitle(StaticPage $page)
    {
        if ($page->isClean('title_ru')) {
            $page->title_ru = $page->title_uz;
        }

        if ($page->isClean('title_en')) {
            $page->title_en = $page->title_uz;
        }
    }

    private function setUser(StaticPage $page)
    {
        $page->user_id = auth()->id();
    }
}

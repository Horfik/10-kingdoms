<?php

namespace App\Observers;

use App\Models\Art;
use App\Services\ArtService;
use App\Services\Interfaces\ArtServiceInterface;
use Illuminate\Support\Str;

class ArtObserver
{
    public function __construct(private ArtServiceInterface $service)
    {
    }

    public function creating(Art $art): void
    {
        $art->slug = $this->getSlug($art->title);
    }

    public function updating(Art $art): void
    {
        if ($art->isDirty('title')) {
            $art->slug = $this->getSlug($art->title);
        }
    }

    public function getSlug(string $title, int $i = 0): string
    {
        $slug = Str::slug($title.$i > 0 ? '-'.$i : '');
        if ($this->service->getBySlug($slug)) {
            $slug = $this->getSlug($title, $i++);
        }

        return $slug;
    }
}

<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Art;

use App\Models\Art;
use App\MoonShine\Resources\Art\Pages\ArtDetailPage;
use App\MoonShine\Resources\Art\Pages\ArtFormPage;
use App\MoonShine\Resources\Art\Pages\ArtIndexPage;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Attributes\Icon;

/**
 * @extends ModelResource<Art, ArtIndexPage, ArtFormPage, ArtDetailPage>
 */
#[Icon('film')]
class ArtResource extends ModelResource
{
    protected string $model = Art::class;

    protected string $title = 'Искусства';

    protected string $column = 'title';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ArtIndexPage::class,
            ArtFormPage::class,
            ArtDetailPage::class,
        ];
    }
}

<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Kingdom;

use App\Models\Kingdom;
use App\MoonShine\Resources\Kingdom\Pages\KingdomDetailPage;
use App\MoonShine\Resources\Kingdom\Pages\KingdomFormPage;
use App\MoonShine\Resources\Kingdom\Pages\KingdomIndexPage;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Attributes\Icon;

/**
 * @extends ModelResource<Kingdom, KingdomIndexPage, KingdomFormPage, KingdomDetailPage>
 */
#[Icon('building-library')]
class KingdomResource extends ModelResource
{
    protected string $model = Kingdom::class;

    protected string $title = 'Королевства';

    protected string $column = 'name';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            KingdomIndexPage::class,
            KingdomFormPage::class,
            KingdomDetailPage::class,
        ];
    }
}

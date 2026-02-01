<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Kingdom;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kingdom;
use App\MoonShine\Resources\Kingdom\Pages\KingdomIndexPage;
use App\MoonShine\Resources\Kingdom\Pages\KingdomFormPage;
use App\MoonShine\Resources\Kingdom\Pages\KingdomDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;
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

<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Race;

use Illuminate\Database\Eloquent\Model;
use App\Models\Race;
use App\MoonShine\Resources\Race\Pages\RaceIndexPage;
use App\MoonShine\Resources\Race\Pages\RaceFormPage;
use App\MoonShine\Resources\Race\Pages\RaceDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Support\Attributes\Icon;

/**
 * @extends ModelResource<Race, RaceIndexPage, RaceFormPage, RaceDetailPage>
 */
#[Icon('user-group')]
class RaceResource extends ModelResource
{
    protected string $model = Race::class;

    protected string $title = 'Races';

    protected string $column = 'title';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            RaceIndexPage::class,
            RaceFormPage::class,
            RaceDetailPage::class,
        ];
    }
}

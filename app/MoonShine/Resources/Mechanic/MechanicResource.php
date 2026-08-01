<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Mechanic;

use App\Models\Mechanic;
use App\MoonShine\Resources\Mechanic\Pages\MechanicIndexPage;
use App\MoonShine\Resources\Mechanic\Pages\MechanicFormPage;
use App\MoonShine\Resources\Mechanic\Pages\MechanicDetailPage;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Support\Attributes\Icon;
use MoonShine\UI\Fields\Checkbox;

/**
 * @extends ModelResource<Mechanic, MechanicIndexPage, MechanicFormPage, MechanicDetailPage>
 */
#[Icon('cog-8-tooth')]
class MechanicResource extends ModelResource
{
    protected string $model = Mechanic::class;

    protected string $title = 'Механики';

    protected string $column = 'title';

    protected bool $saveQueryState = true;

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            MechanicIndexPage::class,
            MechanicFormPage::class,
            MechanicDetailPage::class,
        ];
    }

    protected function filters(): iterable
    {
        return [
            Checkbox::make('Континент', 'is_continent'),
            Checkbox::make('Фэйри', 'is_fairy'),
        ];
    }
}

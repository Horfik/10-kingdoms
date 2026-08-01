<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Organization;

use App\Models\Organization;
use App\MoonShine\Resources\Organization\Pages\OrganizationDetailPage;
use App\MoonShine\Resources\Organization\Pages\OrganizationFormPage;
use App\MoonShine\Resources\Organization\Pages\OrganizationIndexPage;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Attributes\Icon;

/**
 * @extends ModelResource<Organization, OrganizationIndexPage, OrganizationFormPage, OrganizationDetailPage>
 */
#[Icon('building-office')]
class OrganizationResource extends ModelResource
{
    protected string $model = Organization::class;

    protected string $title = 'Организации';

    protected string $column = 'name';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            OrganizationIndexPage::class,
            OrganizationFormPage::class,
            OrganizationDetailPage::class,
        ];
    }
}

<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\User;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\MoonShine\Resources\User\Pages\UserIndexPage;
use App\MoonShine\Resources\User\Pages\UserFormPage;
use App\MoonShine\Resources\User\Pages\UserDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Support\Attributes\Icon;

/**
 * @extends ModelResource<User, UserIndexPage, UserFormPage, UserDetailPage>
 */
#[Icon('users')]
class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $column = 'name';
    public function getTitle(): string
    {
        return __('Users');
    }

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            UserIndexPage::class,
            UserFormPage::class,
            UserDetailPage::class,
        ];
    }
}

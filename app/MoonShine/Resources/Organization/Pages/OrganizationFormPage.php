<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Organization\Pages;

use App\Enums\OrganizationTypeEnum;
use App\MoonShine\Resources\Organization\OrganizationResource;
use Illuminate\Validation\Rule;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Support\ListOf;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Checkbox;
use MoonShine\UI\Fields\Enum;
use MoonShine\UI\Fields\Text;
use Throwable;

/**
 * @extends FormPage<OrganizationResource>
 */
class OrganizationFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                Text::make('Название', 'name'),
                TinyMce::make('Описание', 'description')->locale('ru'),
                Checkbox::make('Континент', 'is_continent'),
                Checkbox::make('Фэйри', 'is_fairy'),
                Enum::make('Тип', 'type')->attach(OrganizationTypeEnum::class),
            ]),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    protected function formButtons(): ListOf
    {
        return parent::formButtons();
    }

    protected function rules(DataWrapperContract $item): array
    {
        /** @phpstan-ignore-next-line  */
        return [
            'name' => 'string|required|max:255',
            'description' => 'string|required|max:5000',
            'is_continent' => 'required|boolean',
            'is_fairy' => 'required|boolean',
            'type' => ['required', Rule::enum(OrganizationTypeEnum::class)],
        ];
    }

    /**
     * @param  FormBuilder  $component
     * @return FormBuilder
     */
    protected function modifyFormComponent(FormBuilderContract $component): FormBuilderContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer(),
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer(),
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer(),
        ];
    }
}

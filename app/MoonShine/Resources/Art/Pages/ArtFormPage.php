<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Art\Pages;

use App\Enums\ArtTypeEnum;
use App\MoonShine\Resources\Art\ArtResource;
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
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use Throwable;

/**
 * @extends FormPage<ArtResource>
 */
class ArtFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Название', 'title')->required(),
                TinyMce::make('Описание', 'description')->required(),
                Text::make('Бросок', 'attributes')->required(),
                Checkbox::make('Континент', 'is_continent'),
                Checkbox::make('Фэйри', 'is_fairy'),
                Checkbox::make('Доступно со старта', 'is_available_from_start'),
                Enum::make('Тип', 'type')->attach(ArtTypeEnum::class)->required(),
            ]),
            Box::make('1 точка', [
                Text::make('Название', 'first_stage_name')->required(),
                TinyMce::make('Описание', 'first_stage_description')->required(),
                TinyMce::make('Нюансы', 'first_stage_condition'),
            ]),
            Box::make('2 точка', [
                Text::make('Название', 'second_stage_name')->required(),
                TinyMce::make('Описание', 'second_stage_description')->required(),
                TinyMce::make('Нюансы', 'second_stage_condition'),
            ]),
            Box::make('3 точка', [
                Text::make('Название', 'third_stage_name')->required(),
                TinyMce::make('Описание', 'third_stage_description')->required(),
                TinyMce::make('Нюансы', 'third_stage_condition'),
            ]),
            Box::make('4 точка', [
                Text::make('Название', 'fourth_stage_name')->required(),
                TinyMce::make('Описание', 'fourth_stage_description')->required(),
                TinyMce::make('Нюансы', 'fourth_stage_condition'),
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
            'title' => 'string|required|max:255',
            'description' => 'string|required|max:5000',
            'is_continent' => 'required|boolean',
            'is_fairy' => 'required|boolean',
            'is_available_from_start' => 'required|boolean',
            'attributes' => 'string|required|max:1000',
            'type' => ['required', Rule::enum(ArtTypeEnum::class)],
            'first_stage_name' => 'string|required|max:255',
            'first_stage_description' => 'string|required|max:5000',
            'first_stage_condition' => 'string|required|max:5000',
            'second_stage_name' => 'string|required|max:255',
            'second_stage_description' => 'string|required|max:5000',
            'second_stage_condition' => 'string|required|max:5000',
            'third_stage_name' => 'string|required|max:255',
            'third_stage_description' => 'string|required|max:5000',
            'third_stage_condition' => 'string|required|max:5000',
            'fourth_stage_name' => 'string|required|max:255',
            'fourth_stage_description' => 'string|required|max:5000',
            'fourth_stage_condition' => 'string|required|max:5000',

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

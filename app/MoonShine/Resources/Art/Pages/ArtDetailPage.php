<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Art\Pages;

use App\Enums\ArtTypeEnum;
use App\MoonShine\Resources\Art\ArtResource;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Support\ListOf;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\UI\Fields\Checkbox;
use MoonShine\UI\Fields\Enum;
use MoonShine\UI\Fields\Fieldset;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use Throwable;

/**
 * @extends DetailPage<ArtResource>
 */
class ArtDetailPage extends DetailPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [

            ID::make(),
            Text::make('Название', 'title'),
            TinyMce::make('Описание', 'description'),
            Text::make('Бросок', 'attributes'),
            Checkbox::make('Континент', 'is_continent'),
            Checkbox::make('Фэйри', 'is_fairy'),
            Checkbox::make('Доступно со старта', 'is_available_from_start'),
            Enum::make('Тип', 'type')->attach(ArtTypeEnum::class)->required(),

            Fieldset::make('1 точка', [
                Text::make('Название', 'first_stage_name'),
                TinyMce::make('Описание', 'first_stage_description'),
                TinyMce::make('Нюансы', 'first_stage_condition'),
            ]),
            Fieldset::make('2 точка', [
                Text::make('Название', 'second_stage_name'),
                TinyMce::make('Описание', 'second_stage_description'),
                TinyMce::make('Нюансы', 'second_stage_condition'),
            ]),
            Fieldset::make('3 точка', [
                Text::make('Название', 'third_stage_name'),
                TinyMce::make('Описание', 'third_stage_description'),
                TinyMce::make('Нюансы', 'third_stage_condition'),
            ]),
            Fieldset::make('4 точка', [
                Text::make('Название', 'fourth_stage_name'),
                TinyMce::make('Описание', 'fourth_stage_description'),
                TinyMce::make('Нюансы', 'fourth_stage_condition'),
            ]),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    /**
     * @param  TableBuilder  $component
     * @return TableBuilder
     */
    protected function modifyDetailComponent(ComponentContract $component): ComponentContract
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

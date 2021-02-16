<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Article::class;

    public static $group = 'Productos';

    public static function label() {

        return 'Productos';
       }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'NART',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        //{\"ID_CART\":26,\"CART\":\"F-01\",\"NART\":\"EDREDON CON CORTINAS\",\"CATEGORIA\":\"BLANCOS\",\"MARCA\":\"MIAMI\",\"MODELO\":null,\"COLOR\":null,\"∑\":\"MATRIMONIAL\",\"PRECIOA\":null,\"PRECIOB\":null,\"PRECIOC\":null,\"PRECIOD\":null,\"PRECIOE\":null,\"PRECIOF\":null,\"EXTENCION\":\"jpg\",\"PROV\":1,\"FAB\":0,\"PROMO\":0,\"PMES\":0,\"IDAct\":1}
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('CART', 'CART')->required()->sortable(),
            Text::make('NOMBRE', 'NART')->sortable()->required(),
            Text::make('CATEGORIA', 'CATEGORIA')->sortable(),
            Text::make('MARCA', 'MARCA')->sortable(),
            Text::make('MODELO', 'MODELO')->sortable(),
            Text::make('COLOR', 'COLOR')->sortable(),
            Text::make('MEDIDAS', 'MEDIDAS')->sortable(),
            Number::make('PRECIOA', 'PRECIOA'),
            Number::make('PRECIOB', 'PRECIOB'),
            Number::make('PRECIOC', 'PRECIOC'),
            Number::make('PRECIOD', 'PRECIOD'),
            Number::make('PRECIOE', 'PRECIOE'),
            Number::make('PRECIOF', 'PRECIOF'),
            Boolean::make('PROV')
            ->trueValue('1')
            ->falseValue('0'),
            Boolean::make('FAB')
            ->trueValue('1')
            ->falseValue('0'),
            Boolean::make('PROMO')
            ->trueValue('1')
            ->falseValue('0'),
            Boolean::make('PMES')
            ->trueValue('1')
            ->falseValue('0'),
            Image::make('Imagen','image')->disk('public')->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}

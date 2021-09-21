<?php

namespace App\Widgets;

use App\Produto;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;   
class BBCDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {  

        return view('widgets.b_b_c_dimmer', array_merge($this->config, [
            'icon'   => 'voyager-play',
            'title'  => "Acessar o site da BBC UK",
            'text'   => __("Click no link abaixo para acessar o site da BBC"),
            'button' => [
                'text' => __('GO'),
                'link' => 'https://www.bbc.com.uk',
            ],
            'image' => asset(''),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Produto::first());
    }
}

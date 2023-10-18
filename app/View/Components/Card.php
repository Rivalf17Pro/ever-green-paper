<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $description;
    public $content;
    public $img;
    public $alt;
    public $button;
    public $icon;
    public $url;
    public $date;


    public function __construct($title, $description, $content = null, $img = null, $alt = null, $button = null, $icon = null, $url = null, $date = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->content = $content;
        $this->img = $img;
        $this->alt = $alt;
        $this->button = $button;
        $this->icon = $icon;
        $this->url = $url;
        $this->date = $date;
    }

    /**
     * Get the view / contents that redescriptionsent the component.
     */
    public function render(): View|Closure
    {
        return view('_components.card');
    }
}

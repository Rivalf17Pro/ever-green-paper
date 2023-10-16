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

    public string $title;
    public string $pre;
    public string $content;
    public string $img;
    public string $alt;
    public string $text_button;
    public string $icon;
    public string $url;
    public string $date;


    public function __construct(string $title, string $pre, string $content = null, string $img = null, string $alt = null, string $text_button, string $icon, string $url, string $date = null)
    {
        $this->title = $title;
        $this->pre = $pre;
        $this->content = $content;
        $this->img = $img;
        $this->alt = $alt;
        $this->text_button = $text_button;
        $this->icon = $icon;
        $this->url = $url;
        $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}

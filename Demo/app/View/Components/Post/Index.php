<?php

namespace App\View\Components\Post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    // grabbing variable
    public $post;
    /**
     * Create a new component instance.
     */
    public function __construct($post)
    {
        //
        $this->post = $post;
    }


    // You can create the methods here and they are going to be accessible

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post.index');
    }
}

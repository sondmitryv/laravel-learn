<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        [
            'header' => 'Heading 1',
            'content' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                        tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna
                        mollis euismod. Donec sed odio dui. ',
            'button' => 'View details >>'
        ],
        [
            'header' => 'Heading 2',
            'content' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                        tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna
                        mollis euismod. Donec sed odio dui. ',
            'button' => 'All details >>'
        ],
        [
            'header' => 'Heading 3',
            'content' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                        tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna
                        mollis euismod. Donec sed odio dui. ',
            'button' => 'Show details >>'
        ],
    ];

    public function index()
    {
        return view('products.index');
    }

    public function show($id)
    {
        $product = $this->products[$id];
        return view('products.show', compact('product'));
    }

}

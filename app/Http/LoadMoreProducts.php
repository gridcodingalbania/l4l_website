<?php
namespace App\Http;

use App\Base\Ajax;
use Symfony\Component\HttpFoundation\Request;
use App\Model\Product;

class LoadMoreProducts extends Ajax
{
    public $protection = ['public', 'private'];

    public function handle(Request $request)
    {
        $per_page = request()->get('per_page');
        $offset = request()->get('offset');
        $args = [
            'limit' => $per_page,
            'offset' => $offset
        ];
        $products = wc_get_products($args);
        
        if(!$products){
            wp_send_json_error();
        }
        $products = $this->formatProducts($products);
        $html = view_html('products.product-items', ['products' => $products]);
        wp_send_json_success($html);
    }

    public function formatProducts($products){
        $return = [];
        foreach($products as $product){
            $_product = Product::toCard($product->get_id());
            $return[] = $_product;
        }
        return $return;
    }
}
<?php
namespace App\Model;

use App\Base\Singleton;

class Product extends Singleton
{
    public static function toCard($product_id)
    {
        $product = wc_get_product($product_id);
        return [
            'name' =>$product->get_name(),
            'link' => $product->get_permalink(),
            'regular_price' =>$product->get_regular_price(),
            'sale_price' =>$product->get_sale_price(),
            'price' =>$product->get_price(),
            'image' => get_featured_image($product_id),
            'gallery' => self::getGallery($product_id),
            'short_description' =>$product->get_short_description(),
            'description' =>$product->get_description(),
            'category_ids' =>$product->get_category_ids(),
            'category_names' => self::getCategoryNames($product_id),
            'add_to_cart_url' => $product->add_to_cart_url(),
        ];
    }

    public static function toSingle($product_id)
    {
        $product = wc_get_product($product_id);
        return [
            'name' =>$product->get_name(),
            'link' => $product->get_permalink(),
            'regular_price' =>$product->get_regular_price(),
            'sale_price' =>$product->get_sale_price(),
            'price' =>$product->get_price(),
            'image' => get_featured_image($product_id),
            'short_description' =>$product->get_short_description(),
            'description' =>$product->get_description(),
            'category_ids' =>$product->get_category_ids(),
            'category_names' => self::getCategoryNames($product_id),
            'add_to_cart_url' => $product->add_to_cart_url(),
            'gallery' => self::getGallery($product_id),
        ];
    }

    public static function getGallery($product_id)
    {
        $attachment_ids = explode(',',get_post_meta($product_id, '_product_image_gallery',  true));
        if(!$attachment_ids){
            return [];
        }
        $gallery = [];
        foreach($attachment_ids as $attachment_id){
            $gallery[] = wp_get_attachment_url($attachment_id);
        }
        return $gallery;
    }

    public static function getCategoryNames($product_id)
    {
        $terms = wp_get_post_terms($product_id, 'product_cat', ['fields' => 'names']);
        return $terms;
    }
}
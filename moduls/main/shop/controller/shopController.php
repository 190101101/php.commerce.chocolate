<?php 

namespace moduls\main\shop\controller;
use moduls\main\shop\model\shopModel;
use core\controller;

class shopController extends controller
{
    private $shop;
    
    public function __construct()
    {
        parent::__construct();
        $this->shop = new shopModel();
    }

    public function shopProduct()
    {
        $this->layout('main', 'main', 'shop', 'shop', 'shop', [
            'product' => $this->shop->shopProduct()
        ]);
    }

    public function shopProductLoadMore($start)
    {
        $this->shop->shopProductLoadMore($start);
    }

    public function productByCategory($category_slug)
    {   
        $this->layout('main', 'main', 'shop', 'shop', 'productByCategory', [
            'product' => $this->shop->productByCategory($category_slug),
            'category' => $this->shop->category($category_slug)
        ]);
    }

    public function ProductByCategoryLoadMore($category_id, $start)
    {
        $this->shop->ProductByCategoryLoadMore($category_id, $start);
    }

    public function product($product_id)
    {
        isXmlHttpRequest('shop');
        $this->view('main', 'shop', 'shop', 'product', [
            'product' => $product = $this->shop->product($product_id),
            'image' => $this->shop->image($product->product_id)
        ]);
    }
}


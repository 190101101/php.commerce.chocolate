<?php 

namespace moduls\admin\product\controller;
use moduls\admin\product\model\productModel;
use core\controller;

class productController extends controller
{
    public $product;
    
    public function __construct()
    {
        parent::__construct();
        $this->product = new productModel();
    }

    public function product()
    {
        $this->layout('admin', 'admin', 'product', 'product', 'product', [
            'product' => $this->product->product()
        ]);
    }

    public function productByCategory($category_slug)
    {
        $this->layout('admin', 'admin', 'product', 'product', 'productByCategory', [
            'productByCategory' => $this->product->productByCategory($category_slug)
        ]);
    }

    public function productCreate()
    {
        isXmlHttpRequest('admin/product');
        $this->view('admin', 'product', 'product', 'productCreate', [
            'category' => $this->product->category()
        ]);
    }

    public function __productCreate()
    {
        $this->product->__productCreate();
    }

    public function productUpdate($id)
    {
        isXmlHttpRequest('admin/product');
        $this->view('admin', 'product', 'product', 'productUpdate', [
            'product' => $this->product->productUpdate($id),
            'category' => $this->product->category()
        ]);
    }

    public function __productUpdate()
    {
        $this->product->__productUpdate();
    }

    public function __status($id)
    {
        $this->product->__status($id);
    }

    public function _delete($id)
    {
        $this->product->_delete($id);
    }
}


<?php 

namespace moduls\main\shop\model;
use core\model;
use \library\robot;

class shopModel extends model
{
    public function shopProduct()
    {
        return $this->db->t2where('product', 'category', 
            "product.product_status=1 && category.category_status=1 
            ORDER by product_id ASC LIMIT 12", [], 2);
    }

    public function shopProductLoadMore(int $start)
    {
        $limit = 4;

        $return = $this->db->t2where('product', 'category', 
            "product.product_status=1 && category.category_status=1
            ORDER by product.product_id ASC LIMIT {$start}, {$limit}", [], 2);

        $option = [
            'count' => $start + count($return),
        ];

        $start = $start + $limit;
        $counter = $this->db->t1where('product', 
            "product_status=1 ORDER by product_id ASC LIMIT {$start}, {$limit}", [], 2);

        if($counter == TRUE)
        {
            $option += [
                'code' => '200'
            ];            
        }
        else
        {
            $option += [
                'code' => '404'
            ];            
        }

        if($return == TRUE)
        {
            _message(200, $this->return->success, $return, $option);
        }
        else
        {            
            _message(300, $this->return->product_not_found);
        }
    }
    

    public function productByCategory($category_slug)
    {
        $category = $this->db->t1where('category', 'category_slug=?', [$category_slug]);

        if(!$category)
        {
            redirect('category', 1);
        }
        
        return $this->db->t2where('product', 'category', 
            "product.product_status=1 && category.category_status=1 
                && category.category_id=?
            ORDER by product_id ASC LIMIT 16", [$category->category_id], 2);
    }

    public function ProductByCategoryLoadMore($category_id, int $start)
    {
        $limit = 4;

        $return = $this->db->t2where('product', 'category', 
            "product.product_status=1 && category.category_status=1
            && category.category_id=? ORDER by product.product_id 
            ASC LIMIT {$start}, {$limit}", [$category_id], 2);

        $option = [
            'count' => $start + count($return),
        ];

        $start = $start + $limit;
        $counter = $return;

        if($counter == TRUE)
        {
            $option += [
                'code' => '200'
            ];            
        }
        else
        {
            $option += [
                'code' => '404'
            ];            
        }

        if($return == TRUE)
        {
            _message(200, $this->return->success, $return, $option);
        }
        else
        {            
            _message(300, $this->return->product_not_found);
        }
    }
    


    public function category($category_slug)
    {   
        return $this->db->t1where('category', 'category_slug=?', [
            $category_slug
        ]);
    }

    public function product($product_id)
    {
        $product = $this->db->t1where('product', 'product_id=?', [$product_id]);
        
        if($product == FALSE)
        {
            _message(404, $this->return->product_not_found);
        }

        $this->db->whereupdate('product', 'product_view = product_view + 1', 'product_id=?',[
            $product->product_id
        ]);

        return $product;
    }

    public function image($product_id)
    {
        return $this->db->t2where('image', 'product', 'product.product_id=?', [
            $product_id
        ], 2);
    }    
}

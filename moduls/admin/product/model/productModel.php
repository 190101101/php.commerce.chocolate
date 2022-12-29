<?php 

namespace moduls\admin\product\model;
use core\model;
use \Valitron\Validator as v;
use \library\file as f;

class productModel extends model
{
    public function product()
    {
        return $this->db->t2desc('product', 'category', 2);
    }

    public function productByCategory($category_slug)
    {
        return $this->db->t2where('product', 'category', 'category_slug=? ORDER BY product.product_id DESC', [
            $category_slug
        ], 2);
    }

    public function __productCreate()
    {
        $data = [];
        $data = peel($_POST);

        $v = new v($data);

        $v->rule('required', [
            'category_id',
            'product_name',
            'product_description',
            'product_content',
            'product_about',
            'product_price',
            'product_stock',
            'product_portion',
        ]);

        if(!$v->validate()){
            _message(404, $this->return->valitron);
        }

        if(has_file($_FILES, 'product_image'))
        {
            $image = (new f)->set($_FILES, 'product', 'image')->get();

            if($image['status'] == FALSE){
                _message(404, $this->return->{$image['errors']});
            } 
            $data  += ['product_image' => $image['name']];
        }

        $data += ['product_slug' => seo($data['product_name'])];

        $product = $this->db->t1where('product', 'product_slug=?', [
            $data['product_slug']
        ]);

        if($product)
        {
            _message(300, 'product'.$this->return->already);
        }

        $return = $this->db->create('product', $data);

        if($return['status'] == TRUE)
        {
            !isset($image) ?: (new f)->move($image);
            _message(200, 'product '.$this->return->created,
                $this->db->t2desc('product', 'category')
            );

        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function productUpdate($id)
    {
        return $this->db->t2where('product', 'category', 'product_id=?', [$id]);
    }

    public function __productUpdate()
    {
        $data = [];
        $POST = except($_POST, ['image_delete']);
        $data = peel($POST);

        $v = new v($data);

        $v->rule('required', [
            'category_id',
            'product_name',
            'product_description',
            'product_content',
            'product_about',
            'product_price',
            'product_stock',
            'product_portion',
            'product_id',
        ]);

        if(!$v->validate()){
            _message(404, $this->return->valitron);
        }

        if(has_file($_FILES, 'product_image'))
        {
            $image = (new f)->set($_FILES, 'product', 'image')->get();
            
            if($image['status'] == FALSE){
                _message(404, $this->return->{$image['errors']});
            }
            $data  += ['product_image' => $image['name']];
        }

        $data += ['product_updated_at' => date('Y-m-d H:i:s')];
        $data += ['product_slug' => seo($data['product_name'])];

        $product = $this->db->t1where('product', 'product_slug=? && product_id != ?', [
            $data['product_slug'], $data['product_id']
        ]);

        if($product)
        {
            _message(300, 'product'.$this->return->already);
        }

        $return = $this->db->update('product', $data, [
            'id' => 'product_id',
        ]);

        if($return['status'] == TRUE)
        {
            !isset($image) ?: (new f)->drop('product', $_POST['image_delete']);
            !isset($image) ?: (new f)->move($image);

            _message(200, 'product '.$this->return->updated, 
                $this->db->t2where('product', 'category', 'product_id=?', [$data['product_id']])
            );
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function __status($id)
    {
        $return = $this->db->whereupdate('product', 'product_status=?', 'product_id=?', [
            $this->db->t1where('product', 'product_id=?', [$id])->product_status == 0 ? 1 : 0, $id
        ]);

        return $return['status'] == 1 
            ? _message(200, $this->return->status_success) 
            : _message(404, $this->return->status_error);
    }

    public function _delete($id)
    {

        $product = $this->db->t1where('product', 'product_id=?', [$id]);

        $product_id = $product->product_id;

        $return = $this->db->wheredelete('product', 'product_id=?', [
            $product->product_id
        ]);

        if($return['status'] == TRUE)
        {
            $images = $this->db->t1where('image', 'product_id=?', [
                $product_id
            ], 2);

            if($images != false)
            {
                $this->db->wheredelete('image', 'product_id=?', [
                    $product_id
                ]);

                foreach($images as $image){
                    empty($image->image_image) ?: (new f)->drop('image', $image->image_image);
                }
            }

            empty($product->product_image) ?: (new f)->drop('product', $product->product_image);

            _message(200, 'product '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function category()
    {
        return $this->db->t1('category', 2);
    }
}

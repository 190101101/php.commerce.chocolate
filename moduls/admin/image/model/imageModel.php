<?php 

namespace moduls\admin\image\model;
use core\model;
use \Valitron\Validator as v;
use \library\file as f;

class imageModel extends model
{
    public function imageByProduct($product_id)
    {
        return $this->db->t2where('image', 'product', 'product.product_id=?', [
            $product_id
        ], 2);
    }

    public function imageLook($image_id)
    {
        return $this->db->t1where('image', 'image_id=?', [
            $image_id
        ]);
    }

    public function product($product_id)
    {
        return $this->db->t1where('product', 'product_id=?', [
            $product_id
        ]);
    }

    public function __imageCreate()
    {
        $FILES = [];    
        $last = $this->db->t1desc('image');

        for($i = 0; $i < count($_FILES['image_image']['name']); $i++){

            $FILES['image_image'] = [
                'type'     => $_FILES['image_image']['type'][$i],
                'tmp_name' => $_FILES['image_image']['tmp_name'][$i],
                'name'     => $_FILES['image_image']['name'][$i],
                'size'     => $_FILES['image_image']['size'][$i],
                'error'    => $_FILES['image_image']['error'][$i],
            ];

            $image = (new f)->set($FILES, 'image', 'image')->get();
            if($image['status'] == FALSE){
                _message(404, $this->return->{$image['errors']});
            } 
            $data = [
                'image_image' => $image['name'],
                'product_id' => $_POST['product_id'],
            ]; 

            $return = $this->db->create('image', $data);
            $return['status'] == FALSE ?: (new f)->move($image);
        } 

        if($last != false)
        {
            $image = $this->db->t1where('image', 'image_id > ?', [
                $last->image_id
            ], 2);
        }else
        {
            $image = $this->db->t1desc('image', 2);
        }

        if($return['status'] == TRUE)
        {
            _message(200, $this->return->upload, $image);
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function __status($id)
    {
        $return = $this->db->whereupdate('image', 'image_status=?', 'image_id=?', [
            $this->db->t1where('image', 'image_id=?', [$id])->image_status == 0 ? 1 : 0, $id
        ]);

        return $return['status'] == 1 
            ? _message(200, $this->return->status_success) 
            : _message(404, $this->return->status_error);
    }

    public function _delete($id)
    {
        $image = $this->db->t1where('image', 'image_id=?', [$id]);
        $return = $this->db->wheredelete('image', 'image_id=?', [
            $image->image_id
        ]);

        if($return['status'] == TRUE)
        {
            empty($image->image_image) ?: (new f)->drop('image', $image->image_image);
            _message(200, 'image '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}

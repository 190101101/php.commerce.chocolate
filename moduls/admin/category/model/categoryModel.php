<?php 

namespace moduls\admin\category\model;
use core\model;
use \Valitron\Validator as v;
use \library\file as f;

class categoryModel extends model
{
    public function category()
    {
        return $this->db->t1desc('category', 2);
    }

    public function __categoryCreate()
    {
        $data = [];
        $data = peel($_POST);

        $v = new v($data);

        $v->rule('required', [
            'category',
            'category_title',
            'category_subtitle',
            'category_description',
            'category_content',
        ]);

        if(!$v->validate()){
            _message(404, $this->return->valitron);
        }

        if(has_file($_FILES, 'category_image'))
        {
            $image = (new f)->set($_FILES, 'category', 'image')->get();

            if($image['status'] == FALSE){
                _message(404, $this->return->{$image['errors']});
            } 
            $data  += ['category_image' => $image['name']];
        }

        $data += ['category_slug' => seo($data['category'])];
        $return = $this->db->create('category', $data);

        if($return['status'] == TRUE)
        {
            !isset($image) ?: (new f)->move($image);
            _message(200, 'category '.$this->return->created,
                $this->db->t1desc('category')
            );

        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function categoryUpdate($id)
    {
        return $this->db->t1where('category', 'category_id=?', [$id]);
    }

    public function __categoryUpdate()
    {
        $data = [];
        $POST = except($_POST, ['image_delete']);
        $data = peel($POST);

        $v = new v($data);

        $v->rule('required', [
            'category',
            'category_title',
            'category_subtitle',
            'category_description',
            'category_content',
            'category_id',
        ]);

        if(!$v->validate()){
            _message(404, $this->return->valitron);
        }

        if(has_file($_FILES, 'category_image'))
        {
            $image = (new f)->set($_FILES, 'category', 'image')->get();
            
            if($image['status'] == FALSE){
                _message(404, $this->return->{$image['errors']});
            }
            $data  += ['category_image' => $image['name']];
        }

        $data += ['category_slug' => seo($data['category'])];

        $return = $this->db->update('category', $data, [
            'id' => 'category_id',
        ]);

        if($return['status'] == TRUE)
        {
            !isset($image) ?: (new f)->drop('category', $_POST['image_delete']);
            !isset($image) ?: (new f)->move($image);

            _message(200, 'category '.$this->return->updated, 
                $this->db->t1where('category', 'category_id=?', [$data['category_id']])
            );
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function __status($id)
    {
        $status = $this->db->t1where('category', 'category_id=?', [$id])->category_status == 0 ? 1 : 0;

        $return = $this->db->whereupdate('category', 'category_status=?', 'category_id=?', [
            $status, $id
        ]);

        if($return['status'] == 1)
        {
            $this->db->whereupdate('product', 'product_status=?', 'category_id=?', [
                $status, $id
            ]); 

            _message(200, $this->return->status_success);
        }else
        {
            _message(404, $this->return->status_error);
        }
    }

    public function _delete($id)
    {
        $category = $this->db->t1where('category', 'category_id=?', [$id]);
        $return = $this->db->wheredelete('category', 'category_id=?', [$category->category_id]);

        if($return['status'] == TRUE)
        {
            $this->db->whereupdate('product', 'category_id=?', 'category_id=?', [
                1, $id
            ]); 

            empty($category->category_image) ?: (new f)->drop('category', $category->category_image);
            _message(200, 'category '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}

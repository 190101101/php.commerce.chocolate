<?php 

namespace moduls\admin\gallery\model;
use core\model;
use \Valitron\Validator as v;
use \library\file as f;

class galleryModel extends model
{
    public function gallery()
    {
        return $this->db->t1desc('gallery', 2);
    }

    public function __galleryCreate()
    {
        $FILES = [];    

        $last = $this->db->t1desc('gallery');

        for($i = 0; $i < count($_FILES['gallery_image']['name']); $i++){

            $FILES['gallery_image'] = [
                'tmp_name' => $_FILES['gallery_image']['tmp_name'][$i],
                'name'     => $_FILES['gallery_image']['name'][$i],
                'type'     => $_FILES['gallery_image']['type'][$i],
                'size'     => $_FILES['gallery_image']['size'][$i],
                'error'    => $_FILES['gallery_image']['error'][$i],
            ];

            $image = (new f)->set($FILES, 'gallery', 'image')->get();
            if($image['status'] == FALSE){
                _message(404, $this->return->{$image['errors']});
            }

            $data = [
                'gallery_image' => $image['name'],
            ]; 

            $return = $this->db->create('gallery', $data);
            $return['status'] == FALSE ?: (new f)->move($image);
        } 

        if($last != false)
        {
            $gallery = $this->db->t1where('gallery', 'gallery_id > ?', [
                $last->gallery_id
            ], 2);
        }else
        {
            $gallery = $this->db->t1desc('gallery', 2);
        }

        if($return['status'] == TRUE)
        {
            _message(200, $this->return->upload, $gallery);
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function _delete($id)
    {
        $gallery = $this->db->t1where('gallery', 'gallery_id=?', [$id]);
        $return = $this->db->wheredelete('gallery', 'gallery_id=?', [
            $gallery->gallery_id
        ]);

        if($return['status'] == TRUE)
        {
            empty($gallery->gallery_image) ?: (new f)->drop('gallery', $gallery->gallery_image);
            _message(200, 'gallery '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}

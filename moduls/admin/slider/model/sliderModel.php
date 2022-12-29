<?php 

namespace moduls\admin\slider\model;
use core\model;
use \Valitron\Validator as v;
use \library\file as f;

class sliderModel extends model
{
    public function slider()
    {
        return $this->db->t1desc('slider', 2);
    }

    public function __sliderCreate()
    {
        $FILES = [];   

        $last = $this->db->t1desc('slider');

        for($i = 0; $i < count($_FILES['slider_image']['name']); $i++){

           $FILES['slider_image'] = [
                'tmp_name' => $_FILES['slider_image']['tmp_name'][$i],
                'name'     => $_FILES['slider_image']['name'][$i],
                'type'     => $_FILES['slider_image']['type'][$i],
                'size'     => $_FILES['slider_image']['size'][$i],
                'error'    => $_FILES['slider_image']['error'][$i],
            ];


            $slider = (new f)->set($FILES, 'slider', 'image')->get();
            if($slider['status'] == FALSE){
                _message(404, $this->return->{$slider['errors']});
            }

            $data = [
                'slider_image' => $slider['name'],
            ]; 

            $return = $this->db->create('slider', $data);
            $return['status'] == FALSE ?: (new f)->move($slider);
        } 

        if($last != false)
        {
            $slider = $this->db->t1where('slider', 'slider_id > ?', [
                $last->slider_id
            ], 2);
        }else
        {
            $slider = $this->db->t1desc('slider', 2);
        }

        if($return['status'] == TRUE)
        {
            _message(200, $this->return->upload, $slider);
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function _delete($id)
    {
        $slider = $this->db->t1where('slider', 'slider_id=?', [$id]);
        $return = $this->db->wheredelete('slider', 'slider_id=?', [
            $slider->slider_id
        ]);

        if($return['status'] == TRUE)
        {
            empty($slider->slider_image) ?: (new f)->drop('slider', $slider->slider_image);
            _message(200, 'slider '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}

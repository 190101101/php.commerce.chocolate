<?php 

namespace moduls\admin\video\model;
use core\model;
use \Valitron\Validator as v;
use \library\file as f;

class videoModel extends model
{
    public function video()
    {
        return $this->db->t1desc('video', 2);
    }

    public function videoLook($video)
    {
        return $this->db->t1where('video', 'video_id=?', [$video]);
    }

    public function __videoCreate()
    {
        $data = [];
        $data = peel($_POST);

        if($data['video_type'] == 'main')
        {
            $type = $this->db->t1wherecount('video', 'video_id', 'video_type=?', ['main']);

            if($type->count > 0)
            {
                _message(404, 'главный видео уже существует');
            }
        }

        if(has_file($_FILES, 'video_image'))
        {
            $image = (new f)->set($_FILES, 'video', 'image')->get();

            if($image['status'] == FALSE){
                _message(404, $this->return->{$image['errors']});
            } 
            $data  += ['video_image' => $image['name']];
        }

        if(has_file($_FILES, 'video_video'))
        {
            $video = (new f)->set($_FILES, 'video', 'video')->get();

            if($video['status'] == FALSE){
                _message(404, $this->return->{$video['errors']});
            } 
            $data  += ['video_video' => $video['name']];
        }

        $return = $this->db->create('video', $data);

        if($return['status'] == TRUE)
        {
            !isset($image) ?: (new f)->move($image);
            !isset($video) ?: (new f)->move($video);
            _message(200, 'video '.$this->return->created,
                $this->db->t1desc('video')
            );

        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function __status($id)
    {
        $return = $this->db->whereupdate('video', 'video_status=?', 'video_id=?', [
            $this->db->t1where('video', 'video_id=?', [$id])->video_status == 0 ? 1 : 0, $id
        ]);

        return $return['status'] == 1 
            ? _message(200, $this->return->status_success) 
            : _message(404, $this->return->status_error);
    }

    public function _delete($id)
    {
        $video = $this->db->t1where('video', 'video_id=?', [$id]);
        $return = $this->db->wheredelete('video', 'video_id=?', [$video->video_id]);

        if($return['status'] == TRUE)
        {
            empty($video->video_image) ?: (new f)->drop('video', $video->video_image);
            empty($video->video_video) ?: (new f)->drop('video', $video->video_video);
            _message(200, 'video '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}

<?php 

namespace moduls\main\video\model;
use core\model;

class videoModel extends model
{
    public function video()
    {
        return $this->db->t1where('video', 
            'video_type=? ORDER by video_id ASC LIMIT 12', ['gallery'], 2);
    }

    public function videoLoadMore(int $start)
    {
        $limit = 4;

        $return = $this->db->t1where('video', 
            "video_type=? ORDER by video_id ASC LIMIT {$start}, {$limit}", ['gallery'], 2);

        $option = [
            'count' => $start + count($return),
        ];

        $start = $start + $limit;
        $counter = $this->db->t1where('video', 
            "video_type=? ORDER by video_id ASC LIMIT {$start}, {$limit}", ['gallery'], 2);

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
            _message(300, $this->return->not_found, false, $option);
        }
    }

    public function videoLook($video_id)
    {
        return $this->db->t1where('video', 'video_id=?', [$video_id]);
        $return == true ?: redirect('video');
        return $return;
    }
}

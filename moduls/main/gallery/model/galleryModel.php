<?php 

namespace moduls\main\gallery\model;
use core\model;

class galleryModel extends model
{
    public function gallery()
    {
        return $this->db->t1where('gallery', 
            'gallery_status=1 ORDER by gallery_id ASC LIMIT 12 ', [], 2);
    }

    public function galleryLoadMore(int $start)
    {
        $limit = 4;

        $return = $this->db->t1where('gallery', "gallery_status=1
            ORDER by gallery_id ASC LIMIT {$start}, {$limit}", [], 2);

        $option = [
            'count' => $start + count($return),
        ];

        $start = $start + $limit;
        $counter = $this->db->t1where('gallery', 
            "gallery_status=1 ORDER by gallery_id ASC LIMIT {$start}, {$limit}", [], 2);

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
            _message(300, $this->return->not_found);
        }
    }
}

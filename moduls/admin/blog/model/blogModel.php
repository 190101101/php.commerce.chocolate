<?php 

namespace moduls\admin\blog\model;
use core\model;
use \Valitron\Validator as v;
use \library\file as f;

class blogModel extends model
{
    public function blog()
    {
        return $this->db->t1desc('blog', 2);
    }

    public function __blogCreate()
    {
        $data = [];
        $data = peel($_POST);

        $v = new v($data);

        $v->rule('required', [
            'blog_title',
            'blog_subtitle',
            'blog_content',
        ]);

        valitronErrors($v);

        if(has_file($_FILES, 'blog_image'))
        {
            $image = (new f)->set($_FILES, 'blog', 'image')->get();

            if($image['status'] == FALSE){
                _message(404, $this->return->{$image['errors']});
            } 
            $data  += ['blog_image' => $image['name']];
        }

        $data += ['blog_slug' => seo($data['blog_title'])];

        $blog = $this->db->t1where('blog', 'blog_slug=?', [
            $data['blog_slug']
        ]);

        if($blog)
        {
            _message(300, 'blog'.$this->return->already);
        }

        $return = $this->db->create('blog', $data);

        if($return['status'] == TRUE)
        {
            !isset($image) ?: (new f)->move($image);
            _message(200, 'blog '.$this->return->created,
                $this->db->t1desc('blog')
            );

        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function blogUpdate($id)
    {
        return $this->db->t1where('blog', 'blog_id=?', [$id]);
    }

    public function __blogUpdate()
    {
        $data = [];
        $POST = except($_POST, ['image_delete']);
        $data = peel($POST);

        v::lang($_COOKIE['lang'] ?? 'ru');

        $v = new v($data);

        $v->rule('required', [
            'blog_title',
            'blog_subtitle',
            'blog_id',
            'blog_content',
        ]);

        valitronErrors($v);
        
        if(has_file($_FILES, 'blog_image'))
        {
            $image = (new f)->set($_FILES, 'blog', 'image')->get();
            
            if($image['status'] == FALSE){
                _message(404, $this->return->{$image['errors']});
            }
            $data  += ['blog_image' => $image['name']];
        }

        $data += ['blog_slug' => seo($data['blog_title'])];

        $blog = $this->db->t1where('blog', 'blog_slug=? && blog_id != ?', [
            $data['blog_slug'], $data['blog_id']
        ]);

        if($blog)
        {
            _message(300, 'blog'.$this->return->already);
        }

        $return = $this->db->update('blog', $data, [
            'id' => 'blog_id',
        ]);

        if($return['status'] == TRUE)
        {
            !isset($image) ?: (new f)->drop('blog', $_POST['image_delete']);
            !isset($image) ?: (new f)->move($image);

            _message(200, 'blog '.$this->return->updated, 
                $this->db->t1where('blog', 'blog_id=?', [$data['blog_id']])
            );
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function __status($id)
    {
        $return = $this->db->whereupdate('blog', 'blog_status=?', 'blog_id=?', [
            $this->db->t1where('blog', 'blog_id=?', [$id])->blog_status == 0 ? 1 : 0, $id
        ]);

        return $return['status'] == 1 
            ? _message(200, $this->return->status_success) 
            : _message(404, $this->return->status_error);
    }

    public function _delete($id)
    {
        $blog = $this->db->t1where('blog', 'blog_id=?', [$id]);
        $return = $this->db->wheredelete('blog', 'blog_id=?', [$blog->blog_id]);

        if($return['status'] == TRUE)
        {
            empty($blog->blog_image) ?: (new f)->drop('blog', $blog->blog_image);
            _message(200, 'blog '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}

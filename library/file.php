<?php 

namespace library;
use \Exception;

class file
{
    private $error, 
            $tmp, 
            $name, 
            $file, 
            $size, 
            $new_name, 
            $errors,
            $mode,
            $byte,
            $allow,
            $image_allow = ['jpg', 'png', 'jpeg'],
            $video_allow = ['mp4'],
            $image_byte = 1024 * 1024 * 1000,
            $video_byte = 1024 * 1024 * 10000;

    public function set($files, $table, $mode)
    {
        $this->table = $table;
        $this->file  = $this->table.'_'.$this->mode = $mode;
        $this->type  = $files[$this->file]['type'];
        $this->tmp   = $files[$this->file]['tmp_name'];
        $this->name  = $files[$this->file]['name'];
        $this->size  = $files[$this->file]['size'];
        $this->error = $files[$this->file]['error'];
        return $this;
    }

    public function get()
    {
        $this->fileSize();
        $this->fileAllow();
        $this->errors();

        if($this->errors == FALSE)
        {
            return [
                'status' => TRUE, 
                'table'  => $this->table, 
                'tmp'    => $this->tmp, 
                'name'   => $this->new_name,
                'size'   => $this->size,
            ];
        }
        else
        {
            return [
                'status' => FALSE, 
                'errors'   => $this->errors, 
            ];
        }
    }   

    public function errors()
    {
        if($this->error != FALSE)
        {
            $this->errors = 'type_error';
            return $this->errors;
        }

        if($this->allow($this->new_name) === FALSE)
        {
            $this->errors = 'allow_error';
            return $this->errors;
        }

        if($this->is_empty($this->new_name) == FALSE)
        {
            $this->errors = 'empty_error';
            return $this->errors;
        }

        if($this->size($this->size) == FALSE)
        {
            $this->errors = 'size_error';
            return $this->errors;
        }
    }

    public function fileSize()
    {
        if($this->mode == 'image')
        {
            $this->byte = $this->image_byte;
        }
        else if($this->mode == 'video')
        {
            $this->byte = $this->video_byte;
        }
    }

    public function fileAllow()
    {
        if($this->mode == 'image')
        {
            $this->allow = $this->image_allow;
        }
        else if($this->mode == 'video')
        {
            $this->allow = $this->video_allow;
        }
    }

    public function is_empty($name)
    {
        if(!empty($name) && strlen($name) > 3){
            return $name;
        }
    }

    public function allow()
    {
        $ext = substr(strrchr($this->name,'.'), 1);
        if(in_array($ext, $this->allow) !== false)
        {
            return $this->new_name = uniqid().'.'.$ext;
        }
    }

    public function size($size)
    {
        return $this->byte > $size ?: FALSE;
    }

    public function dir($move = [])
    {
        return getcwd().'/resources/files/upload/'.$move['table'].'/'.$move['name'];
    }

    public function move($move = [])
    {
        $move = move_uploaded_file($move['tmp'], $this->dir($move));
        return $move == TRUE ? ['status' => TRUE] : ['status' => FALSE];
    }

    public function drop($table, $file)
    {
        if(isset($table) && isset($file) && !empty($file))
        {
            $this->dir = getcwd().'/resources/files/upload/'.$table.'/'.$file;

            if(file_exists($this->dir))
            {
               $unlink = unlink($this->dir);
               
               if($unlink == TRUE)
               {
                    return ['status' => TRUE, 'message' => 'файл успешно удален'];

               }else
               {
                    return ['status' => FALSE, 'message' => 'что то пошло не так'];
               }
            }else
            {
                return ['status' => FALSE, 'message' => 'файл не найден'];
            }
        }
    }
}

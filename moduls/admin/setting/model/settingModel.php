<?php 

namespace moduls\admin\setting\model;
use core\model;
use \Valitron\Validator as v;

class settingModel extends model
{
    public function setting()
    {
        return $this->db->t1desc('setting', 2);
    }

    public function __settingCreate()
    {
        $data = [];
        $data = peel($_POST);

        $v = new v($data);

        $v->rule('required', [
            'setting_description',
            'setting_key',
            'setting_value',
        ]);

        if(!$v->validate()){
            _message(404, $this->return->valitron);
        }

        $return = $this->db->create('setting', $data);

        if($return['status'] == TRUE)
        {
            _message(200, 'setting '.$this->return->created,
                $this->db->t1desc('setting')
            );

        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function settingUpdate($id)
    {
        return $this->db->t1where('setting', 'setting_id=?', [$id]);
    }

    public function __settingUpdate()
    {
        $data = [];
        $data = peel($_POST);

        $v = new v($data);

        $v->rule('required', [
            'setting_description',
            'setting_key',
            'setting_value',
            'setting_id',
        ]);

        if(!$v->validate()){
            _message(404, $this->return->valitron);
        }

        $return = $this->db->update('setting', $data, [
            'id' => 'setting_id',
        ]);

        if($return['status'] == TRUE)
        {
            _message(200, 'setting '.$this->return->updated, 
                $this->db->t1where('setting', 'setting_id=?', [
                    $data['setting_id']
                ])
            );
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function __status($id)
    {
        $return = $this->db->whereupdate('setting', 'setting_status=?', 'setting_id=?', [
            $this->db->t1where('setting', 'setting_id=?', [$id])->setting_status == 0 ? 1 : 0, $id
        ]);

        return $return['status'] == 1 
            ? _message(200, $this->return->status_success) 
            : _message(404, $this->return->status_error);
    }

    public function _delete($id)
    {
        $return = $this->db->wheredelete('setting', 'setting_id=?', [
            $this->db->t1where('setting', 'setting_id=?', [$id])->setting_id
        ]);

        if($return['status'] == TRUE)
        {
            _message(200, 'setting '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}

<?php
require_once 'base_model.php';

class HistoryRepository extends Base_model
{
    public function findByMemberId($memberId) {

        $where = array(
                't_member_id' => $memberId,
        );
        return $this->get_many_by($where);
    }

    public function save($memberId, $text) {

        $data = array(
                't_member_id'   => $memberId,
                'text'          => $text,
        );
        return $this->insert($data);
    }
}

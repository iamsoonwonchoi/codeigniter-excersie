<?php
class Topic_model extends CI_Model{
    function __construct(){     // 생성자이기 때문에 초기화 관련 함수
        parent::__construct();
        // 초기화 할 내용 여기 적으면 된다.
    }

    public function gets()
    {
        // $this->db 는 현재 설정한 DB에 접속하는 api이다.
        return $this->db->query('SELECT * FROM topic')->result();   // result()는 객체를 가져온다. result_array()는 array로 가져온다.
    }

    public function get($topic_id)
    {
        // 두 코드 모두 똑같은 의미를 가지나 첫번째 코드는 공식 SQL 문법이므로
        // MYSQL이 아닌 다른 프레임워크에서도 사용이 가능하다.(이식성이 좋다)
        return $this->db->get_where('topic', array('id'=>$topic_id))->row();
        // return $this->db->query('SELECT * FROM topic WHERE id='.$topic_id)->row();
    }
}
?>
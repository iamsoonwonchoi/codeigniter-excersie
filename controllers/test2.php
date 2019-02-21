<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
    View를 사용하는 이유
    1. publisher와 designer의 업무 분리
    2. 자원의 체계적 관리
*/
class Test2 extends CI_Controller {
    function index(){
        $this->load->view('test2');     // views 폴더의 "test2.php" 호출
    }
    function get($id){
        $data = array('id' => $id);
        $this->load->view('test2_get', $data);
        // $this->load->view('test2_get', array('id'=>$id));
    }
}
?>
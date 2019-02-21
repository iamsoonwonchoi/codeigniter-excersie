<?php   // php 코드의 시작을 알리는 부분
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();    // CI에서 제공해주는 DB 라이브러리 호출
        $this->load->model('topic_model');  // "topic_model.php"의 Topic_model 클래스 인스턴스(객체)를 불러온다.
    }
	public function index()
	{
        $topics = $this->topic_model->gets(); // 위에서 불러온 인스턴스의 gets() 메소드를 호출
        /* data 출력을 통해 DB로 부터 불러온 값 확인 가능
        foreach($data as $entry)
        {
            var_dump($entry);
        }
        */    
        $this->load->view('head');
        $this->load->view('topic_list', array('topics'=>$topics));
        $this->load->view('main');
        $this->load->view('footer');
    }
    public function get($id)
    {
        $topics = $this->topic_model->gets();
        $topic = $this->topic_model->get($id);
        $data = array('topic' => $topic);
        $this->load->view('head');
        $this->load->view('topic_list', array('topics'=>$topics));
        $this->load->view('get', $data);
        $this->load->view('footer');
        // $this->load->view('get', array('id' => $id));
    }
}
?>
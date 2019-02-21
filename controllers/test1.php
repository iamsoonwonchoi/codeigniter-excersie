<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
    index.php 뒤에 나오는 첫번째 path는 controllers에 속해 있는 파일을 호출하게 되고
    그 path의 이름으로 클래스를 설정해주어야 한다.

    접근주소 : localhost/index.php/test1
    test1뒤에 아무 입력없이 접근을 하게 되면
    자동으로 "public function index()"를 호출하게 된다.

    접근주소 : localhost/index.php/test1/get
    get()함수를 추가함으로써 추가적인 경로설정이 가능하다.

    접근주소 : localhost/index.php/test1/get_test/1
    함수에 인자를 추가하고 추가경로를 입력함으로써 출력이 가능하다.
*/
class Test1 extends CI_Controller {
	public function index()
	{
		echo '테스트 페이지';
    }
    public function get()
    {
        echo '테스트';
    }
    public function get_test($id)
    {
        echo '테스트'.$id;  // 해당 문법은 변수를 사용할 때 PHP의 문법이고 HTML은 다르다.
    }
}

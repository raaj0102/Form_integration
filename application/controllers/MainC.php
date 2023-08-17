<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MainC extends CI_Controller {

    public function index() {
        $data['data'] = $this->MainM->retrive_data_model();
//            print_r($data);
//           die();
        $this->load->view('front/index', $data);
    }

    public function add_new() {
        $this->load->view('front/add-data');
    }

    public function form_data() {
//            echo '<pre>';
//            print_r($_POST);
//            die();

        $name = $this->input->post('name');
        $con = $this->input->post('contact');
        $mail = $this->input->post('email');
        $obj = $this->input->post('obj');
        $qq = $this->input->post('qq');
        $bb = $this->input->post('bb');
        $yy = $this->input->post('yy');
        $per = $this->input->post('per');
        $hobby = $this->input->post('hobbies');
        $skill = $this->input->post('skill');
        $desc = $this->input->post('desc');
        $descr = $this->input->post('descr');
        $exp = $this->input->post('exp');
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        
         if ($_FILES AND $_FILES['user_photo']['name']) {
            $text = pathinfo($_FILES['user_photo']['name'], PATHINFO_EXTENSION);
            $doc_name = "U" . date('ymdhis') . "." . $text;

//                 Make Directory Dynamically
            if (!is_dir('./uploads/Images')) {
                mkdir('./uploads/Images', 0777, true);
            }
//                  

            $config['upload_path'] = './uploads/Images';
            $config['allowed_types'] = 'webp|pdf|jpg|jpeg|PDF|JPG|JPEG|png|PNG';
            $config['max_size'] = 1000000;
            $config['file_name'] = $doc_name;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('user_photo')) {
                $error = array('error' => $this->upload->display_errors());
                // print_r($error);
                $this->load->view('', $error);
            } else {
                $data = array('upload_data' => $this->upload->data());
            }
        } else {
            $doc_name = '';
        }
//        print_r($doc_name);
//            die();

        $res = $this->MainM->form_data_model($name, $con, $mail, $obj, $skill, $qq, $bb, $yy, $per, $desc, $descr, $exp, $hobby, $from, $to, $doc_name);
        if ($res > 0) {
            redirect(base_url('homepage?success=yes'));
        } else {
            redirect(base_url('homepage?error=yes'));
        }
    }

}

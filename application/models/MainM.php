<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MainM extends CI_Model {

    public function form_data_model($name, $con, $mail, $obj, $skill, $qq, $bb, $yy, $per, $desc, $descr, $exp, $hobby, $from, $to, $doc_name) {
//        echo "<pre>";
//        print_r($_POST);die;
        $qry = $this->db->query("INSERT INTO form_data (u_name, u_contact, u_email, objective, hobbies,u_photo) VALUES('$name','$con','$mail','$obj','$hobby', '$doc_name')");
//        $Lid = $this->db->query("SELECT LAST_INSERT_ID()");
        $Lid = $this->db->insert_id();
//        print_r($Lid);
//        die();
        for ($i = 0; $i < count($skill); $i++) {
            $qry3 = $this->db->query("INSERT INTO skill (u_skill, u_desc, s_candidate_key) VALUES ('$skill[$i]','$desc[$i]','$Lid')");
        }
        for ($j = 0; $j < count($qq); $j++) {

            $qry1 = $this->db->query("INSERT INTO qualification (qualification, board, year, percentage, q_candidate_key) VALUES ('$qq[$j]','$bb[$j]', '$yy[$j]', '$per[$j]','$Lid')");
        }
        for ($k = 0; $k < count($exp); $k++) {
            $from = date('Y-m-d', strtotime($from[$k]));
            $to = date('Y-m-d', strtotime($to[$k]));
            $qry2 = $this->db->query("INSERT INTO experience (experience,u_from,u_to,u_desc, e_candidate_key) VALUES ('$exp[$k]','$from', '$to', '$descr[$k]','$Lid')");
        }
        return $datas = array(
            $qry,
            $qry1,
            $qry2,
            $qry3
        );
    }

    public function retrive_data_model() {
        return $this->db->query("SELECT f.u_name, u_contact, u_email, objective,
       COALESCE(SUM(DATEDIFF(we.u_to, we.u_from)), 0) AS total_experience,
       q.qualification,
       s.u_skill,
       we.experience
FROM form_data f
LEFT JOIN experience we ON f.uid = we.e_candidate_key
LEFT JOIN skill s ON we.e_candidate_key = s.s_candidate_key
LEFT JOIN qualification q ON s.s_candidate_key = q.q_candidate_key
GROUP BY f.uid
ORDER BY total_experience DESC")->result();
    }

}

<?php
namespace application\models;
use application\core\Model;
class Main extends Model {
    function sendData($send=false){
        // post check is needed because of ajax invoke of model
        //  $send param is needed for call from controller
        if ((!empty($_POST))&&($_SERVER['REQUEST_METHOD']==='POST')&&($send==true)) {
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

                // don't forget to change null part
                $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
                $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
                $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
                $country = isset($_POST['country']) ? $_POST['country'] : null;
                $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
                $email = isset($_POST['email']) ? $_POST['email'] : null;
                $report_subject = isset($_POST['report_subject']) ? $_POST['report_subject'] : null;

                $params = [
                    'firstname' =>  $firstname,
                    'lastname' => $lastname,
                    'birthdate' => $birthdate,
                    'country' => $country,
                    'phone' => $phone,
                    'email' => $email,
                    'report_subject' => $report_subject,
                ];
                $sql = "INSERT INTO members(firstname,lastname,birthdate,country,phone,email,report_subject) VALUES (:firstname,:lastname,:birthdate,:country,:phone,:email,:report_subject)";
                $this->db->query($sql, $params);
            }
        }
    }

    function getAllMembers()
    {
        // will touch db during ajax request or not?
        $allMembers = $this->db->row("SELECT COUNT(*) FROM members");

        return $allMembers[0]['COUNT(*)'];
    }
    function getAllEmails()
    {
        $allEmails = $this->db->row("SELECT email FROM members");
        debug($allEmails);
        return $allEmails;
    }
}
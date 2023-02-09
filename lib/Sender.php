<?php

namespace Lib;

class Sender extends Controller {

    public function sendAction(): string
    {
        // запись в базу $database->query()
        $name = $_POST['name'];
        $email = $_POST['email'];
        $link = $_POST['link'];
        
        $database = new Database();   
        $get_id = $database->querySingle("SELECT COUNT(*) FROM saveForms;");
        $database->exec("INSERT INTO saveForms (ID, username, email, link) VALUES ($get_id + 1,'$name','$email','$link')");
        header('Location: /../template/form.php');
        return "";
    }
}
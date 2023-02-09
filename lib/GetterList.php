<?php

namespace Lib;
require 'header.php';

class GetterList extends Controller {

    public function listAction(): string
    {
        // селект из базы $database->query()
        $database = new Database();   
        $list = $database->query("SELECT username, email, link FROM saveForms;");
        echo '<div class="grid-container">';
        while ($row = $list->fetchArray()) {
            echo 
                    '<div class="grid-item">
                        <p>Userame: <span>' . $row[0] . '</span></p>
                        <p>Email:   <span>' . $row[1] . '</span></p>
                        <p>Link:    <span>' . $row[2] . '</span></p>
                    </div>';
        }
        echo '</div>';

        return "";
    }
}

require 'footer.php';
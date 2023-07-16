<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $donnees = json_decode(file_get_contents("php://input"));

        if(!empty($donnees->prenom) && !empty($donnees->nom) && !empty($donnees->email) && !empty($donnees->message)){

            $objet = "Contact - bedrinedev.fr";

            $header="MIME-Version: 1.0\r\n";
            $header.='From:"bedrinedev.fr"<contact@bedrinedev.fr>'."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';
            $message='
                <html>
                    <body>
                        <div align="center">
                            <br/>
                            <br/>
                            <br/>
                            <u>Nom de l\'expéditeur:</u> '.$donnees->prenom.' '.$donnees->nom.'<br/>
                            <br/>
                            <u>E-mail de l\'expéditeur:</u> '.$donnees->email.'<br/>
                            <br/>
                            '.nl2br($donnees->message).'
                            <br/>
                            <br/>
                            <br/>
                        </div>
                    </body>
                </html>
            ';
            mail("alan.bedrine@gmail.com", $objet, $message, $header);

            http_response_code(201);
            echo json_encode(["Message" => "Formulaire envoyer"]);

        } else {
            http_response_code(503);
            echo json_encode(["Message" => "Error : Formulaire non envoyer"]);
        }

    } else {
        http_response_code(405);
        echo json_encode(["Message" => "Error : La methode n'est pas autorisee"]);
    }

?>
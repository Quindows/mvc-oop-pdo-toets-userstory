<?php

class Lessen extends Controller
{

    public function __construct()
    {
        $this->mankementModel = $this->model('Mankement');
    }

    public function index()
    {
        $result = $this->mankementModel->getMankementen();
       
        // var_dump($result);
        $rows = '';
        foreach($result as $info) {
        
            $rows .= "<tr>
                        <td>$info->datum</td>
                        <td>$info->mankement</td>
                    </tr>";
                    // var_dump($result[0]->naam);
        }

        $data = [
            'title' => "Overzicht mankementen",
            'rows' => $rows,
            'naam' => $result[0]->naam,
            'email' => $result[0]->email,
            'kenteken' => $result[0]->kenteken,
            'type' => $result[0]->type

        ];
        $this->view('mankementen/index', $data);
    }

    function topicsLesson($lesId)
    {
        $result = $this->mankementModel->getTopicsLesson($lesId);

        // var_dump($result);
        
        $rows = "";
        foreach ($result as $topic) {
            $rows .= "<tr>      
                        <td>$topic->Onderwerp</td>
                      </tr>";
        }


        $data = [
            'title' => 'Onderwerpen Les',
            'rows'  => $rows,
            'lesId' => $lesId
        ];
        $this->view('mankementen/topicslesson', $data);
    }

    function addMankement($autoData = NULL)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // var_dump($_POST);
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $result = $this->mankementModel->addMankement($_POST);
            
            header('Refresh:3; url=' . URLROOT . '/mankementen/index');

            if ($result) {

                echo "<p>Het nieuwe mankement is succesvol toegevoegd</p>";
            } else {
                echo "<p>Het nieuwe mankement is niet toegevoegd</p>";
            }
        }

        $data = [
            'title' => 'Mankement Toevoegen',
            'autoData' => $autoData
        ];
        $this->view('mankementen/addTopic', $data);
    }
}
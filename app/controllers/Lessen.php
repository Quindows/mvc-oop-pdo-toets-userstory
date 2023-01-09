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
                        <td>$info->naam</td>
                        <td><a href='" . URLROOT . "/lessen/topicslesson/{$info->Id}'><img src='" . URLROOT . "/img/b_props.png' alt='topiclist'></a></td>
                    </tr>";
        }

        $data = [
            'title' => "Overzicht mankementen",
            'rows' => $rows

        ];
        $this->view('lessen/index', $data);
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
        $this->view('lessen/topicslesson', $data);
    }

    function addTopic($lesId = NULL)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // var_dump($_POST);
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $result = $this->mankementModel->addTopic($_POST);

            if ($result) {
                echo "<p>Het nieuwe onderwerp is succesvol toegevoegd</p>";
            } else {
                echo "<p>Het nieuwe onderwerp is niet toegevoegd</p>";
            }
            header('Refresh:3; url=' . URLROOT . '/lessen/index');
        }

        $data = [
            'title' => 'Onderwerp Toevoegen',
            'lesId' => $lesId
        ];
        $this->view('lessen/addTopic', $data);
    }
}
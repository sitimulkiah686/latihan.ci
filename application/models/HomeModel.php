<?php

class HomeModel extends CI_Model {
    public function getData() {
        $data = array(
            'Nama' => 'Irpan Budiman',
            'Kampus' => 'STMIK JABAR',
            'Website' => 'http://stmik-jabar.ac.id'

        );
        return $data;
    }
}
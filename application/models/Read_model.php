<?php

    class Read_model extends CI_Model {

        public function read_data() {
            $file = fopen(ASSETSPATH."data.txt", "r") or die("Unable to open file!");
            $data = fread($file, filesize(ASSETSPATH."data.txt"));
            fclose($file);
            return $data;
        }

        public function read() {
            echo json_encode(array(
                'success' => true,
                'message' => "",
                'data'=>$this->read_data()
            ));
        }
    }
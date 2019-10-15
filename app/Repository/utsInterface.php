<?php
    namespace App\Repository;
    use App\uts;

    interface utsInterface{
        public function create (char $nama ,$telepon , $email,$alamat);
        public function all();
        public function delete(int $id);
        public function get(int $id);   
        public function update(int $id, uts $data);
        
    }

?>
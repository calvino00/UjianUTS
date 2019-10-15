<?php
    namespace App\Repository;

    use App\uts;

    class utsRepository implements utsInterface{

        public function create(char $nama ,$telepon , $email,$alamat){
            $uts = new uts;
            $uts->nama = $nama;
            $uts->telepon = $telepon;
            $uts->email = $email;
            $uts->alamat = $alamat;
            $uts->save();
        }
        public function all(){
            return uts::all();
        }
        public function get(int $id){
            return uts::findOrFail($id);
        }

        public function update(int $id, uts $data){
            uts::findOrFail($id)->update(['nama'=>$data->nama,'telepon'=>$data->telepon,'email'=>$data->email,'alamat'=>$data->alamat]);
        }
         public function delete(int $id){
             $uts = uts::find($id);
             $uts->delete();
        }
        
    }
?>
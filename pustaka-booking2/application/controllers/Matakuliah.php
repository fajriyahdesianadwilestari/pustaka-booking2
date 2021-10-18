<?php
kelas  Matakuliah  memperluas  CI_Controller
{
     indeks fungsi  publik ()
    {
        $ this -> load -> view ( 'view-form-matakuliah' );
    }

     fungsi  publik cetak ()
    {
        $ this -> form_validation -> set_rules ( 'kode' , 'Kode Matakuliah' , 'required|min_length[3]' , [
            'wajib' => 'Kode Matakuliah Harus Diisi' ,
            'min_lenght' => 'Kode terlalu pendek'
        ]);

        $ this -> form_validation -> set_rules ( 'nama' , 'Nama Matakuliah' , 'required|min_length[3]' , [
            'wajib' => 'Nama Matakuliah Harus diisi' ,
            'min_lenght' => 'Nama terlalu pendek'
        ]);
        if ( $ this -> form_validation -> run () != true ) {
            $ this -> load -> view ( 'view-form-matakuliah' );
        } lain {
            $ data =[
                'kode' => $ this -> input -> post ( 'kode' ),
                'nama' => $ this -> input -> post ( 'nama' ),
                'sks' => $ this -> input -> post ( 'sks' )
            ];
            $ this -> load -> view ( 'view-data-matakuliah' , $ data );
        }
    }
}
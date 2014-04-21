<?php

return array(
    'title' => 'Tambah Peminjam',
    'elements' => array(
        'Nama' => array(
            'type' => 'text',
            'maxlength' => '80'
        ),
        'Username' => array(
            'type' => 'text',
            'maxlength' => '80'
        ),
        'Email' => array(
            'type' => 'email',
            'hint' => 'nama@domain.com',
            'maxlength' => '80'
        ),
        'NoHP' => array(
            'type' => 'text',
            'maxlength' => '12'
        ),
        'TglLahir' => array(
            'type' => 'date'
        ),
        'Jenis_Kelamin' => array(
            'type' => 'radiolist',
            'items'=>  array(
                'M'=>'Laki-laki',
                'F'=>'Perempuan',
            ),
            'prompt'=>'Please select'
        ),
        'Alamat' => array(
            'type' => 'text',
            'maxlength' => '80'
        ),
    ),
    'buttons' => array(
        'submit'=>array(
            'type' => 'submit',
            'label' => 'Simpan'
        ))
);
?>

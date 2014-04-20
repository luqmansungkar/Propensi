<?php

return array(
    'title' => 'Tambah User',
    'elements' => array(
        'nama' => array(
            'type' => 'text',
            'maxlength' => '80'
        ),
        'username' => array(
            'type' => 'text',
            'maxlength' => '80'
        ),
        'password' => array(
            'type' => 'password',
            'maxlength' => '12'
        ),
        'email' => array(
            'type' => 'email',
            'hint' => 'nama@domain.com',
            'maxlength' => '80'
        ),
        'nohp' => array(
            'type' => 'text',
            'maxlength' => '12'
        ),
        'tanggalLahir' => array(
            'type' => 'date'
        ),
        'alamat' => array(
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

<?php

return array(
    'title' => 'Tambah User',
    'elements' => array(
        'ID_Peminjam' => array(
            'type' => 'number',
            'maxlength' => '10'
        ),
        'Tanggal' => array(
            'type' => 'date'
        ),
        'Jumlah' => array(
            'type' => 'number',
            'maxlength' => '10'
        ),
    ),
    'buttons' => array(
        'submit'=>array(
            'type' => 'submit',
            'label' => 'Simpan'
        ))
);
?>

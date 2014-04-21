<?php
if (Yii::app()->session['role'] == 'donatur') {
    return array(
    'title' => 'Lakukan Donasi',
    'elements' => array(
        'Nominal' => array(
            'type' => 'number'
        ),
        'Jenis' => array(
            'type' => 'dropdownlist',
            'items'=> Donasi::model()->getJenisOption(),
            'prompt'=>'Please select'
        )
    ),
    'buttons' => array(
        'submit'=>array(
            'type' => 'submit',
            'label' => 'Simpan'
        ))
);
}else{
return array(
    'title' => 'Lakukan Donasi',
    'elements' => array(
        'ID_Donatur' => array(
            'type' => 'number'
        ),
        'Nominal' => array(
            'type' => 'number'
        ),
        'Jenis' => array(
            'type' => 'dropdownlist',
            'items'=> Donasi::model()->getJenisOption(),
            'prompt'=>'Please select'
        )
    ),
    'buttons' => array(
        'submit'=>array(
            'type' => 'submit',
            'label' => 'Simpan'
        ))
);

}
?>

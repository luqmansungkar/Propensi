<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Laporan Penerimaan Donasi';
$this->breadcrumbs=array(
	'List Donasi',
);
?>

<h1>Laporan Penerimaan Donasi</h1>

<?php if(Yii::app()->user->hasFlash('listdonasi')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('listdonasi'); ?>
</div>

<?php else: ?>

<div>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Nominal</th>
            </tr>
        </thead>
        <tbody>
    <?php
        
        foreach ($result as $row){
            echo '<tr>';
            echo '<td>'.$row['tanggal'].'</td>';
            echo '<td><a href=\'../donasi/riwayatDonasi?id='.$row['id'].'\'>'.$row['nama'].'</a></td>';
            echo '<td>'.$row['tipe'].'</td>';
            //echo '<td>'.$row['nominal'].'</td>';
            echo '<td style="text-align: right;">';
            echo 'Rp. ' . number_format( $row['nominal'], 0 , '' , '.' ) . ',-';;
            echo '</td>';
            echo '</tr>';
        }
    ?>
            </tbody>
        </table>
</div>


<?php endif; ?>
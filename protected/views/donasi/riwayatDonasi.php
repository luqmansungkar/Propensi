<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Riwayat Donasi';
$this->breadcrumbs=array(
        'List Donasi'=>array('../index.php/donasi/listDonasi'),
        'Riwayat Donasi'
);
/*$this->widget('zii.widgets.CBreadcrumbs',array(
    'links'=>array(
        'List Donasi'=>array('../index.php/site/listDonasi'),
        'Riwayat Donasi'
    ),
)
        );*/
?>

<h1>Riwayat Donasi <?php echo $nama; ?></h1>

<?php if(Yii::app()->user->hasFlash('listdonasi')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('listdonasi'); ?>
</div>

<?php else: ?>

<div>
    <table>
        <thead>
            <tr>
                <th>ID Donasi</th>
                <th>Tanggal Donasi</th>
                <th>Nominal</th>
                <th>Jenis Donasi</th>
                <th>Status</th>
                <th>Tanggal Konfirmasi</th>
                <th>Tanggal Transfer</th>
                <th>Link Bukti</th>
            </tr>
        </thead>
        <tbody>
    <?php
        
        foreach ($result as $row){
            echo '<tr>';
            echo '<td>'.$row['ID'].'</td>';
            echo '<td>'.$row['Tanggal'].'</td>';
            echo '<td>'.$row['Nominal'].'</td>';
            echo '<td>'.$row['tipe'].'</td>';
            echo '<td>'.$row['Keterangan'].'</td>';
            if ($row['Tgl_konfirm'] == '0000-00-00') {
                echo '<td>Belum konfirmasi</td>';
            }else{
                echo '<td>'.$row['Tgl_konfirm'].'</td>';
            }
            if ($row['Tgl_transfer'] == '0000-00-00') {
                echo '<td>Belum transfer</td>';
            }else{
                echo '<td>'.$row['Tgl_transfer'].'</td>';
            }
            echo '<td>'.$row['Link_bukti'].'</td>';
            echo '</tr>';
        }
    ?>
            </tbody>
        </table>
</div>


<?php endif; ?>
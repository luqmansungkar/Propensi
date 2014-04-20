<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - List User';
$this->breadcrumbs=array(
	'List User',
);
?>

<h1>Laporan Penerimaan Donasi</h1>

<?php if(Yii::app()->user->hasFlash('listuser')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('listuser'); ?>
</div>

<?php else: ?>

<div>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>ID</th>
                <th>Username</th>
                <th>E-mail</th>
                <th>Nomor Handphone</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
    <?php
        
        foreach ($result as $row){
            echo '<tr>';
            echo '<td>'.$row['nama'].'</td>';
            echo '<td>'.$row['ID'].'</td>';
            echo '<td>'.$row['username'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>'.$row['nohp'].'</td>';
            echo '<td>'.$row['tanggalLahir'].'</td>';
            echo '<td>'.$row['alamat'].'</td>';
            echo '</tr>';
        }
    ?>
            </tbody>
        </table>
</div>


<?php endif; ?>
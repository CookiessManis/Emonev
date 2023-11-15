hai ini halaman belanja<a href="<?= base_url('C_dashboard'); ?>" class="btn btn-sm btn-primary">
        <i class="fas fa-edit">dashboard</i></a>

<a href="<?= base_url('C_belanja/tambah/'); ?>" class="btn btn-sm btn-primary">
        <i class="fas fa-edit">tambah</i></a>
<table class="table table-striped table-responsive-sm">
<tr>
    <th>id</th>
    <th>no rekenig </th>
    <th>rincian</th>
    <th>pagu</th>
    <th>npd</th>
    <th>realisasi</th>
    <th>realisasi persen</th>
    <th>target</th>
    <th>username</th>
    <th>detail</th>
</tr>

<?php foreach($belanja as $ba): ?>
    <?php
   $a = number_format(($ba->realisasi / $ba->npd) * 100 ); ?>
    <tr>
        <td><?= $ba->id_belanja; ?></td>
        <td><?= $ba->no_rek; ?></td>
        <td><?= $ba->rincian; ?></td>
        <td><?= $ba->pagu; ?></td>
        <td><?= $ba->npd; ?></td>
        <td><?= $ba->realisasi; ?></td>
        <td><?= $a ; ?>%</td>
        <td><?= $ba->target; ?></td>
        <td><?= $ba->username; ?></td>
        <td>
            <a href="<?= base_url('C_belanja/edit/'). $ba->id_belanja; ?>" class="btn btn-sm btn-primary">
            <i class="fas fa-edit">edit</i>
            </a>

            <a onclick="confirm('Yakin hapus?')" href="<?= base_url('C_belanja/hapus/'). $ba->id_belanja; ?>" class="btn btn-sm btn-danger">
            <i class="fas fa-trash">hapus</i>
            </a>
        </td>
    </tr>
<?php endforeach; ?>

</table>
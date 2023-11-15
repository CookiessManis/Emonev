hai ini halaman kegiatan<a href="<?= base_url('C_dashboard'); ?>" class="btn btn-sm btn-primary">
        <i class="fas fa-edit">dashboard</i></a>

<a href="<?= base_url('C_kegiatan/tambah/'); ?>" class="btn btn-sm btn-primary">
        <i class="fas fa-edit">tambah</i></a>
<table class="table table-striped table-responsive-sm">
<tr>
    <th>id</th>
    <th>no kegiatan</th>
    <th>sub kegiatan</th>
    
</tr>
<?php foreach($kegiatan as $ba): ?>
    <tr>
        <td><?= $ba->id_kegiatan; ?></td>
        <td><?= $ba->no_kegiatan; ?></td>
        <td><?= $ba->sub_kegiatan; ?></td>

        <td>
            <a href="<?= base_url('C_kegiatan/edit/'). $ba->id_kegiatan; ?>" class="btn btn-sm btn-primary">
            <i class="fas fa-edit">edit</i>
            </a>

            <a onclick="confirm('Yakin hapus?')" href="<?= base_url('C_kegiatan/hapus/'). $ba->id_kegiatan; ?>" class="btn btn-sm btn-danger">
            <i class="fas fa-trash">hapus</i>
            </a>
        </td>
    </tr>
<?php endforeach; ?>

</table>
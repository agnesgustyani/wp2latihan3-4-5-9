<table class="table table-striped">
    <thead>
        <tr>
            <td>Kode Buku</td>
            <td>Judul Buku</td>
            <td>Pengarang</td>
            <td></td>
        </tr>
    </thead>
    <?php foreach ($tmp as $tmp) : ?>
        <tr>
            <td><?php echo $tmp->kd_buku; ?></td>
            <td><?php echo $tmp->judul; ?></td>
            <td><?php echo $tmp->pengarang; ?></td>
            <td><a href="#" class="hapus" kode="<?php echo $tmp->kd_buku; ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="2">Total Buku</td>
        <td colspan="2"><input type="text" id="jumlahTmp" readonly="readonly" value="<?php echo $jumlahTmp; ?>" class="formcontrol"> </td>
    </tr>
</table>
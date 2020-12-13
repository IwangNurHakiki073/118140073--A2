<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Aksi</th>
    </tr>

    <?php
    include "koneksidb.php";


    $sql =  "SELECT * FROM mahasiswa ORDER BY NIM asc";
    $hasil = mysqli_query($koneksi, $sql);
    $No = 0;
    while ($data = mysqli_fetch_array($hasil));
    $No++;
    ?>

    <tr>
        <td><?php echo $No; ?></td>
        <td><?php echo $data['NIM']; ?></td>
        <td><?php echo $data['Nama']; ?></td>
        <td><?php echo $data['Prodi']; ?></td>
        <td><?php echo $data['Angkatan']; ?></td>
        <td>
            <button id="<?php echo $data['NIM']; ?>" class="Delete"> Delete </button>
            <button id="<?php echo $data['NIM']; ?>" class="Update"> Update </button>
        </td>
    </tr>

    <?php T_ENDWHILE; ?>
</table>

<script type='text/javascript'>
    $(document).on('click', '.hapus', function() {
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "Delete.php",
            data: {
                id: id
            },
            success: function() {
                $('#tampilan_data').load("Tampilan.php");
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
</script>
<script type='text/javascript'>
    $(document).on('click', '.Update', function() {
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "Update.php",
            data: {
                id: id
            },
            success: function() {
                $('#tampilan_data').load("Tampilan.php");
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
</script>
</table>
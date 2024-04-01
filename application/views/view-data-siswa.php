<html>

<head>
    
    <title>Tampil Data Siswa</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
        <h1>Data Siswa</h1>
        <table>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td><?= $nama ?></td>

            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><?= $nis ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $kelas ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?= $tgl ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?= $tmpt ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $alamat ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?= $jk ?>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?= $agama ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td><a href="<?= base_url('siswa'); ?>"><button>Kembali</button></a></td>

            </tr>
        </table>
    </center>
</body>

</html>
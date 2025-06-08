<h1>Daftar Mahasiswa</h1>
<table border="1">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $mahasiswa): ?>
            <tr>
                <td><?= $mahasiswa->nim; ?></td>
                <td><?= $mahasiswa->nama; ?></td>
                <td><?= $mahasiswa->prodi; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

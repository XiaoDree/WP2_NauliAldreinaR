<html> 
    
<head> 
    <title>Form Input Mahasiswa</title> 
</head> 

<body> 
    <center> 
        <form action="<?= base_url('mahasiswa/cetak'); ?>"
method="post"> 
            <table> 
                <tr> 
                    <th colspan="3"> 
                        Form Input Data Mahasiswa
                    </th> 
                </tr>
                <tr> 
                    <td colspan="3"> 
                        <hr> 
                    </td> 
                </tr> 
                <tr> 
                    <th>Nama</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="nama" id="nama"> 
                        <?= form_error('kode','<small class="text-danger-p1-3">', '</small>'); ?> 
                    </td> 
                </tr> 
                <tr> 
                    <th>NIM</th> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="nim" id="nim">
                        <?= form_error('kode','<small class="text-danger-p1-3">', '</small>'); ?> 
                    </td> 
                </tr> 
                <tr> 
                    <th>Kelas</th> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="kelas" id="kelas"> 
                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>    
                    </td> 
                </tr> 
                <tr> 
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" id="tempat">
                        <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl" id="tgl">
                        <?= form_error('tgl', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenkel" id="laki-la
                        ki" value="Laki-laki">Laki-laki
                        <input type="radio" name="jenkel" id="perempuan" value="Perempuan">Perempuan
                        <?= form_error('jenkel', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center"> 
                        <input type="submit" value="Submit"> 
                    </td> 
                </tr> 
            </table> 
        </form> 
    </center> 
</body> 

</html>
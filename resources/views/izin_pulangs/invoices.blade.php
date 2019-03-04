
<!DOCTYPE html>
<html>
<head>
    <title>Print Laporan</title>
    <style type="text/css">
        .halaman{
            width: 800;
            height: auto;
            margin: 10 auto;
        }
    </style>
    <script type="text/javascript">
        $('.print-window').click(function() {
    window.print();
    });
    </script>
</head>
<body class="halaman">
    <div id="isi" class="print-window" style="border-radius: 10px;border: 10px;">
        <h2 align="center"><b>PESANTREN</b></h2>
        <hr align="center" size="5" color="black">
        
        <h3 align="center"><u>Surat Izin Pulang</u></h3>
        <h4 align="center"><i>Bismillahirrahmannirrahim</i></h4>
        <br>
        <p>
        Dengan ini kami selaku pengurus/pembina asrama pesantren _____________________ memberikan izin kepada :
        </p>
        @foreach($data as $key => $ijin)
        <table>
            <tr>
                <td valign="top">Nama</td>
                <td valign="top">:</td>
                <td valign="top">{{$ijin->santri_nama->nama}}</td>
            </tr>
            <tr>
                <td valign="top">Kelas</td>
                <td valign="top">:</td>
                <td valign="top">{{$ijin->santri_nama->kelas}}</td>
            </tr>
            <tr>
                <td valign="top">Alamat</td>
                <td valign="top">:</td>
                <td valign="top">{{$ijin->santri_nama->alamat}}</td>
            </tr>
        </table>
        <p>
            Dengan Keteranngan sebagai berikut :
        </p>
        <table>
            <tr>
                <td valign="top">Keperluan</td>
                <td valign="top">:</td>
                <td valign="top">{{$ijin->alasan->keperluan}}</td>
            </tr>
            <tr>
                <td valign="top">Tanggal Pulang</td>
                <td valign="top">:</td>
                <td valign="top">{{$ijin->tgl_pulang}}</td>
            </tr>
            <tr>
                <td valign="top">Tanggal Kembali</td>
                <td valign="top">:</td>
                <td valign="top">{{$ijin->tgl_kembali}}</td>
            </tr>
        </table>
        <br>
        <div class="row"></div>
        <table  width="100%" class="table table-responsive">
            <thead>
                <tr>
                    <th>Pembimbing<br><br><br><br></th>
                    <th>Orang Tua<br><br><br><br></th>    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50" align="center">______</td>
                    <td width="50" align="center">{{$ijin->santri_nama->orang_tua}}</td>
                </tr>    
            </tbody>
            
        </table>
        @endforeach

    </div>
</body>
</html>
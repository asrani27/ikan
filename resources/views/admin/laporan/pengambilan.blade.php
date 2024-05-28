<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table border=0 width="100%">
        <tr>
            <td width="15%" style="text-align: right">
                
            </td>
            <td style="text-align: center">
                <b>PEMERINTAH KABUPATEN BARITO SELATAN<br/>
                    DINAS PERTANIAN DAN PERIKANAN<br/>
                </b>
                Alamat: Jl. Soekarno Hatta. Pamait Kec. Dusun Sel. Kabupaten Barito Selatan, Kalimantan Tengah 73713
                

            </td>
            <td width="15%" style="text-align: right">
                
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN PENGAMBILAN</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Produk</th>
            <th>Lokasi Pengambilan</th>
            <th>Jumlah</th>
        </tr>
        @php
            $no =1;
        @endphp
        @foreach ($data as $key => $item)
            <tr>
                <td style="text-align: center">{{$no++}}</td>
                <td style="text-align: center">{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                <td style="text-align: center">{{$item->nama}}</td>
                <td style="text-align: center">{{$item->alamat}}</td>
                <td style="text-align: center">{{$item->produk}}</td>
                <td style="text-align: center">{{$item->lokasi}}</td>
                <td style="text-align: center">{{$item->jumlah}}</td>
                
            </tr>
        @endforeach
    </table>
    <br/>
    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td>
                Buntok, {{\Carbon\Carbon::today()->translatedFormat('d F Y')}}, <br/>
                Dinas Pertanian Dan Perikanan<br/>
                Kabid,
                <br/><br/><br/><br/><br/>


                <b><u>Udin Bayu</u></b><br/>
                NIP. 19278979274981273

            </td>
        </tr>
    </table>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

$(document).ready(function(){
    window.print();
});
</script>
</html>
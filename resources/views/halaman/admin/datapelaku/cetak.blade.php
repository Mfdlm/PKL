<!DOCTYPE html>
<html>

<head>
    <title>Data Pelaku Subsektor Banjarmasin</title>
    <style type="text/css">
        body {
            background-color: #ccc;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        @page {
            size: F4;
            margin: 20mm;
        }

        .rangkasurat {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            justify-content: center; /* Center-align contents */
            align-items: center;
        }

        .logo {
            width: 150px; /* Set a fixed width for the logo */
        }

        .logo img {
            max-width: 100%; /* Make sure the logo image doesn't exceed its container */
        }

        .header-content {
            text-align: center;
        }

        .header h3 {
            margin: 0;
        }

        .header h2 {
            margin: 5px 0;
        }

        .header p {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            page-break-inside: avoid;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        .center {
            text-align: center;
        }

        .table-header th {
            background-color: #ccc;
        }
    </style>
</head>

<body>

    <div class="rangkasurat">

        <div class="header">
            <div class="logo">
                <img src="{{ asset('admin/dist/img/pemko.png') }}" alt="Pemko Logo">
            </div>
            <div class="header-content">
                <h3>PEMERINTAH KOTA BANJARMASIN</h3>
                <h2>DINAS KEBUDAYAAN, KEPEMUDAAN, OLAHRAGA DAN PARIWISATA</h2>
                <p>Alamat: Jl. Pangeran Hidayatullah (Lingkar Dalam Banua Anyar) Banjarmasin</p>
                <p>Website: www.banjarmasintoursm.com</p>
            </div>
        </div>

        <table>
            <tr class="table-header">
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Nama Usaha</th>
                <th>Jenis Kelamin</th>
                <th>Alamat Usaha</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>No Telepon</th>
                <th>Jenis Pelatihan (WUB)</th>
                <th>Nama Kelompok (WUB)</th>
                <th>Tahun Pelatihan (WUB)</th>
                <th>SKPD Pengampu</th>
                <th>Sektor Usaha</th>
                <th>Pelatihan Yang Pernah Diikuti</th>
            </tr>
            @php $no = 1; @endphp
            @foreach($form as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->nama_usaha }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->alamat_usaha }}</td>
                <td>{{ $item->kecamatan->kecamatan }}</td>
                <td>{{ $item->kelurahan->kelurahan }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>{{ $item->jenispelatihan->jenis_pelatihan }}</td>
                <td>{{ $item->nama_Kel }}</td>
                <td>{{ $item->thn_pelatihan }}</td>
                <td>{{ $item->skpdpengampu->skpd_pengampu }}</td>
                <td>{{ $item->sektorusaha->sektor_usaha }}</td>
                <td>{{ $item->plth_yg_prnh_ikut }}</td>
            </tr>
            @endforeach
        </table>
    </div>

</body>

<script>
    window.print();
</script>

</html>

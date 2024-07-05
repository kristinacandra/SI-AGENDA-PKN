<!DOCTYPE html>
<html>
    <head>
        <style>
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #95B1BF;
        color: white;
        }
        </style>
    </head>
<body>
    <h1 style="text-align: center;">DATA AGENDA EKSTERNAL</h1>
    <table id="customers">
        <thead>
            <tr>
                <th >No</th>
                <th >Agenda Kegiatan</th>
                <th >Nomor Surat</th>
                <th >Waktu</th>
                <th >Nama</th>
                <th >Lokasi</th>
                <th >Status</th>
                <th >Status</th>
            </tr>
        </thead>
          <tbody>
            <?php $i = 1; ?>
            @foreach ($data as $item)
                <tr>
                    <td class="col-1">{{ $i }}</td>
                    <td class="col-2">{{ $item->agenda_kegiatan }}</td>
                    <td class="col-2">{{ $item->no_surat }}</td>
                    <td class="col-2">{{ $item->waktu_pelaksanaan }}</td>
                    <td class="col-2">{{ $item->nama }}</td>
                    <td class="col-2">{{ $item->lokasi }}</td>
                    <td class="col-2">{{ $item->status }}</td>
                </tr>
                <?php $i++; ?>
            @endforeach
          </tbody>
    </table>
</body>
</html>

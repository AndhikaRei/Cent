<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <td>{{$item->name}}</td>
    </tr>
    <tr>
        <th>Harga</th>
        <td>Rp.{{$item->price}}</td>
    </tr>
    <tr>
        <th>Type</th>
        <td>{{$item->type}}</td>
    </tr>
    <tr>
        <th>Hari</th>
        <td>{{$item->date}}</td>
    </tr>
    <tr>
        <th>Waktu</th>
        <td>{{$item->time}}</td>
    </tr>
    <tr>
        <th>Lokasi</th>
        <td>{{$item->location}}</td>
    </tr>
    <tr>
        <th>Status Transaksi</th>
        <td>{{$item->status}}</td>
    </tr>
    <tr>
        <th>Deskripsi</th>
        <td>
            <?= $item->description; ?>
        </td>
    </tr>
</table>
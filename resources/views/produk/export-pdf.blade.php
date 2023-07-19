<!DOCTYPE html>
<html>

<head>
    <title>Export Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <center>
        <h1>{{ $title }}</h1>
    </center>
    <p>Tanggal: {{ $date }}</p>
    <table id="dataTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th>Shirt Size</th>
                <th>Shirt Color</th>
                <th>Shirt Type</th>
                <th>Shirt Pattern</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @forelse ($produk as $produk)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $produk->first_name }}</td>
                <td>{{ $produk->last_name }}</td>
                <td>{{ $produk->age }}</td>
                <td>{{ $produk->email }}</td>
                <td>{{ $produk->phone }}</td>
                <td>{{ $produk->address }}</td>
                <td>{{ $produk->city }}</td>
                <td>{{ $produk->country }}</td>
                <td>{{ $produk->shirt_size }}</td>
                <td>{{ $produk->shirt_color }}</td>
                <td>{{ $produk->shirt_type }}</td>
                <td>{{ $produk->shirt_pattern }}</td>
                <td>{{ $produk->price }}</td>
                <td>{{ $produk->quantity }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">
                    Data data belum Tersedia.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>

</html>
@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="shadow-lg p-10 rounded">
        <div class="flex justify-end mb-5">
            <div>
                <form action="{{ route('produk.view-pdf') }}" method="post">
                    @csrf
                    <a href="{{ route('produk.create') }}" class="text-[#007AFF] font-medium py-2 px-4 relative border border-[#007AFF] rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">Tambah
                        Data</a>
                    <button type="submit" class="text-green-500 font-medium py-2 px-4 relative border border-green-500 rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-green-500 before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">Export PDF</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="flex justify-between">
            <h2 class="text-2xl font-bold justify-start mt-5">Data Clothes &#x1F4E6;</h2><br />

        </div>

        <div class="relative overflow-x-auto shadow-md rounded-lg mt-5">
            <table class="w-full text-sm text-left text-black ">
                <thead class="text-base text-white uppercase bg-blue-600">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Age
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            City
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Country
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Shirt Size
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Shirt Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Shirt Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Shirt Pattern
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($produk as $data)
                    <tr>
                        <td class="px-6 py-4">{{ $no++ }}</td>
                        <td class="px-6 py-4">{{ $data->first_name }}</td>
                        <td class="px-6 py-4">{{ $data->last_name }}</td>
                        <td class="px-6 py-4">{{ $data->age}}</td>
                        <td class="px-6 py-4">{{ $data->email}}</td>
                        <td class="px-6 py-4">{{ $data->phone}}</td>
                        <td class="px-6 py-4">{{ $data->address}}</td>
                        <td class="px-6 py-4">{{ $data->city}}</td>
                        <td class="px-6 py-4">{{ $data->country}}</td>
                        <td class="px-6 py-4">{{ $data->shirt_size}}</td>
                        <td class="px-6 py-4">{{ $data->shirt_color}}</td>
                        <td class="px-6 py-4">{{ $data->shirt_type}}</td>
                        <td class="px-6 py-4">{{ $data->shirt_pattern}}</td>
                        <td class="px-6 py-4">Rp.{{ number_format($data->price) }}</td>
                        <td class="px-6 py-4">{{ $data->quantity}}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('produk.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('produk.edit', $data->id) }}" class="relative hover:text-yellow-500 hover:duration-300 hover:ease-in-out before:absolute before:left-0 before:bottom-0 before:-z-10 before:h-0.5 before:w-full before:origin-top-left before:scale-x-0 before:bg-yellow-500 before:transition-transform before:duration-300 before:content-['']  before:hover:scale-x-100 mr-5">Edit</a> |
                                <button type="submit" onsubmit="return confirm('Are You Sure ?');" class="relative hover:text-red-500 hover:duration-300 hover:ease-in-out before:absolute before:left-0 before:bottom-0 before:-z-10 before:h-0.5 before:w-full before:origin-top-left before:scale-x-0 before:bg-red-500 before:transition-transform before:duration-300 before:content-['']  before:hover:scale-x-100 mr-5">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="15" class="text-center py-5">
                            Data tidak ditemukan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
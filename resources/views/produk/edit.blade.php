@extends('layouts.app')

@section('content')
<div class="container mx-auto lg:px-96">
    <div class="shadow-lg p-10 rounded">
        <div class="flex justify-between mb-5">
            <a href="{{ route('produk.index') }}" class="relative hover:text-[#007AFF] hover:duration-300 hover:ease-in-out before:absolute before:left-0 before:bottom-0 before:-z-10 before:h-0.5 before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-['']  before:hover:scale-x-100">Kembali</a>
        </div>
        <hr>
        <h2 class="text-2xl font-bold justify-start mt-5">Add Cloth &#x1F4E6;</h2><br />

        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-5">
                <div class="relative">
                    <input id="first_name" name="first_name" type="text" value="{{ $produk->first_name }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="first_name" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        First Name
                    </label>
                    @error('first_name')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <input id="last_name" name="last_name" type="text" value="{{ $produk->last_name }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="last_name" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Last Name
                    </label>
                    @error('last_name')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <input id="age" name="age" type="number" value="{{ $produk->age }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="age" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Age
                    </label>
                    @error('age')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <input id="email" name="email" type="text" value="{{ $produk->email }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Email
                    </label>
                    @error('email')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <input id="phone" name="phone" type="text" value="{{ $produk->phone }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="phone" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Phone
                    </label>
                    @error('phone')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <input id="address" name="address" type="text" value="{{ $produk->address }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="address" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Address
                    </label>
                    @error('address')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <input id="city" name="city" type="text" value="{{ $produk->city }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="city" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        City
                    </label>
                    @error('city')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <input id="country" name="country" type="text" value="{{ $produk->country }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="country" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Country
                    </label>
                    @error('country')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <select id="shirt_size" name="shirt_size" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required>
                        <option value="" disabled>Choose shirt size</option>
                        <option value="XS" {{ $produk->shirt_size === 'XS' ? 'selected' : '' }}>XS</option>
                        <option value="S" {{ $produk->shirt_size === 'S' ? 'selected' : '' }}>S</option>
                        <option value="M" {{ $produk->shirt_size === 'M' ? 'selected' : '' }}>M</option>
                        <option value="L" {{ $produk->shirt_size === 'L' ? 'selected' : '' }}>L</option>
                        <option value="XL" {{ $produk->shirt_size === 'XL' ? 'selected' : '' }}>XL</option>
                        <option value="2XL" {{ $produk->shirt_size === '2XL' ? 'selected' : '' }}>2XL</option>
                        <option value="3XL" {{ $produk->shirt_size === '3XL' ? 'selected' : '' }}>3XL</option>
                    </select>
                    <label for="shirt_size" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Shirt Size
                    </label>
                    @error('shirt_size')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>


                <div class="relative">
                    <select id="shirt_color" name="shirt_color" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required>
                        <option value="" disabled>Choose shirt color</option>
                        <option value="Aquamarine" {{ $produk->shirt_color === 'Aquamarine' ? 'selected' : '' }}>Aquamarine</option>
                        <option value="Blue" {{ $produk->shirt_color === 'Blue' ? 'selected' : '' }}>Blue</option>
                        <option value="Crimson" {{ $produk->shirt_color === 'Crimson' ? 'selected' : '' }}>Crimson</option>
                        <option value="Fuscia" {{ $produk->shirt_color === 'Fuscia' ? 'selected' : '' }}>Fuscia</option>
                        <option value="Goldenrod" {{ $produk->shirt_color === 'Goldenrod' ? 'selected' : '' }}>Goldenrod</option>
                        <option value="Green" {{ $produk->shirt_color === 'Green' ? 'selected' : '' }}>Green</option>
                        <option value="Indigo" {{ $produk->shirt_color === 'Indigo' ? 'selected' : '' }}>Indigo</option>
                        <option value="Khaki" {{ $produk->shirt_color === 'Khaki' ? 'selected' : '' }}>Khaki</option>
                        <option value="Maroon" {{ $produk->shirt_color === 'Maroon' ? 'selected' : '' }}>Maroon</option>
                        <option value="Mauv" {{ $produk->shirt_color === 'Mauv' ? 'selected' : '' }}>Mauv</option>
                        <option value="Orange" {{ $produk->shirt_color === 'Orange' ? 'selected' : '' }}>Orange</option>
                        <option value="Pink" {{ $produk->shirt_color === 'Pink' ? 'selected' : '' }}>Pink</option>
                        <option value="Puce" {{ $produk->shirt_color === 'Puce' ? 'selected' : '' }}>Puce</option>
                        <option value="Purple" {{ $produk->shirt_color === 'Purple' ? 'selected' : '' }}>Purple</option>
                        <option value="Red" {{ $produk->shirt_color === 'Red' ? 'selected' : '' }}>Red</option>
                        <option value="Teal" {{ $produk->shirt_color === 'Teal' ? 'selected' : '' }}>Teal</option>
                        <option value="Turqoise" {{ $produk->shirt_color === 'Turqoise' ? 'selected' : '' }}>Turqoise</option>
                        <option value="Violet" {{ $produk->shirt_color === 'Violet' ? 'selected' : '' }}>Violet</option>
                        <option value="Yellow" {{ $produk->shirt_color === 'Yellow' ? 'selected' : '' }}>Yellow</option>
                    </select>
                    <label for="shirt_color" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Shirt Color
                    </label>
                    @error('shirt_color')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>


                <div class="relative">
                    <select id="shirt_type" name="shirt_type" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required>
                        <option value="" disabled>Choose shirt type</option>
                        <option value="Blazer" {{ $produk->shirt_type === 'Blazer' ? 'selected' : '' }}>Blazer</option>
                        <option value="Coat" {{ $produk->shirt_type === 'Coat' ? 'selected' : '' }}>Coat</option>
                        <option value="Hoodie" {{ $produk->shirt_type === 'Hoodie' ? 'selected' : '' }}>Hoodie</option>
                        <option value="Jacket" {{ $produk->shirt_type === 'Jacket' ? 'selected' : '' }}>Jacket</option>
                        <option value="Shirt" {{ $produk->shirt_type === 'Shirt' ? 'selected' : '' }}>Shirt</option>
                        <option value="Sweater" {{ $produk->shirt_type === 'Sweater' ? 'selected' : '' }}>Sweater</option>
                        <option value="T-Shirt" {{ $produk->shirt_type === 'T-Shirt' ? 'selected' : '' }}>T-Shirt</option>
                        <option value="Vest" {{ $produk->shirt_type === 'Vest' ? 'selected' : '' }}>Vest</option>
                    </select>
                    <label for="shirt_type" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Shirt Type
                    </label>
                    @error('shirt_type')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>


                <div class="relative">
                    <select id="shirt_pattern" name="shirt_pattern" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required>
                        <option value="" disabled>Choose shirt pattern</option>
                        <option value="None" {{ $produk->shirt_pattern === 'None' ? 'selected' : '' }}>None</option>
                        <option value="Floral" {{ $produk->shirt_pattern === 'Floral' ? 'selected' : '' }}>Floral</option>
                        <option value="Plaid" {{ $produk->shirt_pattern === 'Plaid' ? 'selected' : '' }}>Plaid</option>
                        <option value="Polkadot" {{ $produk->shirt_pattern === 'Polkadot' ? 'selected' : '' }}>Polkadot</option>
                        <option value="Striped" {{ $produk->shirt_pattern === 'Striped' ? 'selected' : '' }}>Striped</option>
                    </select>
                    <label for="shirt_pattern" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Shirt Pattern
                    </label>
                    @error('shirt_pattern')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>


                <div class="relative">
                    <input id="price" name="price" type="number" value="{{ $produk->price }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="price" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Price
                    </label>
                    @error('price')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <input id="quantity" name="quantity" type="number" value="{{ $produk->quantity }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="quantity" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Quantity
                    </label>
                    @error('quantity')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>
            </div>


            <button type="submit" class="text-[#007AFF] mt-10 font-medium py-2 px-4 relative border border-[#007AFF] rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">
                Add
            </button>
            <button type="reset" class="text-red-500 mt-10 font-medium py-2 px-4 relative border border-red-500 rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-red-500 before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">
                Reset
            </button>
        </form>
    </div>
</div>
@endsection
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
                    <input id="first_name" name="first_name" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
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
                    <input id="last_name" name="last_name" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
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
                    <input id="age" name="age" type="number" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
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
                    <input id="email" name="email" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
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
                    <input id="phone" name="phone" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
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
                    <input id="address" name="address" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
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
                    <input id="city" name="city" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
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
                    <input id="country" name="country" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
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
                        <option value="" disabled selected>Choose shirt size</option>
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="2XL">2XL</option>
                        <option value="3XL">3XL</option>
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
                        <option value="" disabled selected>Choose shirt color</option>
                        <option value="Aquamarine">Aquamarine</option>
                        <option value="Blue">Blue</option>
                        <option value="Crimson">Crimson</option>
                        <option value="Fuscia">Fuscia</option>
                        <option value="Goldenrod">Goldenrod</option>
                        <option value="Green">Green</option>
                        <option value="Indigo">Indigo</option>
                        <option value="Khaki">Khaki</option>
                        <option value="Maroon">Maroon</option>
                        <option value="Mauv">Mauv</option>
                        <option value="Orange">Orange</option>
                        <option value="Pink">Pink</option>
                        <option value="Puce">Puce</option>
                        <option value="Purple">Purple</option>
                        <option value="Red">Red</option>
                        <option value="Teal">Teal</option>
                        <option value="Turqoise">Turqoise</option>
                        <option value="Violet">Violet</option>
                        <option value="Yellow">Yellow</option>
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
                        <option value="" disabled selected>Choose shirt type</option>
                        <option value="Blazer">Blazer</option>
                        <option value="Coat">Coat</option>
                        <option value="Hoodie">Hoodie</option>
                        <option value="Jacket">Jacket</option>
                        <option value="Shirt">Shirt</option>
                        <option value="Sweater">Sweater</option>
                        <option value="T-Shirt">T-Shirt</option>
                        <option value="Vest">Vest</option>
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
                        <option value="" disabled selected>Choose shirt pattern</option>
                        <option value="None">None</option>
                        <option value="Floral">Floral</option>
                        <option value="Plaid">Plaid</option>
                        <option value="Polkadot">Polkadot</option>
                        <option value="Striped">Striped</option>
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
                    <input id="price" name="price" type="number" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
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
                    <input id="quantity" name="quantity" type="number" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
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
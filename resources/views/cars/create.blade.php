@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create Car
            </h1>
        </div>
    </div>
    <div class="flex justify-center pt-5">
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block">
                <div class="mb-4">
                    <input
                    type="file"
                    name="image"
                    class="block shadow-5xl p-2 w-80 italic">
                </div>
                <div class="mb-4">
                    <input
                    type="text"
                    name="name"
                    placeholder="Brand name..."
                    class="block shadow-5xl p-2 w-80 italic
                    placeholder-gray-400 border-2 @error('name')
                    border-red-500 @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input
                    type="text"
                    name="founded"
                    placeholder="Founded..."
                    class="block shadow-5xl p-2 w-80 italic
                    placeholder-gray-400 border-2 @error('founded')
                    border-red-500 @enderror" value="{{ old('founded') }}">
                    @error('founded')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input
                    type="text"
                    name="description"
                    placeholder="Description..."
                    class="block shadow-5xl p-2 w-80 italic
                    placeholder-gray-400 border-2 @error('description')
                    border-red-500 @enderror" value="{{ old('description') }}">
                    @error('description')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80
                uppercase font-bold">
                Submit
                </button>
            </div>
        </form>
    </div>
    {{-- @if ($errors->any())
        {
            <div class="w-4/8 m-auto text-center">
                @foreach ($errors->all() as $error)
                    <li class="text-red-500 list-none">
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        }
    @endif --}}
@endsection

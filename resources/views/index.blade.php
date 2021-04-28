@extends('layouts.app')
@section('content')
    <div class="text-center text-5xl py-15">Cars</div>
    <div class="m-auto">
        <button class="border-blue-500 border-2 p-2 ml-6 rounded">
            <a href="/create">Create new car</a>
        </button>
    </div>
    @foreach ($cars as $car)
        <div class="m-auto py-5 border-gray-400 border-b">
            <h1 class="ml-4 text-4xl"><span class="text-red-500  text-xl">Name:</span> {{ $car->name }}</h1>
            <h3 class="ml-4"><span class="text-red-500  text-xl">Description:</span>  {{ $car->description }}</h3>
        </div>
    @endforeach
@endsection

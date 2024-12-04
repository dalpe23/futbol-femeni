@extends('layouts.app')

@section('title', 'Afegir un nou estadi')

@section('content')
<div class="container mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-5">Afegir un nou estadi</h2>
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-5">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('estadis.store') }}" method="POST" class="bg-gray-100 p-5 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="nom" class="block text-gray-700 font-bold">Nom de l'Estadi:</label>
            <input type="text" name="nom" id="nom" class="w-full border-gray-300 rounded p-2" required>
        </div>
        <div class="mb-4">
            <label for="ciutat" class="block text-gray-700 font-bold">Ciutat:</label>
            <input type="text" name="ciutat" id="ciutat" class="w-full border-gray-300 rounded p-2" required>
        </div>
        <div class="mb-4">
            <label for="capacitat" class="block text-gray-700 font-bold">Capacitat:</label>
            <input type="number" name="capacitat" id="capacitat" class="w-full border-gray-300 rounded p-2" required>
        </div>
        <button type="submit" class="block text-gray-700 font-bold">Afegir</button>
    </form>
</div>
@endsection

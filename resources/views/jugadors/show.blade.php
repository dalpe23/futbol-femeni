@extends('layouts.app')
@section('title', " Detalls Jugadors")
@section('content')
    <x-jugador
       :nom="$jugador['nom']"
       :equip="$jugador['equip']"
       :posicio="$jugador['posicio']"
    />
@endsection

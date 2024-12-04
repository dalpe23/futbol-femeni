@extends('layouts.app')
@section('title', " Pàgina estadi" )
@section('content')
<x-estadis
   :nom="$estadis['nom']"
   :ciutat="$estadis['ciutat']"
   :capacitat="$estadis['capacitat']"
   :equip="$estadis['equip']"
/>
@endsection
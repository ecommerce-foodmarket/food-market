{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('layouts.user')

@section('content')
<div class="bg-white w-22.5rem h-6.75rem flex-shrink-0">
    <div class="flex items-center">
        <div class= "m-4">
            <h3 class="text-xl font-semibold">SpeedyBite</h3>
            <h4>Let’s get some foods, {{$user->name}}</h4>
        </div>
    <div>
        {{$user->picture}}
    </div>
    </div>
</div>




@endsection

@php
   $section= 'dashboard';
@endphp

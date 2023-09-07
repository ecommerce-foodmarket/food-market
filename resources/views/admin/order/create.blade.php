
@extends('layouts.admin')
@section('content')

    <div class="create-container">
    <form class='w-1/2 m-10' action="{{route('admin.order.store')}}"method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <label class="block text-gray-700 text-lg font-bold mb-2" for="cost">Order Total</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="cost">
        <label class="block text-gray-700 text-lg font-bold mb-2" for="id_user">User ID</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="id_user">
        <label for="id_status" class="block font-semibold">Status</label>
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> name="id_status" class="form-select">
                @foreach ( $statuses as $status )
                 <option value="{{$status['id']}}">{{$status['name_status']}}</option>
                @endforeach
            </select>
            <br>
            <br>
        <button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full" type="Submit">Add order</button>
    </form>
    @endsection

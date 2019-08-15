@extends('layouts.app')

@section('content')
    <div class="w-2/3 bg-gray-200 mx-auto p-6 shadow">
        <form action="/authors" method="POST" class="flex flex-col items-center">
            @csrf

             <h1 class="focus:font-bold">Add New Author</h1>
            <div class="pt-4">
                <input type="text" name="name" placeholder="Full name" class="rounded py-2 px-4 w-64">
                @error('name') <p class="text-red-600">{{ $message }}</p> @endError()

            </div>
            <div class="pt-4">
                <input type="text" name="dob" placeholder="Date of birth" class="rounded py-2 px-4 w-64">
                @error('name') <p class="text-red-600">{{ $message }}</p> @endError()
            </div>
            <div class="pt-4">
                <button class="bg-blue-400 text-white rounded py-2 px-4">Add new author</button>
            </div>
        </form>
    </div>
@endsection
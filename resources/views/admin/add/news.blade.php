@extends('admin.layout.index')

@section('title', 'Главная')

@section('section')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Комната</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form class="space-y-5 mt-5" method="POST" action="{{route('admin.news.store')}}" enctype="multipart/form-data">
                @csrf

                <input type="text" name="title" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Название" />
                <input type="text" name="description" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Описание" />

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Добавить</button>
            </form>
        </div>
    </div>
</main>

@endsection
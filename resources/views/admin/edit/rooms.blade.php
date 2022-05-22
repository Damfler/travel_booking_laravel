@extends('admin.layout.index')

@section('title', 'Главная')

@section('section')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Комната</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form class="space-y-5 mt-5" action="{{route('admin.rooms.update', ['id' => $app->id])}}" enctype="multipart/form-data">
                <input type="text" name="name" value="{{ $app->name }}" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Название" />
                <input type="text" name="description" value="{{ $app->description }}" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Описание" />
                <input type="text" name="price" value="{{ $app->price }}" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Стоимость" />
                <input type="text" name="people" value="{{ $app->people }}" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Кол-во людей" />

                <div>
                    <img class="h-64 w-64" src="/{{$app->image}}">
                </div>

                <input type="file" name="image" value="/{{$app->image}}" class="w-full h-12" placeholder="Обложка" />

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
</main>

@endsection
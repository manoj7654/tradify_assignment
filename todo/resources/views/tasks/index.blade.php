<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Task List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <x-nav-link :href="route('tasks.create')">
                      Create Task
                    </x-nav-link>
                    @foreach ($tasks as $task)
                    <p><a href="{{ route('tasks.show',['task'=>$task]) }}">{{$task->id}}</a> {{$task->title}}--{{$task->description}}  <a href="{{ route('tasks.edit',['task'=>$task]) }}">Edit</a></p>
                  @endforeach
                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
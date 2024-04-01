<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Task
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="title" value="Title">Title</label>
                                <input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="description" value="Description">Description</label>
                                    <input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required>
                            </div>
                            <div class="flex col-span-6 justify-end">
                                <button>
                                    Create Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
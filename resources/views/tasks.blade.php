<x-layout>
    {{-- <x-slot:title>
        abc Title
    </x-slot> --}}
 
    @foreach ($tasks as $task)
        {{ $task['id'] }}
        {{ $task['name'] }}
        <br>
    @endforeach
</x-layout>
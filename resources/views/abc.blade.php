<x-abctest>
    <x-slot:title>
        ABC Title
    </x-slot>
 
    @foreach ($abcs as $abc)
        {{ $abc['id'] }}
        {{ $abc['name'] }}
        <br>
        <hr>

    @endforeach
</x-abctest>
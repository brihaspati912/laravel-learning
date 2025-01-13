<x-layout>
     <x-slot:heading>
        Job dashboard
        <hr>
    </x-slot:heading>

<h2 class="font-bold text-lg px-2 ">{{$job["title"]}} </h2>
<p class=" px-2 py-1 text-lg">pays job salary {{$job["salary"]}}</p>
</x-layout>
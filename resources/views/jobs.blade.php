<x-layout>
     <x-slot:heading>
        About dashboard
        <hr>
    </x-slot:heading>

 <ul class="list-disc align-content: center ">  
  
@foreach ($jobs as $job)

  <li>{{   $job["title"]}} pays job salary {{$job["salary"]}}</li>
 
@endforeach
 </ul> 
</x-layout>
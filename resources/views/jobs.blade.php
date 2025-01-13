<x-layout>
     <x-slot:heading>
        <strong>Jobs dashboard</strong>
        <hr>
    </x-slot:heading>

 <ul class="list-disc px-5">  

  
@foreach ($jobs as $job)
<a href="/jobs/{{$job['id']}}" ><li>{{$job["title"]}}: pays job salary {{$job["salary"]}}</li></a>



 
@endforeach
 </ul> 
</x-layout>
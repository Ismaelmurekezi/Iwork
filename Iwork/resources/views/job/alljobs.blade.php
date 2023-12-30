        @vite('resources/css/app.css')
<x-layout >
 
<div class="h-full">


    <form action='/jobs/alljobs' method="GET" class="search-form">
        <input type="text" name="search" placeholder="Search for a job...">
         <button type="submit" class="btn-search" name="search-btn">Search</button>
        </form>


            <h1 class="font-bold uppercase text-xl p-4 text-[#00A9FF]">Available Jobs</h1>
     

    <div class="available">
      
        @unless (count($jobs)==0)   
        @foreach ($jobs as $job)

  {{-- Job description card  component--}}
        
  <x-job-card :job="$job" /> 

        
      
        @endforeach
        @else
        
        <p >No jobs list found</p>
            
        @endunless



 </div>
 <div class="mt-6 p-4">
    {{ $jobs->links() }}
 </div>

</div>
</x-layout>

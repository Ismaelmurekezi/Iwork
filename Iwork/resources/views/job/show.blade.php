<x-layout>
   @vite('resources/css/app.css') 


    <div class="flex m-7 h-fit">
        <img src="/img/ic.png" alt="company logo " class="mr-6" >
        <div>
            <h1 class="text-darkBlue text-2xl font-bold">{{ $job->title }}</h1>
            <p class="text-lg font-medium" >{{ $job->company }}</p>
            <h4  >Kigali, Rwanda</h4>

        </div>
    </div>


    <div class="flex flex-col">
        <div class="flex">

            <img src="/img/Group1.png" alt="jop preview" class="mr-10 -mt-2 rounded-md pl-6">
            <div class="">
             <h2 class="text-darkBlue text-xl font-sans pb-2 font-semibold">JOB PREVIEW</h2> 
             <div>
                <span class="font-semibold  text-lg">Posted</span> : <span>2023/11/23   12:23 pm</span>
             </div>
             <div>
                <span class="font-semibold  text-lg">Employmet status:</span> : <span>{{ $job->status }}</span>
             </div>
             <div>
                <span class="font-semibold  text-lg">Deadline</span> : <span>2023/11/23   12:23 pm</span>
      
             </div>
            
             <div class="">
                <span class="font-semibold  text-lg">Tags</span>
          
   <x-job-tags :tagsCsv="$job->tags"/>


          
             </div>
    
             <h3 class="font-semibold pt-4 text-base text-darkBlue">CONTACT US</h3>
             <div class="">
                <div class="pb-1">
                   <span>{{ $job->email }}</span>
                 </div>
                 <div class="pb-1">
                    <span>+2507387857</span>
                 </div>
                 <div class="pb-1">
                   <span>{{ $job->location }}</span>
                 </div>
             </div>

        </div>
       
        
        
        
    </div>
    
      <div class="mb-64">
    
                <h1 class="  text-darkBlue font-bold text-xl pt-1 pl-6">JOB DESCRIPTION</h1>

                <P class="pl-5 pt-4  w-[90rem] h-96 ml-6 mt-3 overflow-hidden border-2 border-slate-300 rounded-md">{{ $job->description }}</P>
                 
                <button class="text-white font-bold text-xl ml-80 bg-lightBlue px-80 py-3 rounded-lg mt-4">  <a href="/application/create">Apply</a> </button>
             </div> 

        </div>
     {{-- <div class="flex gap-7  h-16 py-3  pl-6 mb-64">
     
        <a href="/jobs/{{ $job->id }}/edit" class="text-white bg-darkBlue font-semibold text-xl border-2 flex justify-center items-center w-36 h-10 rounded-md">Edit</a>
        
        <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('DELETE')
        <button class="text-white bg-red-600 font-semibold text-xl border-2 border-red-600 flex items-center  justify-center w-36 h-10 rounded-md  "><i class="fa-solid fa-trash"></i>Delete  </button>
     
        </form>
     </div> --}}
</x-layout>

    
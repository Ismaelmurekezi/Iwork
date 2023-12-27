<x-layout>
   @vite('resources/css/app.css') 


    <div class="flex m-7">
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
                    <img src="" alt=""> : <span>{{ $job->email }}</span>
                 </div>
                 <div class="pb-1">
                    <img src="" alt="">: <span>+2507387857</span>
                 </div>
                 <div class="pb-1">
                    <img src="" alt=""> : <span>{{ $job->location }}</span>
                 </div>
             </div>

        </div>
       
        
        
        
    </div>
    
      <div class="">
                <h1 class="text-darkBlue font-bold text-xl pt-8 pl-6">JOB DESCRIPTION</h1>

                <P class="p-6">{{ $job->description }}</P>
                      <P class="pb-4 pl-6">{{ $job->description }}</P>
             </div> 
        </div>
<a href="/jobs/{{ $job->id }}/edit" class="text-darkBlue">Edit</a>
</x-layout>

    
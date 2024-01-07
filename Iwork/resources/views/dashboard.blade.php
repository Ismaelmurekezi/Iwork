<x-app-layout>
  {{-- @vite('resources/css/app.css')  --}}

    <x-slot name="header">
    
    </x-slot>

            
    <div class="flex flex-col bg-white">
            
        <div class="w-56 h-[85vh] shadow-xl  flex flex-row ml-0 ">

            <aside class="w-64 px-7 mb-16   flex flex-col bg-white -mt-36 pt-8 ">
              <h2 class="text-3xl font-bold pb-6  pl-10 border-b-2 text-darkBlue "><a href="/">iWork</a></h2>
              <div class=" flex flex-row  text-xl ml-2 mt-7 gap-3  mb-3">
                <img src="./img/dashboard.png" alt="" class="w-6  h-6 items-center mt-1">
                <p class="font-medium   text-lightBlue  pl-2" ><a href="">Dashboard</a></p>
              </div>
              <span class="flex flex-row text-xl ml-2 mt-3 gap-3 mb-3">
                <img src="./img/users-icons.png" alt=""  class="w-6  h-6  items-center mt-1">
                <p class="font-medium   pl-2  text-gray-600 "><a href="">Employer</a></p>
              </span>
              <span class="flex flex-row text-xl ml-2 mt-3 gap-3 mb-3">
                <img src="./img/users-icons.png" alt="" class="w-6  h-6  items-center mt-1">
                <p class="font-medium   pl-2 text-gray-600"><a href="">Employee</a></p>
              </span>
              <span class="flex flex-row text-xl ml-2 mt-3 gap-3 mb-3">
                <img src="./img/to-do-list.png" alt="" class="w-6  h-6  items-center mt-1">
                <p class="font-medium    pl-2 text-gray-600"><a href="">Job List</a></p>
              </span>
              <span class="flex flex-row text-xl ml-2 mt-3 gap-3 mb-3">
                <img src="./img/application-icon.png" alt="" class="w-6  h-6  items-center mt-1">
                <p class="font-medium    pl-2 text-gray-600 active:bg-lightBlue"><a href="/applications">Application</a></p>
              </span>
              <span class="flex flex-row text-xl ml-2 mt-3 gap-3 mb-3">
                <img src="./img/schedule-icon.png" alt="" class="w-6  h-6  items-center mt-1">
                <p class="font-medium    pl-2 text-gray-600 whitespace-nowrap "><a href="">Job Schedule</a></p>
              </span>
           <button class="w-32 h-11 bg-lightBlue mt-40 ml-10 text-white font-semibold rounded-2xl"> <img src="#" alt=""> Logout</button>
            </aside>
             
          

            <div class="flex ml-32 -mt-3 max-h-[40vh] max-w-fit relative font-lg gap-7 text-white   ">
                <div class="flex gap-28 w-64 h-28 bg-[#30EBDC] m-4 relative   border-slate-400 rounded-2xl ">
                  <p class="w-12 font-medium text-xl pl-3 pt-2 whitespace-nowrap">Job Application</p>
                  <p class="absolute right-3 bottom-2 text-xl">23</p>
                </div>
                <div class="flex gap-28 w-64 h-28 bg-[#1CED7C] m-4 relative   border-slate-400 rounded-2xl ">
                  <p class="w-12 font-medium text-xl pl-3 pt-2 whitespace-nowrap">Job Post</p>
                  <p class="absolute right-3 bottom-2 font-bold text-xl ">{{ sizeof($jobs) }}</p>
                </div>
                <div class="flex gap-28 w-64 h-28 bg-[#D0004B] m-4 relative   border-slate-400 rounded-2xl ">
                  <p class="w-12 font-medium text-xl pl-3 pt-2 whitespace-nowrap">Exam Schedule</p>
                  <p class="absolute right-3 bottom-2  text-xl">23</p>
                </div> 

                
                <div class="absolute top-48 left-0 flex bottom-3 gap-7 -mt-10">

                    <div class="flex gap-28 w-64 h-28 bg-lightBlue m-4 relative   border-slate-400 rounded-2xl ">
                      <p class="w-12 font-medium text-xl pl-3 pt-2 whitespace-nowrap">Employer</p>
                      <p class="absolute right-3 bottom-2 text-xl">23</p>
                    </div>
                    <div class="flex gap-28 w-64 h-28 bg-darkBlue m-4 relative   border-slate-400 rounded-2xl ">
                      <p class="w-12 font-medium text-xl pl-3 pt-2 whitespace-nowrap">Employee</p>
                      <p class="absolute right-3 bottom-2 text-xl">23</p>
                    </div> 
                </div>
                

            </div>

            

            <div class=" flex pl-10 pr-20 flex-col  max-h-96 whitespace-nowrap gap-7 ml-10  mt-0  rounded-2xl shadow-lg border-slate-200 border-2 ">
              <h3 class=" pt-3 font-bold text-lg pl-3 text-darkBlue">UPDATES</h3>
          <div class="flex gap-5  ml-3 max-w-md ">
            <img src="/img/profileImage.jpeg" class="h-14 w-14 rounded-full">
            <span class=" w-36 "><p class="font-medium">Marcel ISHIMWE</p> has applied social media expert position  </span>
          </div>
          <div class="flex gap-5  ml-3 max-w-md">
            <img src="/img/profileImage.jpeg" class="h-14 w-14 rounded-full">
            <span class=" "><p class="font-medium">INEZA Abigael</p> has applied social media expert position </span>
          </div>
          <div class="flex gap-5  ml-3 max-w-md">
            <img src="/img/profileImage.jpeg" class="h-14 w-14 rounded-full">
            <span class="  "><p class="font-medium">John Doe</p> has applied social media expert position  </span>
          </div>
          <button class="w-32 h-10 rounded-xl text-lightBlue font-semibold border-[1px] border-lightBlue  ml-52">See More</button>
        
          </div>

          
        </div>

        <div class=" -mt-[450px] ml-72  ">
          <span class="">
            <p class="pl-6 font-medium text-lg text-lightBlue">List of Jobs</p>
            <p class="pl-6 pb-2 pt-5 font-medium">View details</p>
          </span>



<div class="relative mb-20 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right border-slate-200 border-2 text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-slate-200 border-2">
            <tr class="border-slate-200 border-2">
           
                <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                   Id
                </th>
                <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                    Job
                </th>
                <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                    Company
                </th>
                <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                   Status
                </th>
                <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                location
                </th>
                <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                  Email
                </th>
                <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                  Tags
                </th>
                <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                    website
                </th>
            
                <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="border-slate-200 border-2">
            <tr class="bg-white border-slate-200 border-2 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            
                @unless($jobs->isEmpty())
                @foreach($jobs as $job)
       
                <th scope="row" class="px-6 py-4  font-medium text-gray-900 whitespace-nowrap dark:text-white border-slate-200 border-2">
                  
                    {{ $job->id  }}
                </th>
                <td class="px-6 py-4 border-slate-200 border-2">
                    {{ $job->title }}
                </td>
                <td class="px-6 py-4 border-slate-200 border-2">
                    {{ $job->company }}
                </td>
                <td class="px-6 py-4 border-slate-200 border-2">
                    {{ $job->status }} 
                </td>
                <td class="px-6 py-4 border-slate-200 border-2">
                    {{ $job->location }}
                </td>
                <td class="px-6 py-4 border-slate-200 border-2">
                    {{ $job->email }}
                </td>
                <td class="px-6 py-4 border-slate-200 border-2  text-darkBlue font-bold">
                {{ $job->tags }}
                </td>
                <td class="px-6 py-4 border-slate-200 border-2 ">
                    {{ $job->website }}      
                </td>
    
                <td class="flex px-6 py-4 border-slate-200 border-t-2">
                    <a href="/jobs/{{ $job->id }}/edit" class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Edit</a>
                    <form method="POST" action="/jobs/{{$job->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400" ><i class="fa-solid fa-trash"></i> Delete</button>
                      </form>
                </td>
                
            </tr>
            
            @endforeach
              @else
              <tr class="border-gray-300">
                <td class="px-4 border-t border-b border-gray-300 text-lg">
                  <p class="text-center">No Job Listings Found</p>
                </td>
              </tr>
              @endunless
           
            
        </tbody>
    </table>
    <div class="mt-6 p-4">
        {{ $jobs->links() }}
     </div>
</div>

        
                  
        </div>
      </div>
      
      



   
</x-app-layout>

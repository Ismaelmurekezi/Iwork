<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>

    {{-- <div class="py-12 float-right w-auto"> --}}
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full"> --}}
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div> --}}
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
                        <p class="font-medium    pl-2 text-gray-600"><a href="">Application</a></p>
                      </span>
                      <span class="flex flex-row text-xl ml-2 mt-3 gap-3 mb-3">
                        <img src="./img/schedule-icon.png" alt="" class="w-6  h-6  items-center mt-1">
                        <p class="font-medium    pl-2 text-gray-600 whitespace-nowrap "><a href="">Job Schedule</a></p>
                      </span>
                   <button class="w-32 h-11 bg-lightBlue mt-40 ml-10 text-white font-semibold rounded-2xl"> <img src="#" alt=""> Logout</button>
                    </aside>

                    <div class="flex ml-32 mt-6 max-h-[40vh] max-w-fit relative font-lg gap-7 text-white   ">
                        <div class="flex gap-28 w-64 h-28 bg-[#30EBDC] m-4 relative   border-slate-400 rounded-2xl ">
                          <p class="w-12 font-medium text-xl pl-3 pt-2 whitespace-nowrap">Job Application</p>
                          <p class="absolute right-3 bottom-2 ">23</p>
                        </div>
                        <div class="flex gap-28 w-64 h-28 bg-[#1CED7C] m-4 relative   border-slate-400 rounded-2xl ">
                          <p class="w-12 font-medium text-xl pl-3 pt-2 whitespace-nowrap">Job Post</p>
                          <p class="absolute right-3 bottom-2 ">23</p>
                        </div>
                        <div class="flex gap-28 w-64 h-28 bg-[#D0004B] m-4 relative   border-slate-400 rounded-2xl ">
                          <p class="w-12 font-medium text-xl pl-3 pt-2 whitespace-nowrap">Exam Schedule</p>
                          <p class="absolute right-3 bottom-2 ">23</p>
                        </div> 

                        
                        <div class="absolute top-48 left-0 flex bottom-3 gap-7 -mt-10">

                            <div class="flex gap-28 w-64 h-28 bg-lightBlue m-4 relative   border-slate-400 rounded-2xl ">
                              <p class="w-12 font-medium text-xl pl-3 pt-2 whitespace-nowrap">Employer</p>
                              <p class="absolute right-3 bottom-2 ">23</p>
                            </div>
                            <div class="flex gap-28 w-64 h-28 bg-darkBlue m-4 relative   border-slate-400 rounded-2xl ">
                              <p class="w-12 font-medium text-xl pl-3 pt-2 whitespace-nowrap">Employee</p>
                              <p class="absolute right-3 bottom-2 ">23</p>
                            </div> 
                        </div>
                        

                    </div>

                    

                    <div class=" flex  max-w-sm flex-col  max-h-96 whitespace-nowrap gap-8 ml-20 mt-3  rounded-2xl shadow-lg">
                      <h3 class=" pt-3 font-bold text-lg pl-3 text-darkBlue">UPDATES</h3>
                  <div class="flex gap-5  ml-3 max-w-md">
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
                  <table class="border-2 border-slate-300">
                    <tr  class="bg-lightBlue  border-slate-300 border-2 ">
                      <th class="px-8 py-4">ID</th>
                      <th class="px-8">Company</th>
                      <th class="px-8">Country</th>
                      <th class="px-8">Country</th>
                      <th class="px-8">Country</th>
                      <th class="px-8">Country</th>
                      <th class="px-8">Country</th>
                      <th class="px-8 ">Country</th>
                    </tr>
                    <tr class="px-8">
                      <td class="px-8 py-1">1</td>
                      <td class="px-8">Maria Anders</td>
                      <td class="px-8">Germany</td> 
                      <td class="px-8">Germany</td>
                      <td class="px-8">Germany</td>
                      <td class="px-8">Germany</td>
                      <td class="px-8">Germany</td>
                      <td class="px-8">Germany</td>
                    </tr>
                    <tr class="px-8">
                      <td class="px-8 py-1">2</td>
                      <td class="px-8">Francisco Chang</td>
                      <td class="px-8">Mexico</td>
                      <td class="px-8">Mexico</td>
                      <td class="px-8">Mexico</td>
                      <td class="px-8">Mexico</td>
                      <td class="px-8">Mexico</td>
                      <td class="px-8">Mexico</td>
                    </tr>
                    <tr class="px-8">
                      <td class="px-8 py-1">3</td>
                      <td class="px-8">Roland Mendel</td>
                      <td class="px-8">Austria</td>
                      <td class="px-8">Austria</td>
                      <td class="px-8">Austria</td>
                      <td class="px-8">Austria</td>
                      <td class="px-8">Austria</td>
                      <td class="px-8">Austria</td>
                    </tr>
                    <tr class="px-8 py-1">
                      <td class="px-8">4</td>
                      <td class="px-8">Helen Bennett</td>
                      <td class="px-8">UK</td>
                      <td class="px-8">UK</td>
                      <td class="px-8">UK</td>
                      <td class="px-8">UK</td>
                      <td class="px-8">UK</td>
                      <td class="px-8">UK</td>
                    </tr>
                    <tr class="px-8">
                      <td class="px-8 py-1">5</td>
                      <td class="px-8">Yoshi Tannamuri</td>
                      <td class="px-8">Canada</td>
                      <td class="px-8">Canada</td>
                      <td class="px-8">Canada</td>
                      <td class="px-8">Canada</td>
                      <td class="px-8">Canada</td>
                      <td class="px-8">Canada</td>
                    </tr>
                    <tr class="px-8">
                      <td class="px-8 py-1">6</td>
                      <td class="px-8">Giovanni Rovelli</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                    </tr>
                    <tr class="px-8">
                      <td class="px-8 py-1">6</td>
                      <td class="px-8">Giovanni Rovelli</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                    </tr>
                    <tr class="px-8">
                      <td class="px-8 py-1">7</td>
                      <td class="px-8">Giovanni Rovelli</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                    </tr>
                    <tr class="px-8">
                      <td class="px-8 py-1">8</td>
                      <td class="px-8">Giovanni Rovelli</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                      <td class="px-8">Italy</td>
                    </tr>
                 
                  </table>
                          
                </div>
              </div>
                
                
               
   
</x-app-layout>

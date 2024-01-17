<div class="relative mb-20 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right border-slate-200 border-2 text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-slate-200 border-2">
            <tr class="border-slate-200 border-2">
           
                <th scope="col" class="px-6 py-2 border-slate-200 border-2">
                   Id
                </th>
                <th scope="col" class="px-6 py-2 border-slate-200 border-2">
                    Names
                </th>
              
                <th scope="col" class="px-6 py-2 border-slate-200 border-2">
                  Email
                </th>
                <th scope="col" class="px-6 py-2 border-slate-200 border-2">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="border-slate-200 border-2">
            <tr class="bg-white border-slate-200 border-2 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            
              @unless($applications->isEmpty())
              @foreach($applications as $application)
       
                <th scope="row" class="px-6 py-2  font-medium text-gray-900 whitespace-nowrap dark:text-white border-slate-200 border-2">
                  
                    {{ $application->id  }}
                </th>
                <td class="px-6 py-2 border-slate-200 border-2">
                    {{ $application->empname }}
                </td>
            
                <td class="px-6 py-2 border-slate-200 border-2">
                    {{ $application->email }}
                </td>
            
    
                <td class="flex px-6 py-2 border-slate-200 border-t-2">
                    <a href="/application/{{ $application->id }}/edit" class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Edit</a>
                    <form method="POST" action="/application/{{$application->id}}">
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
                  <p class="text-center">No Listings Found</p>
                </td>
              </tr>
              @endunless
           
            
        </tbody>
    </table>
    {{-- <div class="mt-6 p-4">
        {{ $jobs->links() }}
     </div> --}}
</div>
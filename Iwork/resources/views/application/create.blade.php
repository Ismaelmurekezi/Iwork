
@vite('resources/css/app.css') 

<x-formstyle class="p-10 max-w-lg mx-auto mt-24  ">
   <header class="text-center">
     <h2 class="text-2xl font-bold text-darkBlue uppercase mb-1">JOB APPLICATION</h2>
   </header>
<form action="/application"  method="POST" enctype="multipart/form-data">
   @csrf

   <div class="mb-6">
     <label for="empname" class="inline-block text-lg mb-2">Employee Name</label>
     <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="empname"
     placeholder="Enter your name"
       value="{{old('empname')}}" />

     @error('empname')
     <p class="text-red-500 text-xs mt-1">{{$message}}</p>
     @enderror
   </div>

   <div class="mb-6">
       <label for="title" class="inline-block text-lg mb-2">Age</label>
       <input type="number" class="border border-gray-400  rounded-lg p-2 w-full" name="age"
         placeholder="Enter your age" value="{{old('age')}}" />
 
       @error('age')
       <p class="text-red-500 text-xs mt-1">{{$message}}</p>
       @enderror
     </div>

   <div class="mb-6">
     <label for="location" class="inline-block text-lg mb-2"> location</label>
     <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="location"
       placeholder="Your location" value="{{old('location')}}" />

     @error('location')
     <p class="text-red-500 text-xs mt-1">{{$message}}</p>
     @enderror
   </div>

   <div class="mb-6">
     <label for="email" class="inline-block text-lg mb-2">
       Contact Email
     </label>
     <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="email" value="{{old('email')}}" />

     @error('email')
     <p class="text-red-500 text-xs mt-1">{{$message}}</p>
     @enderror
   </div>

   <div class="mb-6">
       <label for="email" class="inline-block text-lg mb-2">
      Telephone Number
       </label>
       <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="telephone" value="{{old('telephone')}}" />
 
       @error('telephone')
       <p class="text-red-500 text-xs mt-1">{{$message}}</p>
       @enderror
     </div>

   <div class="mb-6">
     <label for="tags" class="inline-block text-lg mb-2">
Skills (Comma Separated)
     </label>
     <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="skills"
       placeholder="Your skills" value="{{old('skills')}}" />

     @error('skills')
     <p class="text-red-500 text-xs mt-1">{{$message}}</p>
     @enderror
   </div>

   {{-- <div class="mb-6">
     <label for="logo" class="inline-block text-lg mb-2">
    Qualification/CV etc
     </label>
     <input type="file" class="border border-gray-400  rounded-lg p-2 w-full" name="logo" value="{{old('log')}}"/>

     @error('logo')
     <p class="text-red-500 text-xs mt-1">{{$message}}</p>
     @enderror
   </div> --}}

   <div class="mb-6  ">
     <input type="submit" class="w-full mt-7 font-bold text-white border-2 bg-lightBlue rounded-xl py-2 px-4 hover:bg-blue-400" value="Apply"/>
 
     <button class="w-full mt-3 font-bold border-lightBlue border-2  rounded-xl py-2 px-4  hover:bg-blue-400 ">
       <a href="/" class=" text-lightBlue ml-4 hover:text-white"> Back </a>
     </button>


   </div>
 </form>
</x-formstyle>

 @vite('resources/css/app.css') 

 <x-formstyle class="p-10 max-w-lg mx-auto mt-24  ">
    <header class="text-center">
      <h2 class="text-2xl font-bold text-darkBlue uppercase mb-1">CREATE JOB</h2>
    </header>
<form action="/jobs"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
      <label for="company" class="inline-block text-lg mb-2">Company Name</label>
      <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="company"
        value="{{old('company')}}" />

      @error('company')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="title" class="inline-block text-lg mb-2">Job Title</label>
      <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="title"
        placeholder="Example: Senior Laravel Developer" value="{{old('title')}}" />

      @error('title')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Job status</label>
        <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="status"
          placeholder="Example: Senior Laravel Developer" value="{{old('title')}}" />
  
        @error('status')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

    <div class="mb-6">
      <label for="location" class="inline-block text-lg mb-2">Job Location</label>
      <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="location"
        placeholder="Example: Remote, Boston MA, etc" value="{{old('location')}}" />

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
        website
        </label>
        <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="website" value="{{old('website')}}" />
  
        @error('website')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

    <div class="mb-6">
      <label for="tags" class="inline-block text-lg mb-2">
        Tags (Comma Separated)
      </label>
      <input type="text" class="border border-gray-400  rounded-lg p-2 w-full" name="tags"
        placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags')}}" />

      @error('tags')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="logo" class="inline-block text-lg mb-2">
        Company Logo
      </label>
      <input type="file" class="border border-gray-400  rounded-lg p-2 w-full" name="logo" value="{{old('log')}}"/>

      @error('logo')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="description" class="inline-block text-lg mb-2">
        Job Description
      </label>
      <textarea class="border border-gray-400  rounded-lg p-2 w-full" name="description" rows="10"
        placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>

      @error('description')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <input type="submit" class="w-full font-bold text-white border-2 bg-lightBlue rounded-xl py-2 px-4 hover:bg-blue-400" value="Post"/>
  
      <button class="w-full mt-3 font-bold border-lightBlue border-2 bg-white rounded-xl py-2 px-4  hover:bg-blue-400 hover:border-blue-400">
        <a href="/" class=" text-lightBlue ml-4 "> Back </a>
      </button>

 
    </div>
  </form>
 </x-formstyle>
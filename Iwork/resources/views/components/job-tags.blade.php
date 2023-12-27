
@props(['tagsCsv'])

@php
$tags =explode(',',$tagsCsv);   

@endphp

<ul class="flex gap-2  ">
 @foreach($tags as $tag)
  
 <li class="w-15 h-7 bg-slate-500 text-white py-1 px-2 rounded-md "><a href="/?tag={{ $tag }}">{{ $tag }}</a></li>

 @endforeach

    {{-- <li class="w-15 h-7 bg-slate-500 text-white py-1 px-2 rounded-md"><a href="#">Vue</a></li>
    <li class="w-15 h-7 bg-slate-500 text-white py-1 px-2 rounded-md"><a href="#">Backend</a></li> --}}

</ul>
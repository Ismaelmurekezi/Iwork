@if(session()->has('successMessage'))
<div   x-data="{show: true}" x-init="setTimeout(()=>show=false,3000)" x-show="show" class="fixed top-10 left-1/2 transform bg-success  -translate-x-1/2 bg-laravel text-white px-48 py-3">
    
<p>

    {{ session('successMessage') }}
</p>

</div>
@endif






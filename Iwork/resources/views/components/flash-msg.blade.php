@if(session()->has('successMessage'))
<div   x-data="{show: true}" x-init="setTimeout(()=>show=false,3000)" x-show="show" class="flash-message">
    
<p>

    {{ session('successMessage') }}
</p>

</div>
@endif

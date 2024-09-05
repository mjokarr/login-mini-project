<ul>
    @if ($errors->any())
        
        <div class="small mb-2" style="text-align: end">
            @foreach ($errors->all() as $error)
                <li class="text-danger" style="list-style-type:none">
                    {{ $error }}
                </li>    
            @endforeach
        </div>                        
        
    @endif
</ul>
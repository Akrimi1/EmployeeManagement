<div>
    <ul>
        @foreach($results as $r)
            <li>{{ $r->getName() }}</li>
        @endforeach
        
    </ul>
    <span>{{ $authUrl }}</span>
    <button class="btn btn-info" type="button" wire:click="">test</button>
</div>

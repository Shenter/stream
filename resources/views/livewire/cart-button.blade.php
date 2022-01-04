<div>

    <button class="btn btn-outline-dark" type="submit" wire:click="Cart">
        <i class="bi-cart-fill me-1"></i>
        {{__('content.Cart')}}
        <span class="badge bg-dark text-white ms-1 rounded-pill">
            <div> {{$count}} ({{$price}}$)</div>
        </span>
    </button>

</div>

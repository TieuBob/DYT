<div>
    <form wire:submit="subscribe()" method="POST" class="js-form-message">
        <x-form-alerts></x-form-alerts>
        <label class="sr-only" for="subscribeSrEmail">Email address</label>
        @error('email')
            <span class="text-danger ml-1">{{ $message }}</span>
        @enderror
        <div class="input-group input-group-pill">
            <input type="text" wire:model.live="email" class="form-control border-0 height-40"
                placeholder="Email address">
            <div class="input-group-append">
                <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign
                    Up</button>
            </div>
        </div>
    </form>
</div>

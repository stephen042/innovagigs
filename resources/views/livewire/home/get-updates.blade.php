<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="tp-footer__widget footer-col-4">
        <h3 class="tp-footer__widget-title">Updates From Us</h3>
        <div class="tp-footer__form" >
            <form wire:submit='getUpdates'>
                @csrf
                <input wire:model="email" type="email" placeholder="Enter mail" required>
                <div class="tp-footer__action mt-45">
                    <button type="submit">
                        subscribe 
                        <span><i class="fas fa-paper-plane"></i></span>
                        <x-spinner />
                    </button>
                </div>
                <div class="mt-3">
                    @if($message)
                        <em class="text-success">{{ $message }}</em>
                    @elseif($error)
                        <em class="text-danger">{{ $error }}</em>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
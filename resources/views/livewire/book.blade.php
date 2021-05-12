<div x-data="data()">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cookie&display=swap');

        button:disabled {
            background: rgb(142, 142, 142);
            color: black;
        }

    </style>
    <form wire:submit.prevent="submit" class="relative">
        @csrf

        <div class="mt-3">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input disabled="{{ $isBooked || $isBooking }}" id="name" class="block mt-1 w-full" type="text"
                wire:model.defer="name" :value="old('name')" required />
            @error('name')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3">
            <x-jet-label for="number" value="{{ __('Contact Number') }}" />
            <x-jet-input disabled="{{ $isBooked || $isBooking }}" id="number" class="block mt-1 w-full" type="number"
                wire:model.defer="number" :value="old('number')" required />
            @error('number')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input disabled="{{ $isBooked || $isBooking }}" id="email" class="block mt-1 w-full" type="email"
                wire:model.defer="email" :value="old('email')" required />
            @error('email')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3">
            <x-jet-label for="venue_date" value="{{ __('Venue Date') }}" />
            <x-jet-input disabled="{{ $isBooked || $isBooking }}" id="venue_date" class="block mt-1 w-full"
                type="date" wire:model.defer="venue_date" :value="old('venue_date')" required />
            @error('venue_date')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3">
            <x-jet-label for="event_detail" value="{{ __('Tell Us About Your Event') }}" />
            <textarea {{ $isBooked || $isBooking ? 'disabled' : '' }} wire:model.defer="event_detail"
                id="event_detail" rows="5" required
                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
            @error('event_detail')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>


        <div x-show.transition.in.duration.300ms="show"
            class="absolute bottom-0 w-full mx-auto px-4 py-3 border-t-4 border-blue-300 z-30 bg-white rounded-md shadow-xl">
            <div class="mt-3">
                <h1 class="text-xl font-semibold text-center pb-5" style="font-family:'Cookie', cursive;">
                    Confirm Booking
                </h1>
                <div id="reDiv">
                    <div id="recaptcha-container"></div>
                </div>
                @if ($otpSent)
                    <p class="text-blue-400">We have sent you an OTP to your registerd mobile number</p>
                @else
                    <p class="text-blue-400">Please Verify Captcha to Send OTP</p>
                @endif
                <x-jet-input id="code" class="block mt-1 w-full" type="text" :value="old('code')" autofocus />
                @error('code')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
                @if (session('nVerified'))
                    <div
                        class="font-medium text-sm text-white ml-3  px-3 pt-3 border-l-2 border-green-600 bg-green-300">
                        {{ session('nVerified') }}
                    </div>
                @endif
                <div class="flex items-center justify-end mt-4">
                    <button x-onclick="verifyOTP()" {{ !$otpSent ? 'disabled' : '' }}
                        class="bg-blue-500 px-3 py-2 rounded-md text-white disabled:bg-blue-100 disabled:cursor-not-allowed">
                        Verify
                    </button>
                </div>
            </div>
        </div>


        @if ($isBooked)

            <div class="bg-blue-100 border-l-2 border-blue-500 text-blue-700 px-4 py-3" role="alert">
                <p class="font-bold">Already Applied For Booking</p>
                <p class="text-sm">We will Contact You Soon</p>
            </div>

        @else
            <div class="flex items-center justify-end mt-4">

                <button id="btn" x-on:click="$wire.isValidated()" @v.window="render()" type="button"
                    class="bg-blue-500 px-3 py-2 rounded-md text-white disabled:bg-blue-100">
                    Book
                </button>
            </div>
        @endif
    </form>

    <script>
        function data() {
            return {
                show: @entangle('isBooking'),
                number: @entangle('number'),
                otpCode: 0,
                isVerified: @entangle('isVerified'),
                render() {
                    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
                        'size': 'normal',
                        'callback': (response) => {
                            this.sendOTP();
                        },
                        'expired-callback': () => {
                            this.resetReCapcha();
                        }
                    });
                    recaptchaVerifier.render();
                },
                resetReCapcha() {
                    var parent = document.getElementById('reDiv');
                    document.getElementById('recaptcha-container').remove();
                    var re = document.createElement('div');
                    re.id = 'recaptcha-container';
                    parent.appendChild(re);
                    this.render();
                },
                sendOTP() {
                    firebase.auth().signInWithPhoneNumber("+91" + this.number, window.recaptchaVerifier)
                        .then(function(confirmationResult) {
                            window.confirmationResult = confirmationResult;
                            Livewire.emit('OTPsent')
                        }).catch(function(error) {
                            console.log(error)
                        });
                },
                verifyOTP() {
                    confirmationResult.confirm(this.otpCode).then((result) => {
                        Livewire.emit('verified')
                    }).catch((error) => {
                        console.log(error)
                    });
                }
            }
        }

    </script>
</div>

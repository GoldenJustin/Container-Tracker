<div class="col-lg-9 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-header">
            <div class="card-title">Update Profile</div>
        </div>
        <div class="card-body">
            <section>
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        Update Profile
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        Update your account's profile information and email address.
                    </p>
                </header>

                <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="mt-6 space-y-6">
                    @csrf
                </form>

                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')

                    <div class="row gutters">
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" name="name" type="text" class="form-control mt-1 block w-full" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="email" class="form-control mt-1 block w-full" value="{{ old('email', $user->email) }}" required autocomplete="username">
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-sm mt-2 text-gray-800">
                                            Your email address is unverified.

                                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Click here to re-send the verification email.
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                A new verification link has been sent to your email address.
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>


                    

                    <div class="flex items-center gap-4">
                        <x-primary-button class="btn-warning">{{ __('Save') }}</x-primary-button>
            
                        @if (session('status') === 'profile-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >Saved.</p>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

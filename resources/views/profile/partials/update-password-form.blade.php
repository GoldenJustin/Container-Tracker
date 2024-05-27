{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Update Password
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Ensure your account is using a long, random password to stay secure.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" class="form-label" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full form-control" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" class="form-label" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full form-control" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" class="form-label" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="btn-warning">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
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
</section> --}}


<div class="col-lg-9 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-header">
            <div class="card-title">Update Password</div>
        </div>
        <div class="card-body">
            <section>
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        Ensure your account is using a long, random password to stay secure.                    </p>
                </header>

                <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="mt-6 space-y-6">
                    @csrf
                </form>

                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    <div class="row gutters">
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="update_password_current_password" class="form-label">Current Password</label>
                                <input id="update_password_current_password" name="current_password" type="password" class="form-control mt-1 block w-full"  required autofocus autocomplete="new-password">
                                <x-input-error class="mt-2" :messages="$errors->updatePassword->get('current_password')" />
                            </div>

                            <div>
                                <x-input-label for="update_password_password" :value="__('New Password')" class="form-label" />
                                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full form-control" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" class="form-label" />
                                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control mt-1 block w-full" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>

                          
                        </div>

                    </div>

                    <br>
                    <div class="flex items-center gap-4">
                        <x-primary-button class="btn-warning">{{ __('Save') }}</x-primary-button>
            
                        @if (session('status') === 'password-updated')
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

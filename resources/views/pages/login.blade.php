@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div x-data="{ form: 'login' }"
             class="bg-housify-light p-6 rounded-sm border-[1.5px] border-housify-darkest shadow-md w-full max-w-sm text-sm text-housify-darkest font-medium mx-auto">
            <!-- LOGIN FORM -->
            <div x-show="form === 'login'">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold mb-4">Log in to <span class="font-bold">AirBnBreeze</span></h2>
                    <button class="text-xl font-bold">&times;</button>
                </div>

                <form action="{{ route('user.login') }}" method="POST">
                    @csrf
                    <input type="text" name="user_email" placeholder="Email Address"
                           class="w-full px-4 py-2 mb-3 rounded-sm border border-housify-darkest bg-housify-light text-housify-darkest placeholder-housify-dark focus:outline-none">
                    @if ($errors->has('user_email'))
                        <p class="text-red-500 text-xs">{{ $errors->first('user_email') }}</p>
                    @endif
                    <input type="password" name="user_password" placeholder="Password"
                           class="w-full px-4 py-2 mb-3 rounded-sm border border-housify-darkest bg-housify-light text-housify-darkest placeholder-housify-dark focus:outline-none">
                    @if ($errors->has('user_password'))
                        <p class="text-red-500 text-xs">{{ $errors->first('user_password') }}</p>
                    @endif
                    <button class="bg-housify-dark text-housify-light w-full py-2 rounded-sm font-semibold">LOG IN</button>
                </form>

                @if ($errors->any())
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        // Display error messages using SweetAlert
                        @foreach ($errors->all() as $error)
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: "{{ addslashes($error) }}",
                        });
                        @endforeach
                    </script>
                @endif

                @if (session('success'))
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        // Display success message using SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: "{{ addslashes(session('success')) }}",
                        });
                    </script>
                @endif


                <div class="flex justify-end mt-1 text-xs underline cursor-pointer" @click="form = 'forgot'">Forgot
                    password?</div>

                <div class="flex items-center justify-center my-2 text-xs text-housify-darkest">
                    <span class="border-t border-housify-dark w-full"></span>
                    <span class="px-2">or</span>
                    <span class="border-t border-housify-dark w-full"></span>
                </div>

                <div class="text-center">
                    <p class="text-xs mb-1">Don't have an account?</p>
                    <button @click="form = 'signup'"
                            class="w-full border border-housify-darkest py-2 rounded-sm font-semibold text-housify-darkest">SIGN UP</button>
                </div>
            </div>

            <!-- FORGOT PASSWORD FORM -->
            <div x-show="form === 'forgot'">
                <h2 class="text-lg font-semibold mb-4">Reset your password</h2>

                <form>
                    <input type="text" placeholder="Phone Number"
                           class="w-full px-4 py-2 mb-3 rounded-sm border border-housify-darkest bg-housify-light text-housify-darkest placeholder-housify-dark focus:outline-none">
                    <button class="bg-housify-darkest text-housify-light w-full py-2 rounded-sm font-semibold">SEND CODE</button>
                </form>

                <div class="flex items-center justify-center my-2 text-xs text-housify-darkest">
                    <span class="border-t border-housify-dark w-full"></span>
                    <span class="px-2">or</span>
                    <span class="border-t border-housify-dark w-full"></span>
                </div>

                <div class="text-center space-y-2">
                    <button @click="form = 'login'"
                            class="w-full border border-housify-darkest py-2 rounded-sm font-semibold text-housify-darkest">Back to LOG
                        IN</button>
                    <button @click="form = 'signup'"
                            class="w-full border border-housify-darkest py-2 rounded-sm font-semibold text-housify-darkest">Go to SIGN
                        UP</button>
                </div>
            </div>
        </div>
    </div>

@endsection

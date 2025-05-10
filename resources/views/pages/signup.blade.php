@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="flex items-center justify-center h-screen">
        <div x-data="{ form: 'signup' }"
             class="bg-housify-light p-6 rounded-sm border-[1.5px] border-housify-darkest shadow-md w-full max-w-sm text-sm text-housify-darkest font-medium mx-auto">
            <!-- SIGN UP FORM -->
            <div x-show="form === 'signup'">
                <h2 class="text-lg font-semibold mb-4">Sign up to <span class="font-bold">AirBnBreeze</span></h2>

                <form id="signupForm" action="{{ route('user.create') }}" method="POST">
                    @csrf <!-- Laravel CSRF token -->
                    <input type="text" name="user_fname" placeholder="First Name"
                           class="w-full px-4 py-2 mb-3 rounded-sm border border-housify-darkest bg-housify-light text-housify-darkest placeholder-housify-dark focus:outline-none">
                    <input type="text" name="user_lname" placeholder="Last Name"
                           class="w-full px-4 py-2 mb-3 rounded-sm border border-housify-darkest bg-housify-light text-housify-darkest placeholder-housify-dark focus:outline-none">
                    <input type="text" name="user_contact_number" placeholder="Phone Number"
                           class="w-full px-4 py-2 mb-3 rounded-sm border border-housify-darkest bg-housify-light text-housify-darkest placeholder-housify-dark focus:outline-none">
                    <input type="text" name="user_email" placeholder="Email  Address"
                           class="w-full px-4 py-2 mb-3 rounded-sm border border-housify-darkest bg-housify-light text-housify-darkest placeholder-housify-dark focus:outline-none">
                    <input type="password" name="user_password" placeholder="Password"
                           class="w-full px-4 py-2 mb-3 rounded-sm border border-housify-darkest bg-housify-light text-housify-darkest placeholder-housify-dark focus:outline-none">

                    <button class="bg-housify-dark text-housify-light w-full py-2 rounded-sm font-semibold">SIGN UP</button>
                </form>

                <script>
                    document.getElementById('signupForm').addEventListener('submit', function(e) {
                        e.preventDefault();

                        fetch(this.action, {
                            method: 'POST',
                            body: new FormData(this),
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json'
                            }
                        })
                            .then(response => {
                                if (response.redirected) {
                                    window.location.href = response.url;
                                    return;
                                }
                                return response.json();
                            })
                            .then(data => {
                                if (data && data.errors) {
                                    // Handle validation errors
                                    const errorMessages = Object.values(data.errors).join('\n');
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Validation Error',
                                        text: errorMessages,
                                        confirmButtonColor: '#3B4F39',
                                    });
                                }
                                else if (data && data.message && !data.success) {
                                    // Handle error messages
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: data.message,
                                        confirmButtonColor: '#3B4F39',
                                    });
                                }
                                else if (data && data.success) {
                                    // Show success message
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: data.message,
                                        confirmButtonColor: '#3B4F39',
                                        timer: 2000,
                                        timerProgressBar: true,
                                        willClose: () => {
                                            window.location.href = data.redirect;
                                        }
                                    });
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'An unexpected error occurred',
                                    confirmButtonColor: '#3B4F39',
                                });
                            });
                    });
                </script>

                <div class="flex items-center justify-center my-2 text-xs text-housify-darkest">
                    <span class="border-t border-housify-dark w-full"></span>
                    <span class="px-2">or</span>
                    <span class="border-t border-housify-dark w-full"></span>
                </div>

                <div class="text-center">
                    <p class="text-xs mb-1">Already have an account</p>
                    <a href="{{ route('login') }}"
                       class="block w-full border border-housify-darkest py-2 rounded-sm font-semibold text-housify-darkest text-center">LOG IN</a>
                </div>
            </div>



            <!-- FORGOT PASSWORD FORM -->
            <div x-show="form === 'forgot'">
                <h2 class="text-lg font-semibold mb-4">Reset your password</h2>

                <form>
                    <input type="text" placeholder="Email Address"
                           class="w-full px-4 py-2 mb-3 rounded-sm border border-housify-dark bg-housify-light text-housify-darkest placeholder-housify-dark focus:outline-none">
                    <button class="bg-housify-dark text-housify-light w-full py-2 rounded-sm font-semibold">SEND CODE</button>
                </form>

                <div class="flex items-center justify-center my-2 text-xs text-housify-darkest">
                    <span class="border-t border-gray-400 w-full"></span>
                    <span class="px-2">or</span>
                    <span class="border-t border-gray-400 w-full"></span>
                </div>
x`
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

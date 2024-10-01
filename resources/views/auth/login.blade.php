<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Logo --}}
    <link rel="shortcut icon" href="/img/logodema.png" type="image/png">
    {{-- Font AWESOME --}}
    <script src="https://kit.fontawesome.com/0e361b3f2b.js" crossorigin="anonymous"></script>
    {{-- Style CSS --}}
    @vite('resources/css/app.css')
    <title>DEMA | UNIDA GONTOR </title>
</head>

<body class="h-full bg-primary text-white">
    {{-- Back Button --}}
    <a href="/"
        class="block absolute top-5 left-3 bg-secondary text-black font-semibold px-2 py-2 rounded-md hover:border-secondary ">Kembali</a>
    {{-- Back Button --}}
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-24 w-auto" src="/img/logodema.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight">Masuk ke Akun
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            @if (session()->has('loginError'))
                <div class="alert alert-error col-lg-12" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif
            <form class="space-y-4" action="/login" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium leading-6">Alamat
                        Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @error('email')
                                input-wrong
                            @enderror  placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-secondary sm:text-sm sm:leading-6">
                        @error('email')
                            <div class="label-error bg-white mt-3">
                                error : {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="form-input block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @error('password')
                                input-wrong
                            @enderror placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:yellow-indigo-600 sm:text-sm sm:leading-6">
                        @error('password')
                            <div class="label-error bg-white mt-3">
                                error : {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-secondary px-3 py-1.5 text-sm font-semibold leading-6 text-primary shadow-sm hover:bg-cyan-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">Masuk</button>
                </div>
            </form>
        </div>
    </div>
    {{-- Script / JS --}}
    @vite('resources/js/app.js')
</body>

</html>

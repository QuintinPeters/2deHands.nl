<x-head/>
<body class="font-poppins ">
    <x-header />
    <section class="flex flex-col items-center h-screen justify-center">

        <form action="{{ route('Postregister') }}" method="POST" class="flex flex-col text-darkgray w-[30%] ">
            @csrf
            <h1 class="text-3xl font-semibold text-darkgray mb-4 text-center">
                Aanmelden
            </h1>
            <x-input type="text" inputmode="" name="name" placeholder="Naam" value="" />
            @error('name')
                <p class="text-red text-sm">{{ $message }}</p>
            @enderror
            <x-input type="text" inputmode="email" name="email" placeholder="E-mailadres" value="" />
            @error('email')
                <p class="text-red text-sm">{{ $message }}</p>
            @enderror
            <x-input type="password" inputmode="" name="password" placeholder="Wachtwoord" value="" />
            @error('password')
                <p class="text-red text-sm">{{ $message }}</p>
            @enderror
            <x-input type="password" inputmode="" name="password_confirmation" placeholder="Bevestig wachtwoord" value="" />

            <div class="flex justify-between mb-8">
                <p class="font-medium text-sm ">Al een account?
                    <a href="{{ route('login') }}" class="font-medium text-sm hover:underline text-blue">log hier in</a>
                </p>

            </div>
            <div class="flex justify-center mb-3 mt-1 focus:border-darkgray">
                <button type="submit" class="bg-blue text-white p-2 rounded-xl w-4/5 center ">Aanmelden</button>
            </div>
            <div class="inline-flex items-center justify-center">
                <hr class="w-4/5 h-[0.5px] my-8 bg-darkgray border-0">
                <span class="absolute px-3 bg-white  text-darkgray">of ga door met</span>

            </div>
            <div class="flex justify-center gap-4">
                <a href="{{ route('google-auth') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                        <path fill="#FFC107"
                            d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                        <path fill="#FF3D00"
                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                        <path fill="#4CAF50"
                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                        <path fill="#1976D2"
                            d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                    </svg>
                </a>
                <a href="{{ route('facebook-auth') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa" x1="9.993" x2="40.615" y1="9.993"
                            y2="40.615" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#2aa4f4" />
                            <stop offset="1" stop-color="#007ad9" />
                        </linearGradient>
                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa)"
                            d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z" />
                        <path fill="#fff"
                            d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z" />
                    </svg>
                </a>
            </div>
        </form>
    </section>
    <x-footer />
</body>

</html>

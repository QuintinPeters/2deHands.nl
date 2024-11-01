<x-head/>
<script>
    function dismissAlert(alertId) {
        const alertElement = document.getElementById(alertId);
        if (alertElement) {
            alertElement.remove();
        }
    }
</script>
<body class="font-poppins">
    <section class="min-h-screen">
        <x-header />
        @if (Auth::user()->first_name == null)
            <div id="alert" class="flex items-center p-4 mb-4 text-blue bg-gray"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    Om producten te kunnen verkopen hebben we meer informatie van jou nodig <a href="#"
                        class="font-semibold underline hover:no-underline">klik hier</a>. Om aanvullende informatie in te vullen
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 text-blue rounded-lg focus:ring-2 focus:ring-blue p-1.5 inline-flex items-center justify-center h-8 w-8"
                    onclick="dismissAlert('alert')" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        <div class="flex">
            <x-account-nav />
            <x-account-title title="Verkopen"/> 
        </div>
    </section>
    <x-footer />
</body>
</html>
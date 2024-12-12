<!-- resources/views/components/snackbar.blade.php -->
@if (session('error') || session('success'))
    <div id="snackbar" 
         class="fixed bottom-4 right-4 p-4 rounded-lg transform transition-transform duration-300 translate-y-full">
        <div class="{{ session('error') ? 'bg-red' : 'bg-green' }} text-white font-medium px-6 py-3 rounded-lg">
            {{ session('error') ?? session('success') }}
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const snackbar = document.getElementById('snackbar');
            
            // Show snackbar
            setTimeout(() => {
                snackbar.classList.remove('translate-y-full');
            }, 100);

            // Hide after 3 seconds
            setTimeout(() => {
                snackbar.classList.add('translate-y-full');
            }, 3700);
        });
    </script>
@endif
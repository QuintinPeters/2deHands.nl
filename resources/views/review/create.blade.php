<x-head />
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('starContainer');
        const stars = document.querySelectorAll('input[name="rating"]');
        const starLabels = document.querySelectorAll('.star-label svg');

        // Handle hover effects
        container.addEventListener('mouseover', function(e) {
            const star = e.target.closest('[data-rating]');
            if (!star) return;

            const rating = parseInt(star.dataset.rating);
            starLabels.forEach((label, index) => {
                if (index < rating) {
                    label.classList.add('text-yellow');
                    label.classList.remove('text-gray');
                } else {
                    label.classList.remove('text-yellow');
                    label.classList.add('text-gray');
                }
            });
        });

        // Reset on mouse leave
        container.addEventListener('mouseleave', function() {
            const checked = document.querySelector('input[name="rating"]:checked');
            const rating = checked ? parseInt(checked.value) : 0;

            starLabels.forEach((label, index) => {
                if (index < rating) {
                    label.classList.add('text-yellow');
                    label.classList.remove('text-gray');
                } else {
                    label.classList.remove('text-yellow');
                    label.classList.add('text-gray');
                }
            });
        });

        // Handle click/selection
        stars.forEach(star => {
            star.addEventListener('change', function() {
                const rating = parseInt(this.value);
                starLabels.forEach((label, index) => {
                    if (index < rating) {
                        label.classList.add('text-yellow');
                        label.classList.remove('text-gray');
                    } else {
                        label.classList.remove('text-yellow');
                        label.classList.add('text-gray');
                    }
                });
            });
        });
    });
</script>

<body class="font-poppins text-darkgray">
    <x-header />

    <section class="max-w-2xl mx-auto py-8 px-4 min-h-screen">
        <h1 class="text-2xl font-semibold mb-6">Schrijf een review</h1>

        <form action="" method="POST" class="space-y-6">
            @csrf
            <input type="hidden" name="order_id" value="">
            <input type="hidden" name="product_id" value="">

            <!-- Product Info -->
            <div class="flex items-center space-x-4 bg-lightgray p-4 rounded-lg">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }} "
                    class="w-32 h-32 object-contain bg-white">
                <div>
                    <h2 class="font-medium"></h2>
                    <p class="text-sm text-darkgray">Verkoper: {{ $product->user->name }}</p>
                </div>
            </div>

            <!-- Star Rating -->
            <div class="space-y-2">
                <label class="block font-medium">Jouw beoordeling</label>
                <div class="flex space-x-2" id="starContainer">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="relative" data-rating="{{ $i }}">
                            <input type="radio" name="rating" value="{{ $i }}"
                                id="star{{ $i }}" class="hidden peer">
                            <label for="star{{ $i }}" class="block cursor-pointer star-label">
                                <svg class="w-8 h-8 text-gray transition-colors duration-200" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </label>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Review Text -->
            <div>
                <label for="comment" class="block font-medium">Beoordeel <span class="text-blue">{{ $product->user->name }}</span> op
                    eerlijkheid,
                    betrouwbaarheid en snelheid.</label>
                <textarea name="comment" id="comment" rows="4"
                    class="w-full border border-gray rounded-lg p-2 min-h-20 max-h-60 " required></textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue text-white py-2 font-medium px-4 rounded-lg hover:bg-opacity-90 transition">
                Plaats review
            </button>
        </form>
    </section>
    <x-footer />
</body>

</html>

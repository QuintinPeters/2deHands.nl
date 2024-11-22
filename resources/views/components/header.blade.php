<header class="max-h-28 bg-green flex px-10 items-center justify-between text-white">
    <a href="{{ route('home') }}" class="flex items-center">
        <svg width="80" height="80" viewBox="0 0 1122 1122" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M891.546 651.451L891.731 650.837C843.954 650.837 814.709 620.536 779.556 595.013C754.017 576.49 725.385 560.449 684.173 560.449C665.655 560.449 649.946 560.624 636.617 561.027H539.439C525.226 561.027 513.693 573.02 513.693 587.803C513.693 602.586 525.226 614.579 539.439 614.579H594.493H630.673C649.09 617.7 663.139 634.26 663.139 654.287C663.139 669.473 655.007 682.546 643.067 689.389C640.159 690.197 626.224 694.052 607.578 699.182C595.568 702.188 584.171 705.368 573.479 708.586L571.184 709.206C531.112 720.23 487.975 732.048 480.149 733.953C474.96 734.242 470.243 734.012 466.051 732.934L322.357 636.031L296.312 616.446V616.506C295.072 615.638 293.76 614.886 292.407 614.193C290.496 613.17 288.514 612.282 286.419 611.609C284.772 611.109 283.069 610.741 281.322 610.452C279.49 610.163 277.617 609.971 275.706 609.971C273.133 609.971 270.631 610.241 268.222 610.76C246.981 612.669 230.267 630.981 230.267 653.554C230.267 665.505 235.029 676.184 242.612 683.954L242.569 683.992L242.776 684.147C245.777 687.189 249.191 689.834 252.969 691.858L262.869 699.335L488.139 869.198V869.176C489.065 869.543 489.992 869.911 490.918 870.296C496.001 872.109 501.332 873.302 507.005 873.302C510.319 873.302 513.548 872.935 516.656 872.301L517.789 871.993C594.105 851.79 751.812 810.095 825.605 791.186C827.437 790.473 829.147 789.818 830.943 789.124C849.774 784.208 875.434 778.367 891.543 778.367V767.15L891.728 767.131L891.543 751.728V654.825L891.546 651.451Z" fill="#E3DCE8"/>
            <path d="M434.363 477.506C432.232 475.268 430.357 472.88 428.361 470.566L340.891 561.55L354.305 575.502L441.847 484.444C440.735 483.421 439.566 482.534 438.497 481.475C437.271 480.26 435.938 479.163 434.734 477.891L434.363 477.506Z" fill="#16083B"/>
            <path d="M438.739 239.212C437.513 237.94 436.195 236.881 434.955 235.663L434.712 235.879C372.723 300.357 370.749 403.348 428.361 470.566C430.357 472.878 432.232 475.265 434.363 477.505L434.734 477.892C435.938 479.164 437.271 480.26 438.497 481.477C439.566 482.537 440.735 483.423 441.847 484.445C506.453 544.353 605.412 542.389 667.402 477.909L667.773 477.505L667.402 477.061C610.395 417.749 521.948 411.214 457.827 457.206C502.04 390.529 495.775 298.546 438.739 239.212Z" fill="#DD9325"/>
            <path d="M497.3 377.037C495.078 389.585 493.737 402.522 493.737 415.764L493.794 416.475L494.465 416.498C496.595 416.498 498.705 416.246 500.822 416.188C611.272 412.643 699.812 318.649 699.812 202.897L699.798 202.204L699.113 202.166C598.442 202.164 514.827 277.571 497.3 377.037Z" fill="#DD9325"/>
            </svg>
                    <h1 class="font-medium text-white text-4xl ">2deHands.nl</h1>
    </a>
    <nav class=" flex items-center text-[22px] font-medium justify-around min-w-96">
        <a href="{{ route('home') }}" class="hover:underline">Home</a>
        <div class="border-[0.5px] border-white h-8"></div>
        <a href="{{ route('products') }}" class="hover:underline">Producten</a>
        <div class="border-[0.5px] border-white h-8"></div>
        <a href="#" class="hover:underline">Contact </a>
    </nav>
    <div class="flex gap-6 items-center">
        <h1 class="font-medium text-xl w-max text-center">
            @auth
                <span> Welkom!</span>
                <br>
                {{ auth()->user()->name }}
            @endauth
        </h1>
        <div class="flex gap-4">
            <a href="{{ route('shoppingcart') }}" class="">
                <svg width="40" height="40" viewBox="0 0 50 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.1875 42.1875C18.0504 42.1875 18.75 41.4879 18.75 40.625C18.75 39.7621 18.0504 39.0625 17.1875 39.0625C16.3246 39.0625 15.625 39.7621 15.625 40.625C15.625 41.4879 16.3246 42.1875 17.1875 42.1875Z"
                        stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M39.0625 42.1875C39.9254 42.1875 40.625 41.4879 40.625 40.625C40.625 39.7621 39.9254 39.0625 39.0625 39.0625C38.1996 39.0625 37.5 39.7621 37.5 40.625C37.5 41.4879 38.1996 42.1875 39.0625 42.1875Z"
                        stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M4.6875 7.8125H10.9375L15.625 34.375H40.625" stroke="white" stroke-width="3"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M15.625 28.125H39.9844C40.165 28.1251 40.3402 28.0626 40.4799 27.9481C40.6197 27.8336 40.7155 27.6742 40.751 27.4971L43.5634 13.4346C43.5861 13.3212 43.5834 13.2042 43.5554 13.092C43.5273 12.9798 43.4748 12.8752 43.4014 12.7858C43.3281 12.6964 43.2358 12.6244 43.1313 12.5749C43.0267 12.5255 42.9125 12.4999 42.7968 12.5H12.5"
                        stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <a href="{{ route('account') }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                    fill="#ffffff">
                    <path
                        d="M226-262q59-42.33 121.33-65.5 62.34-23.17 132.67-23.17 70.33 0 133 23.17T734.67-262q41-49.67 59.83-103.67T813.33-480q0-141-96.16-237.17Q621-813.33 480-813.33t-237.17 96.16Q146.67-621 146.67-480q0 60.33 19.16 114.33Q185-311.67 226-262Zm253.88-184.67q-58.21 0-98.05-39.95Q342-526.58 342-584.79t39.96-98.04q39.95-39.84 98.16-39.84 58.21 0 98.05 39.96Q618-642.75 618-584.54t-39.96 98.04q-39.95 39.83-98.16 39.83ZM480.31-80q-82.64 0-155.64-31.5-73-31.5-127.34-85.83Q143-251.67 111.5-324.51T80-480.18q0-82.82 31.5-155.49 31.5-72.66 85.83-127Q251.67-817 324.51-848.5T480.18-880q82.82 0 155.49 31.5 72.66 31.5 127 85.83Q817-708.33 848.5-635.65 880-562.96 880-480.31q0 82.64-31.5 155.64-31.5 73-85.83 127.34Q708.33-143 635.65-111.5 562.96-80 480.31-80Zm-.31-66.67q54.33 0 105-15.83t97.67-52.17q-47-33.66-98-51.5Q533.67-284 480-284t-104.67 17.83q-51 17.84-98 51.5 47 36.34 97.67 52.17 50.67 15.83 105 15.83Zm0-366.66q31.33 0 51.33-20t20-51.34q0-31.33-20-51.33T480-656q-31.33 0-51.33 20t-20 51.33q0 31.34 20 51.34 20 20 51.33 20Zm0-71.34Zm0 369.34Z" />
                </svg>
            </a>
        </div>
    </div>
</header>

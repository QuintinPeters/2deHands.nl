@vite('resources/css/app.css')

<body class="font-poppins text-darkgray flex flex-col items-center justify-center w-screen mt-2">
    <div class="my-2">
        <h1 class="text-xl font-semibold">Bedankt voor je aankoop bij {{$data['seller_name']}}</h1>
        <p class="">Beste <span class=" capitalize">{{$data['buyer_name']}}</span>,</p>
    </div>
    <div class="w-1/3 flex flex-col self-start">
        <p class="w-max self-center">We hopen dat je tevreden bent met je aankoop van <span class="text-blue font-medium">
                {{$data['product_name']}}</span>.</p>
        <p class="w-max self-start">We zouden het zeer op prijs stellen als je een review zou willen achterlaten over je ervaring met<span
                class="text-blue font-medium capitalize">
                {{$data['seller_name']}}</span>.
        </p>
    </div>
    <div class="my-3 flex flex-col">
        <p class="mb-4">klik hieronder op een review achter te laten</p>
        <a class="bg-blue text-white rounded-lg py-2 px-4 text-center w-fit self-center" href="{{ $data['review_link'] }}">review</a>
    </div>
    <p>Met vriendelijke groet,</p>
    <p>Team 2deHands.nl </p>
</body>


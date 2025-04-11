<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comparador de Tarjetas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Comparador de Tarjetas de Crédito</h1>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-gray-100 text-gray-600 uppercase">
            <tr>
                <th class="px-6 py-3">Tarjeta</th>
                <th class="px-6 py-3">Emisor</th>
                <th class="px-6 py-3">Tasa de Interés</th>
                <th class="px-6 py-3">Cuota Anual</th>
                <th class="px-6 py-3">Acción</th>
            </tr>
            </thead>
            <tbody class="text-gray-700">
            @foreach($cards as $card)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-6 py-4 font-semibold">{{ $card->name()->value() }}</td>
                    <td class="px-6 py-4">{{ $card->issuer()->value() }}</td>
                    <td class="px-6 py-4">{{ number_format($card->interestRate()->value(), 2) }} %</td>
                    <td class="px-6 py-4">${{ number_format($card->annualFee()->value(), 2) }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('cards.clickout', $card->id()->value()) }}"
                           target="_blank"
                           class="bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700 text-sm">
                            Ver más
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

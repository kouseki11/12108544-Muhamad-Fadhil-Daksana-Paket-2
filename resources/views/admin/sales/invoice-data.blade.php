<x-guest-layout>

    <div class="max-w-lg mx-auto py-20">
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between mb-4">
                <div>
                    <a href="{{ route('sale.index') }}" class="btn-back bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kembali</a>
                </div>
                <div>
                    <a href="{{ route('sale.export', $sales['id']) }}" class="btn-print bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md inline-block">Cetak (.pdf)</a>
                </div>
            </div>

            <div class="text-center">
                <h2 class="text-2xl font-bold">Indo Agus</h2>
            </div>

            <div class="mt-4">
                <div class="info">
                    <p class="mb-2">Nama Pelanggan : {{ $sales['customer']['name'] }}</p>
                    <p class="mb-2">Alamat Pelanggan : {{ $sales['customer']['address'] }}</p>
                    <p class="mb-2">No HP Pelanggan : {{ $sales['customer']['phone_number'] }}</p>
                </div>
            </div>

            <div class="mt-4">
                <div id="table">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                                <th class="py-2 px-3 text-left">Nama Produk</th>
                                <th class="py-2 px-3 text-left">Qty</th>
                                <th class="py-2 px-3 text-left">Harga</th>
                                <th class="py-2 px-3 text-left">Sub Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales['saleDetail'] as $item)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-2 px-3">{{ $item['product']['name'] }}</td>
                                <td class="py-2 px-3">{{ $item['quantity'] }}</td>
                                <td class="py-2 px-3">Rp. {{ number_format($item['product']['price'], '0', ',', '.') }}</td>
                                <td class="py-2 px-3">Rp. {{ number_format($item['subtotal'], '0', ',', '.') }}</td>
                            </tr>
                            @endforeach
                            <tr class="bg-gray-200">
                                <td class="py-2 px-3"></td>
                                <td class="py-2 px-3"></td>
                                <td class="py-2 px-3 font-bold">Total Harga</td>
                                <td class="py-2 px-3 font-bold">Rp. {{ number_format($sales['price_total'], '0', ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 text-center">
                    <p class="text-sm">{{ $sales['created_at'] }} | {{ $sales['user']['name'] }}</p>
                    <p class="legal text-gray-600"><strong>Terima kasih atas pembelian Anda!</strong></p>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>

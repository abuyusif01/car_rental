<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-4">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="mt-4 sm:px-6 lg:px-6">
                        <form method="POST" action="{{ route('booking') }}">
                            @csrf
                            <div>
                                <x-jet-label for="name" value="{{ __('Name') }}" />
                                @if (isset($custName))
                                <x-jet-input id="custName" class="block mt-1 w-full" type="text" name="custName" :value="old('custName')" required autofocus autocomplete="custName" value="{{ $custName ?? '' }}" readonly />
                                @else
                                <x-jet-input id="custName" class="block mt-1 w-full" type="text" name="custName" :value="old('custName')" required autofocus autocomplete="custName" value="{{ $custName ?? '' }}" />
                                @endif
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="plateNumber" value="{{ __('Plate Number') }}" />
                                @if(isset($plateNumber))
                                <x-jet-input id="plateNumber" class="block mt-1 w-full" type="text" name="plateNumber" :value="old('plateNumber')" required autofocus autocomplete="plateNumber" value="{{ $plateNumber ?? '' }}" readonly />
                                @else
                                <x-jet-input id="plateNumber" class="block mt-1 w-full" type="text" name="plateNumber" :value="old('plateNumber')" required autofocus autocomplete="plateNumber" value="{{ $plateNumber ?? '' }}" />
                                @endif
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="price" value="{{ __('Price') }}" />
                                @if(isset($price))
                                <x-jet-input id="price" class="block mt-1 w-full" type="text" name="price" required autocomplete="price" value="{{ $price ?? '' }}" readonly />
                                @else
                                <x-jet-input id="price" class="block mt-1 w-full" type="text" name="price" required autocomplete="price" value="{{ $price ?? '' }}" />
                                @endif
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="price" value="{{ __('Payment Method') }}" />
                                <select name="paymentMethod" class="pay" style="border-radius: 8px;" id="paymentMethod" type="text">
                                    <option value="Cash" id="cash">Cash</option>
                                    <option value="Credit Card" id="credit_card">Credit Card</option>
                                    <option value="Debit Card" id="debit_card">Debit Card</option>
                                    <option value="Paypal" id="paypal">Paypal</option>
                                    <option value="BitCoin" id="bitcoin">BitCoin</option>
                                </select>
                            </div>
                            <script>
                                function clicked() {
                                    custName = document.getElementById('custName').value;
                                    plateNumber = document.getElementById('plateNumber').value;
                                    paymentMethod = document.getElementById('paymentMethod').value;
                                    if (custName != '' || plateNumber != '' || price != '') {
                                        alert(`Customer Name: ${custName} \nPlate Number: ${plateNumber}\nPrice: ${price}\nPayment Method: ${paymentMethod}\nYou'll be redirected to Dashboard Soon\nThank You for Using our service :)`);
                                    } else {
                                        alert("Pls supply the required argument or go back to dashboard and try booking again")
                                    }

                                }
                            </script>
                            <br>
                            <input type="file" class="block shadow-5xl mb-10 p-2 w-80 italic placehoder-gray-400" name="image">
                            <x-jet-button class="mt-4" onClick=clicked()>
                                {{ __('Pay Now') }}
                            </x-jet-button>

                            <div class="mt-4"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
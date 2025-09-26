<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Details Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            border-radius: 8px;
        }
        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            border-radius: 8px;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen p-4 sm:p-8">

    <!-- Header Section -->
    <header class="bg-white rounded-xl shadow-md p-4 mb-8">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">TMS | Package Details</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto">
        <!-- Success/Error Message Container -->
        <div class="px-4">
            <!-- Example success message -->
            <div id="message-container" class="hidden"></div>
        </div>

        <form name="book" id="booking-form" method="post" class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 sm:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Image Section -->
                    <div class="flex-1">
                        <img src="./images/5.jpg" class="w-full h-auto rounded-lg shadow-lg" alt="Package Image">
                    </div>

                    <!-- Details Section -->
                    <div class="flex-1 space-y-4">
                        <h2 class="text-3xl font-bold text-gray-800">Amazing City Tour</h2>
                        <p class="text-gray-500 font-medium">#PKG-12345</p>
                        <p class="text-gray-700">
                            <span class="font-semibold">Package Type:</span> Adventure
                        </p>
                        <p class="text-gray-700">
                            <span class="font-semibold">Package Location:</span> Paris, France
                        </p>
                        <p class="text-gray-700">
                            <span class="font-semibold">Features:</span> Guided tours, hotel, transportation, meals
                        </p>
                        
                        <!-- Date Inputs -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <div class="flex-1">
                                <label class="block text-sm font-medium text-gray-700 mb-1">From</label>
                                <input type="date" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" name="fromdate" required>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-medium text-gray-700 mb-1">To</label>
                                <input type="date" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" name="todate" required>
                            </div>
                        </div>

                        <!-- Grand Total -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200 mt-4">
                            <p class="text-lg font-semibold text-gray-700">Grand Total</p>
                            <h3 class="text-2xl font-bold text-green-600">USD $800</h3>
                        </div>
                    </div>
                </div>

                <div class="p-6 sm:p-8 mt-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Package Details</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>

            <!-- Booking Section -->
            <div class="bg-gray-50 p-6 sm:p-8 border-t border-gray-200">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Book Your Travel</h2>
                <div class="flex flex-col gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Comment</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" name="comment" required>
                    </div>

                    <!-- Payment Options -->
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Select Payment Method</h3>
                        <div class="flex flex-col space-y-2">
                            <label class="flex items-center p-3 rounded-lg border border-gray-300 cursor-pointer hover:bg-white transition-colors duration-200">
                                <input type="radio" name="payment_method" value="upi" class="form-radio text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-gray-700 font-medium">UPI Payment</span>
                            </label>
                            <label class="flex items-center p-3 rounded-lg border border-gray-300 cursor-pointer hover:bg-white transition-colors duration-200">
                                <input type="radio" name="payment_method" value="netbanking" class="form-radio text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-gray-700 font-medium">NetBanking</span>
                            </label>
                            <label class="flex items-center p-3 rounded-lg border border-gray-300 cursor-pointer hover:bg-white transition-colors duration-200">
                                <input type="radio" name="payment_method" value="bhim" class="form-radio text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-gray-700 font-medium">BHIM</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- New containers for payment details, hidden by default -->
                    <!-- Dummy QR Code (UPI) -->
                    <div id="upi-details" class="hidden text-center mt-4 p-4 bg-white rounded-lg shadow-inner">
                        <p class="text-lg font-medium text-gray-700 mb-2">Scan to Pay with UPI</p>
                        <img src="./images/upi scanner.jpeg" alt="QR Code" class="mx-auto rounded-md border border-gray-300 p-1">
                        <p class="text-sm text-gray-500 mt-2">Or enter UPI ID manually</p>
                        <div class="flex justify-center items-center mt-2 space-x-2">
                            <span id="upi-id" class="text-gray-700 font-mono text-sm sm:text-base bg-gray-100 p-2 rounded-lg">dummy-id@upi</span>
                            <button type="button" id="copy-upi-btn" class="px-3 py-1 bg-green-500 text-white rounded-lg text-xs font-semibold hover:bg-green-600 transition-colors duration-200">
                                Copy
                            </button>
                        </div>
                    </div>

                    <!-- NetBanking Options -->
                    <div id="netbanking-details" class="hidden mt-4 p-4 bg-white rounded-lg shadow-inner">
                        <p class="text-lg font-medium text-gray-700 mb-2">Select your Bank</p>
                        <select name="bank" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="">Select a Bank</option>
                            <option value="sbi">State Bank of India</option>
                            <option value="icici">ICICI Bank</option>
                            <option value="hdfc">HDFC Bank</option>
                            <option value="axis">Axis Bank</option>
                            <option value="kotak">Kotak Mahindra Bank</option>
                        </select>
                    </div>

                    <!-- BHIM Details (VPA) -->
                    <div id="bhim-details" class="hidden mt-4 p-4 bg-white rounded-lg shadow-inner">
                        <p class="text-lg font-medium text-gray-700 mb-2">Enter your Virtual Payment Address (VPA)</p>
                        <input type="text" name="vpa" placeholder="e.g., yourname@bhim" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    
                    <div class="text-center mt-4">
                        <button type="submit" id="book-button" class="w-full sm:w-auto px-6 py-3 bg-green-600 text-white font-bold text-lg rounded-lg shadow-lg hover:bg-green-700 transition-colors duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50">
                            Book Now
                        </button>
                    </div>
                    
                    <!-- Print Receipt Button - Hidden by default -->
                    <div id="print-receipt-container" class="hidden text-center mt-4">
                        <button type="button" id="print-button" class="w-full sm:w-auto px-6 py-3 bg-blue-600 text-white font-bold text-lg rounded-lg shadow-lg hover:bg-blue-700 transition-colors duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50">
                            Print Receipt
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('booking-form');
            const paymentOptions = document.querySelectorAll('input[name="payment_method"]');
            const upiDetails = document.getElementById('upi-details');
            const netbankingDetails = document.getElementById('netbanking-details');
            const bhimDetails = document.getElementById('bhim-details');
            const printButton = document.getElementById('print-button');
            const printReceiptContainer = document.getElementById('print-receipt-container');
            const messageContainer = document.getElementById('message-container');
            const copyUpiButton = document.getElementById('copy-upi-btn');
            const upiIdElement = document.getElementById('upi-id');

            // Function to hide all payment detail containers
            const hideAllDetails = () => {
                upiDetails.classList.add('hidden');
                netbankingDetails.classList.add('hidden');
                bhimDetails.classList.add('hidden');
            };

            // Event listener for payment method changes
            paymentOptions.forEach(radio => {
                radio.addEventListener('change', () => {
                    hideAllDetails();
                    if (radio.value === 'upi') {
                        upiDetails.classList.remove('hidden');
                    } else if (radio.value === 'netbanking') {
                        netbankingDetails.classList.remove('hidden');
                    } else if (radio.value === 'bhim') {
                        bhimDetails.classList.remove('hidden');
                    }
                });
            });
            
            // Event listener for copying UPI ID
            copyUpiButton.addEventListener('click', () => {
                const upiId = upiIdElement.textContent;
                const tempInput = document.createElement('input');
                tempInput.value = upiId;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                
                // Provide visual feedback for copying
                const originalText = copyUpiButton.textContent;
                copyUpiButton.textContent = 'Copied!';
                setTimeout(() => {
                    copyUpiButton.textContent = originalText;
                }, 1500);
            });

            form.addEventListener('submit', (e) => {
                e.preventDefault();
                
                const selectedPayment = document.querySelector('input[name="payment_method"]:checked');
                
                if (!selectedPayment) {
                    messageContainer.className = 'errorWrap';
                    messageContainer.innerHTML = '<strong>ERROR</strong>: Please select a payment method.';
                    messageContainer.classList.remove('hidden');
                    return;
                }
                
                // Simulate a successful payment
                messageContainer.className = 'succWrap';
                messageContainer.innerHTML = '<strong>SUCCESS</strong>: Payment successful! Your booking is confirmed.';
                messageContainer.classList.remove('hidden');

                // Show the print receipt button
                printReceiptContainer.classList.remove('hidden');
            });

            printButton.addEventListener('click', () => {
                // This is a simple print function for demonstration
                window.print();
            });
        });
    </script>
</body>
</html>

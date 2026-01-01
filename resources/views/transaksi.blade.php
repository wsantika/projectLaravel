<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <x-app-layout>
        @include('layouts.sidebar')
        <main class="flex-1 md:ml-64 bg-gray-100">
            @include ('layouts.navigation')

            <!-- card add income -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-4">
                <!-- card kiri -->
                <div class="bg-white border rounded-lg px-8 py-6 h-full w-full mx-auto">
                    <h2 class="text-2xl font-medium mb-4">Add Income</h2>
                    <form>
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-50 px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Date
                                    </label>
                                    <input type="date" name="date" id="date"
                                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" />
                                </div>
                            </div>
                            <div class="w-50 px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="category" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Category
                                    </label>
                                    <select id="category" name="category"
                                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                                        required>
                                        <option value="">Select category</option>
                                        <option value="income">Income</option>
                                        <option value="expense">Expense</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" name="message"
                                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                                rows="5"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="amount" class="block text-gray-700 font-medium mb-2">Amount (Rp)</label>
                            <input type="text" id="amount" name="amount" placeholder="Rp1.000.000"
                                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                                required>
                        </div>
                        <div>
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- card kanan -->
                <div class="lg:col-span-2 grid grid-cols-1 gap-6">
                    <div class="bg-white rounded-xl p-6 shadow">
                        <h3>Total income</h3>
                        <p class="text-2xl font-semibold mt-2">Rp. 0</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow">
                        <h3 class="mb-4">Income by category</h3>
                        <!-- chart -->
                    </div>
                </div>
            </section>
            <section>
                <div class="mt-4 col-span-12 rounded-2xl border border-gray-200 bg-white pt-4"
                    x-data="transactionsTable()">

                    <!-- Header -->
                    <div class="flex items-center justify-between px-6 mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">
                            Latest Transactions
                        </h3>

                        <input type="text" x-model="searchQuery" placeholder="Search..."
                            class="h-[42px] rounded-lg border px-4 text-sm" />
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto px-6">
                        <table class="min-w-full">
                            <thead>
                                <tr class="border-y">
                                    <th class="py-3 text-left">Name</th>
                                    <th class="py-3 text-left">Date</th>
                                    <th class="py-3 text-left">Price</th>
                                    <th class="py-3 text-left">Category</th>
                                    <th class="py-3 text-left">Status</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y">
                                <template x-for="(item, index) in paginatedData" :key="index">
                                    <tr>
                                        <td class="py-4">
                                            <div class="flex items-center gap-3">
                                                <span x-text="item.name"></span>
                                            </div>
                                        </td>

                                        <td x-text="item.date"></td>
                                        <td x-text="item.price"></td>
                                        <td x-text="item.category"></td>

                                        <td>
                                            <span x-text="item.status" class="px-2 py-1 rounded-full text-xs" :class="{
                                        'bg-green-100 text-green-600': item.status === 'Success',
                                        'bg-yellow-100 text-yellow-600': item.status === 'Pending',
                                        'bg-red-100 text-red-600': item.status === 'Failed'
                                    }"></span>
                                        </td>

                                        <!-- ACTION DROPDOWN -->
                                        <td class="py-4 text-right">
                                            <div class="relative inline-block" x-data="{ open: false }"
                                                @click.away="open = false">

                                                <!-- Button -->
                                                <button @click="open = !open"
                                                    class="p-2 rounded-full hover:bg-gray-100">
                                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                                        <path
                                                            d="M6 12a2 2 0 110-4 2 2 0 010 4zm6 0a2 2 0 110-4 2 2 0 010 4zm6 0a2 2 0 110-4 2 2 0 010 4z" />
                                                    </svg>
                                                </button>

                                                <!-- Dropdown -->
                                                <div x-show="open" x-transition x-cloak
                                                    class="absolute right-0 mt-2 w-40 rounded-xl border bg-white shadow-lg z-[9999]">

                                                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">
                                                        Edit
                                                    </a>

                                                    <a href="#"
                                                        class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-between px-6 py-4 border-t">
                        <button @click="prevPage" :disabled="currentPage === 1">
                            Previous
                        </button>

                        <span x-text="`Page ${currentPage} of ${totalPages}`"></span>

                        <button @click="nextPage" :disabled="currentPage === totalPages">
                            Next
                        </button>
                    </div>
                </div>
            </section>
        </main>

    </x-app-layout>

    <script>
        function transactionsTable() {
            return {
                tableData: [
                    {
                        name: "Bought PYPL",
                        date: "Nov 23, 01:00 PM",
                        price: "$2,567.88",
                        category: "Finance",
                        status: "Success",
                    },
                    {
                        name: "Bought AAPL",
                        date: "Nov 22, 09:00 PM",
                        price: "$3,987.45",
                        category: "Technology",
                        status: "Pending",
                    },
                    {
                        name: "Sell AMZN",
                        date: "Feb 35, 08:00 PM",
                        price: "$5,698.55",
                        category: "E-commerce",
                        status: "Failed",
                    },
                ],

                itemsPerPage: 5,
                currentPage: 1,
                searchQuery: "",

                get filteredData() {
                    if (!this.searchQuery) return this.tableData;
                    return this.tableData.filter(item =>
                        item.name.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                        item.category.toLowerCase().includes(this.searchQuery.toLowerCase())
                    );
                },

                get totalPages() {
                    return Math.ceil(this.filteredData.length / this.itemsPerPage);
                },

                get paginatedData() {
                    const start = (this.currentPage - 1) * this.itemsPerPage;
                    return this.filteredData.slice(start, start + this.itemsPerPage);
                },

                prevPage() {
                    if (this.currentPage > 1) this.currentPage--;
                },

                nextPage() {
                    if (this.currentPage < this.totalPages) this.currentPage++;
                },

                init() {
                    this.$watch("searchQuery", () => {
                        this.currentPage = 1;
                    });
                },
            };
        }

        /*DROPDOWN ACTION COMPONENT */
        function actionDropdown() {
            return {
                isOpen: false,
                popperInstance: null,

                init() {
                    this.$nextTick(() => {
                        this.popperInstance = createPopper(
                            this.$refs.button,
                            this.$refs.content,
                            {
                                placement: 'bottom-end',
                                strategy: 'fixed',
                                modifiers: [
                                    {
                                        name: 'offset',
                                        options: { offset: [0, 4] },
                                    },
                                ],
                            }
                        );
                    });
                },

                toggle() {
                    this.isOpen = !this.isOpen;
                    this.popperInstance && this.popperInstance.update();
                },
            };
        }
    </script>
</body>

</html>
<!-- Modal -->
<div id="adModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6">
        <h2 class="text-lg font-semibold mb-4">Choose Advertisement Option</h2>
        <div class="space-y-4">
            <button class="w-full bg-blue-600 text-white hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-3 focus:outline-none"
                    data-drawer-target="drawer-create-product-default"
                    data-drawer-show="drawer-create-product-default"
                    aria-controls="drawer-create-product-default"
                    data-drawer-placement="right"
                    onclick="closeModal()">
                Use Personal Ads
            </button>
            <button class="w-full bg-orange-400 text-white hover:bg-orange-700 font-medium rounded-lg text-sm px-5 py-3 focus:outline-none"
                    data-drawer-target="drawer-create-product-default-2"
                    data-drawer-show="drawer-create-product-default-2"
                    aria-controls="drawer-create-product-default-2"
                    data-drawer-placement="right"
                    onclick="closeModal()">
                Order Custom Ads from Rentjerlaa
            </button>
        </div>
        <div class="mt-6 text-right">
            <button id="closeModalButton" class="text-gray-600 hover:text-gray-800 font-medium">Cancel</button>
        </div>
    </div>
</div>

<script>
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('adModal');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    window.addEventListener('click', (e) => {
        if (e.target == modal) {
            modal.classList.add('hidden');
        }
    });

    function closeModal() {
        modal.classList.add('hidden');
    }
</script>

<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full items-center justify-center">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-gradient-to-r from-sky-500 to-indigo-500 rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                  <div class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200">
                      <x-ei-check @class(['text-white'])/>
                  </div>
                <h3 class="mb-5 text-lg font-normal text-white">{{ __('Are you sure you want to book this tickets ?') }}</h3>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-gradient-to-r from-green-600 to-green-700 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2 hover:bg-gradient-to-r hover:from-green-700 hover:to-green-800" {{ $attributes }}>{{ __('Confirm') }}</button>
                <button data-modal-hide="popup-modal" type="button" class="rounded-lg text-sm font-medium px-5 py-2.5 text-white bg-gradient-to-r from-red-600 to-red-700 hover:bg-gradient-to-r hover:from-red-700 hover:to-red-800">{{ __('Cancel') }}</button>
            </div>
        </div>
    </div>
</div>
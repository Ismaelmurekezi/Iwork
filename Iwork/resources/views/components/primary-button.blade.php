<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center w-buttonWidth h-primaryHeight  justify-center px-4 py-2 bg-lightBlue border border-transparent rounded-md font-semibold  text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

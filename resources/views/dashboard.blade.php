<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">

            <!-- Info -->
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Admin Menu -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

                <!-- Contact Inbox -->
                <a href="{{ route('admin.contacts.index') }}"
                    class="block p-6 transition bg-white rounded-lg shadow-sm hover:bg-gray-50">

                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                📥 Contact Inbox
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Lihat pesan masuk dari form contact
                            </p>
                        </div>

                        <div class="text-2xl text-indigo-600">
                            →
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>

<div>
    <!-- Header -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-900">Education Management</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">
                        Dashboard
                    </a>
                    <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">
                        View Portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('message') }}
            </div>
            @endif

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Form -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">
                        {{ $editingId ? 'Edit Education' : 'Add New Education' }}
                    </h2>
                    
                    <form wire:submit.prevent="save" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="level" class="block text-sm font-medium text-gray-700 mb-2">Level</label>
                                <input type="text" id="level" wire:model="level" placeholder="e.g., O/L, A/L, Degree" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('level') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="year" class="block text-sm font-medium text-gray-700 mb-2">Year</label>
                                <input type="number" id="year" wire:model="year" placeholder="e.g., 2012" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('year') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="institution" class="block text-sm font-medium text-gray-700 mb-2">Institution</label>
                            <input type="text" id="institution" wire:model="institution" placeholder="e.g., Vidyartha College" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('institution') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="subjects" class="block text-sm font-medium text-gray-700 mb-2">Subjects</label>
                            <textarea id="subjects" wire:model="subjects" rows="3" placeholder="e.g., Science, Mathematics, Commerce, Health, Sinhala, Buddhism, English, History, Art" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                            @error('subjects') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="results" class="block text-sm font-medium text-gray-700 mb-2">Results (Optional)</label>
                            <textarea id="results" wire:model="results" rows="2" placeholder="e.g., A – 5, B – 2, C – 1, F – 3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                            @error('results') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="flex space-x-3">
                            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                                {{ $editingId ? 'Update' : 'Add' }}
                            </button>
                            @if($editingId)
                            <button type="button" wire:click="cancel" class="bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-gray-600 transition duration-300">
                                Cancel
                            </button>
                            @endif
                        </div>
                    </form>
                </div>

                <!-- List -->
                <div class="bg-white rounded-lg shadow">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">Education List</h3>
                    </div>
                    <div class="divide-y divide-gray-200">
                        @forelse($educations as $education)
                        <div class="p-6">
                            <div class="flex justify-between items-start">
                                <div class="flex-1">
                                    <h4 class="text-lg font-semibold text-blue-600">{{ $education->level }}</h4>
                                    <p class="text-gray-600">{{ $education->institution }}</p>
                                    <p class="text-sm text-gray-500">{{ $education->year }}</p>
                                    <p class="text-sm text-gray-700 mt-2">{{ $education->subjects }}</p>
                                    @if($education->results)
                                    <p class="text-sm text-gray-600 mt-1">{{ $education->results }}</p>
                                    @endif
                                </div>
                                <div class="flex space-x-2 ml-4">
                                    <button wire:click="edit({{ $education->id }})" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        Edit
                                    </button>
                                    <button wire:click="delete({{ $education->id }})" onclick="return confirm('Are you sure you want to delete this education?')" class="text-red-600 hover:text-red-800 text-sm font-medium">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="p-6 text-center text-gray-500">
                            No education records found. Add your first education record above.
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

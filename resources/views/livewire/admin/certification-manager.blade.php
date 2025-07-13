<div>
    <!-- Header -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-900">Certifications Management</h1>
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
                        {{ $editingId ? 'Edit Certification' : 'Add New Certification' }}
                    </h2>
                    
                    <form wire:submit.prevent="save" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Certification Name</label>
                                <input type="text" id="name" wire:model="name" placeholder="e.g., Computer Hardware Technician" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="year" class="block text-sm font-medium text-gray-700 mb-2">Year</label>
                                <input type="text" id="year" wire:model="year" placeholder="e.g., 2023, NVQ-4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('year') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="issuer" class="block text-sm font-medium text-gray-700 mb-2">Issuer</label>
                            <input type="text" id="issuer" wire:model="issuer" placeholder="e.g., VTA, CISCO, SLASSCOM" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('issuer') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select id="status" wire:model="status" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="completed">Completed</option>
                                <option value="in_progress">In Progress</option>
                            </select>
                            @error('status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description (Optional)</label>
                            <textarea id="description" wire:model="description" rows="3" placeholder="Brief description of the certification..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
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
                        <h3 class="text-lg font-semibold text-gray-900">Certifications List</h3>
                    </div>
                    <div class="divide-y divide-gray-200">
                        @forelse($certifications as $certification)
                        <div class="p-6">
                            <div class="flex justify-between items-start">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs font-medium">{{ $certification->issuer }}</span>
                                        <span class="text-xs px-2 py-1 rounded {{ $certification->status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ ucfirst($certification->status) }}
                                        </span>
                                    </div>
                                    <h4 class="text-lg font-semibold text-gray-900">{{ $certification->name }}</h4>
                                    <p class="text-sm text-gray-500">{{ $certification->year }}</p>
                                    @if($certification->description)
                                    <p class="text-sm text-gray-600 mt-1">{{ $certification->description }}</p>
                                    @endif
                                </div>
                                <div class="flex space-x-2 ml-4">
                                    <button wire:click="edit({{ $certification->id }})" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        Edit
                                    </button>
                                    <button wire:click="delete({{ $certification->id }})" onclick="return confirm('Are you sure you want to delete this certification?')" class="text-red-600 hover:text-red-800 text-sm font-medium">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="p-6 text-center text-gray-500">
                            No certifications found. Add your first certification above.
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

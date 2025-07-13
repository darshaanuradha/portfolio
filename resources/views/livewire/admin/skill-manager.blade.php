<div>
    <!-- Header -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-900">Skills Management</h1>
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
                        {{ $editingId ? 'Edit Skill' : 'Add New Skill' }}
                    </h2>
                    
                    <form wire:submit.prevent="save" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                                <select id="category" wire:model="category" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select Category</option>
                                    <option value="Front-end Technology">Front-end Technology</option>
                                    <option value="Development Languages">Development Languages</option>
                                    <option value="Database">Database</option>
                                    <option value="Others">Others</option>
                                </select>
                                @error('category') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Skill Name</label>
                                <input type="text" id="name" wire:model="name" placeholder="e.g., Laravel, JavaScript" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description (Optional)</label>
                            <textarea id="description" wire:model="description" rows="3" placeholder="Brief description of the skill..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
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
                        <h3 class="text-lg font-semibold text-gray-900">Skills List</h3>
                    </div>
                    <div class="divide-y divide-gray-200">
                        @forelse($skills as $skill)
                        <div class="p-6">
                            <div class="flex justify-between items-start">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs font-medium">{{ $skill->category }}</span>
                                    </div>
                                    <h4 class="text-lg font-semibold text-gray-900">{{ $skill->name }}</h4>
                                    @if($skill->description)
                                    <p class="text-sm text-gray-600 mt-1">{{ $skill->description }}</p>
                                    @endif
                                </div>
                                <div class="flex space-x-2 ml-4">
                                    <button wire:click="edit({{ $skill->id }})" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        Edit
                                    </button>
                                    <button wire:click="delete({{ $skill->id }})" onclick="return confirm('Are you sure you want to delete this skill?')" class="text-red-600 hover:text-red-800 text-sm font-medium">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="p-6 text-center text-gray-500">
                            No skills found. Add your first skill above.
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

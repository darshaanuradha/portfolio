<div>
    <!-- Header -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-900">Projects Management</h1>
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
                        {{ $editingId ? 'Edit Project' : 'Add New Project' }}
                    </h2>
                    
                    <form wire:submit.prevent="save" class="space-y-6">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Project Title</label>
                            <input type="text" id="title" wire:model="title" placeholder="e.g., National Pest Surveillance System" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea id="description" wire:model="description" rows="4" placeholder="Describe the project, its purpose, and key features..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Role (Optional)</label>
                                <input type="text" id="role" wire:model="role" placeholder="e.g., Lead Developer" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('role') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="period" class="block text-sm font-medium text-gray-700 mb-2">Period (Optional)</label>
                                <input type="text" id="period" wire:model="period" placeholder="e.g., 2024-2025" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('period') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="technologies" class="block text-sm font-medium text-gray-700 mb-2">Technologies</label>
                            <input type="text" id="technologies" wire:model="technologies" placeholder="e.g., Laravel, Livewire, PHP, JavaScript, Tailwind CSS" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('technologies') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="achievements" class="block text-sm font-medium text-gray-700 mb-2">Key Achievements (Optional)</label>
                            <textarea id="achievements" wire:model="achievements" rows="3" placeholder="List key achievements, outcomes, or impact..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                            @error('achievements') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image URL (Optional)</label>
                                <input type="url" id="image" wire:model="image" placeholder="https://example.com/image.jpg" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="github_url" class="block text-sm font-medium text-gray-700 mb-2">GitHub URL (Optional)</label>
                                <input type="url" id="github_url" wire:model="github_url" placeholder="https://github.com/username/project" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('github_url') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="live_url" class="block text-sm font-medium text-gray-700 mb-2">Live Demo URL (Optional)</label>
                            <input type="url" id="live_url" wire:model="live_url" placeholder="https://project-demo.com" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('live_url') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="is_featured" wire:model="is_featured" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="is_featured" class="ml-2 block text-sm text-gray-900">
                                Featured Project (will appear on homepage)
                            </label>
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
                        <h3 class="text-lg font-semibold text-gray-900">Projects List</h3>
                    </div>
                    <div class="divide-y divide-gray-200">
                        @forelse($projects as $project)
                        <div class="p-6">
                            <div class="flex justify-between items-start">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        @if($project->is_featured)
                                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs font-medium">Featured</span>
                                        @endif
                                    </div>
                                    <h4 class="text-lg font-semibold text-gray-900">{{ $project->title }}</h4>
                                    @if($project->role)
                                    <p class="text-sm text-gray-600">{{ $project->role }}</p>
                                    @endif
                                    @if($project->period)
                                    <p class="text-sm text-gray-500">{{ $project->period }}</p>
                                    @endif
                                    <p class="text-sm text-gray-700 mt-2">{{ Str::limit($project->description, 100) }}</p>
                                    <div class="flex flex-wrap gap-1 mt-2">
                                        @foreach(explode(',', $project->technologies) as $tech)
                                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">{{ trim($tech) }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="flex space-x-2 ml-4">
                                    <button wire:click="edit({{ $project->id }})" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        Edit
                                    </button>
                                    <button wire:click="delete({{ $project->id }})" onclick="return confirm('Are you sure you want to delete this project?')" class="text-red-600 hover:text-red-800 text-sm font-medium">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="p-6 text-center text-gray-500">
                            No projects found. Add your first project above.
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

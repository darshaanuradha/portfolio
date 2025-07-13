<div>
    <!-- Enhanced Hero Section -->
    <div class="modern-bg text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/90 via-purple-600/90 to-pink-600/90"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center fade-in-up">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 hero-title">Get In Touch</h1>
                <p class="text-xl md:text-2xl max-w-4xl mx-auto leading-relaxed opacity-90">
                    Ready to start a project or have a question? Let's connect and bring your ideas to life!
                </p>
            </div>
        </div>
    </div>

    <div class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Enhanced Contact Information -->
                <div class="slide-in-left">
                    <h2 class="text-4xl font-bold section-title mb-8">
                        <span class="gradient-text">Contact Information</span>
                    </h2>
                    
                    @if($personalInfo)
                    <div class="space-y-8 mb-12">
                        <div class="modern-card p-6">
                            <div class="flex items-center space-x-4">
                                <div class="icon-container">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-1">Email</h3>
                                    <p class="text-gray-600 text-lg">{{ $personalInfo->email }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="modern-card p-6">
                            <div class="flex items-center space-x-4">
                                <div class="icon-container">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-1">Phone</h3>
                                    <p class="text-gray-600 text-lg">{{ $personalInfo->phone }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="modern-card p-6">
                            <div class="flex items-center space-x-4">
                                <div class="icon-container">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-1">Location</h3>
                                    <p class="text-gray-600 text-lg">{{ $personalInfo->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="modern-card p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Let's Connect</h3>
                        <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                            I'm always interested in new opportunities and exciting projects. 
                            Whether you have a question or just want to say hi, feel free to reach out!
                        </p>
                        <div class="flex space-x-6">
                            <a href="https://github.com" target="_blank" class="text-gray-600 hover:text-gray-900 transition-all duration-300 hover:scale-110 transform">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="https://linkedin.com" target="_blank" class="text-gray-600 hover:text-gray-900 transition-all duration-300 hover:scale-110 transform">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Contact Form -->
                <div class="slide-in-right">
                    <h2 class="text-4xl font-bold section-title mb-8">
                        <span class="gradient-text">Send a Message</span>
                    </h2>
                    
                    @if (session()->has('message'))
                    <div class="modern-card p-6 mb-8 bg-green-50 border border-green-200">
                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-green-800 font-medium">{{ session('message') }}</p>
                        </div>
                    </div>
                    @endif

                    @if (session()->has('error'))
                    <div class="modern-card p-6 mb-8 bg-red-50 border border-red-200">
                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-red-800 font-medium">{{ session('error') }}</p>
                        </div>
                    </div>
                    @endif

                    <div class="modern-card p-8">
                        <form wire:submit.prevent="submitForm" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-3">Name</label>
                                <input type="text" id="name" wire:model="name" class="modern-input w-full" placeholder="Your full name">
                                @error('name') 
                                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-3">Email</label>
                                <input type="email" id="email" wire:model="email" class="modern-input w-full" placeholder="your.email@example.com">
                                @error('email') 
                                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-semibold text-gray-700 mb-3">Subject</label>
                                <input type="text" id="subject" wire:model="subject" class="modern-input w-full" placeholder="What's this about?">
                                @error('subject') 
                                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-3">Message</label>
                                <textarea id="message" wire:model="message" rows="6" class="modern-input w-full resize-none" placeholder="Tell me about your project or question..."></textarea>
                                @error('message') 
                                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span> 
                                @enderror
                            </div>

                            <button type="submit" class="modern-btn w-full py-4 px-8 rounded-2xl text-white font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                <span>Send Message</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

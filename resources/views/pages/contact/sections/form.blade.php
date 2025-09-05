<section class="relative bg-white py-24 font-[var(--font-sans)] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Formulaire de contact en pleine largeur -->
        <div>
                    <h2 class="text-3xl font-bold text-[var(--color-secondary)] mb-6">Envoyez-nous un message</h2>
                    @if(session('success'))
                        <div class="mb-6 p-4 border border-green-200 bg-green-50 text-green-800">{{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="mb-6 p-4 border border-red-200 bg-red-50 text-red-800">Veuillez corriger les erreurs ci-dessous.</div>
                    @endif
                    <form action="{{ route('contact.submit') }}" method="POST" class="gd-form">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="gd-field">
                                <label for="fullname" class="gd-label">Votre nom</label>
                                <input type="text" id="fullname" name="fullname" required value="{{ old('fullname') }}" class="gd-input" />
                                @error('fullname')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="gd-field">
                                <label for="phone" class="gd-label">Téléphone</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="gd-input" />
                                @error('phone')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="gd-field mt-10">
                            <label for="email" class="gd-label">Email</label>
                            <input type="email" id="email" name="email" required value="{{ old('email') }}" class="gd-input" />
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="gd-field mt-10">
                            <label for="message" class="gd-label">Description du cas</label>
                            <textarea id="message" name="message" rows="6" required class="gd-textarea">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <x-base.button type="submit" variant="primary" class="mt-10">
                            Envoyer le message
                        </x-base.button>
                    </form>
        </div>
    </div>
</section> 
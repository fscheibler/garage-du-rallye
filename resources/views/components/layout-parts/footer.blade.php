<footer class="bg-secondary text-white py-10 border-t border-primary">
    
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8 text-sm">
        <div>
            <h3 class="text-lg font-semibold mb-2">Garage du Rallye</h3>
            <p>Rue du Garage 42<br>1000 Lausanne</p>
            <p class="mt-2">Tél : 021 123 45 67</p>
            <p>Email : info@garage.ch</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold mb-2">Navigation</h3>
            <ul class="space-y-1">
                <li><a href="{{ route('home') }}" class="hover:underline">Accueil</a></li>
                <li><a href="{{ route('sales') }}" class="hover:underline">Vente</a></li>
                <li><a href="{{ route('services') }}" class="hover:underline">Services</a></li>
                <li><a href="{{ route('blog') }}" class="hover:underline">Actualités</a></li>
                <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-lg font-semibold mb-2">Horaires</h3>
            <p>Lun–Ven : 08:00–18:00<br>Samedi : 09:00–13:00<br>Dimanche : fermé</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 mt-8 text-center text-xs text-gray-400">
        &copy; {{ now()->year }} Garage du Rallye. Tous droits réservés.
    </div>
</footer>

@if($errors->any())
<div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg text-sm mb-4">
    <ul class="list-disc list-inside space-y-1">
        @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
    </ul>
</div>
@endif

<!-- Nom -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-500">*</span></label>
    <input type="text" name="name" value="{{ old('name', $partner->name ?? '') }}"
           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent"
           placeholder="Ex: Google, Microsoft..." required>
</div>

<!-- Logo -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Logo</label>
    @if(isset($partner) && $partner->logo)
    <div class="mb-2 flex items-center gap-3">
        <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}"
             class="h-12 w-24 object-contain border border-gray-200 rounded bg-gray-50 p-1">
        <span class="text-xs text-gray-400">Logo actuel — uploader un nouveau pour remplacer</span>
    </div>
    @endif
    <input type="file" name="logo" accept="image/*"
           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B7BF8]">
    <p class="text-xs text-gray-400 mt-1">PNG, JPG, SVG — max 2Mo. Privilégier fond transparent (PNG/SVG).</p>
</div>

<!-- Lien -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Lien (URL)</label>
    <input type="url" name="link" value="{{ old('link', $partner->link ?? '') }}"
           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent"
           placeholder="https://...">
</div>

<!-- Ordre + Statut -->
<div class="flex gap-4">
    <div class="flex-1">
        <label class="block text-sm font-medium text-gray-700 mb-1">Ordre d'affichage</label>
        <input type="number" name="order" value="{{ old('order', $partner->order ?? 0) }}" min="0"
               class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B7BF8]">
    </div>
    <div class="flex items-end pb-2">
        <label class="flex items-center gap-2 cursor-pointer">
            <input type="checkbox" name="is_active" value="1"
                   {{ old('is_active', $partner->is_active ?? true) ? 'checked' : '' }}
                   class="w-4 h-4 text-[#3B7BF8] rounded border-gray-300 focus:ring-[#3B7BF8]">
            <span class="text-sm font-medium text-gray-700">Actif</span>
        </label>
    </div>
</div>

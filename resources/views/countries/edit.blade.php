<x-layout>
    <h1>Rediģēt valsti</h1>

    <form action="{{ route('countries.update', $country) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nosaukums</label>
        <input type="text" name="name" id="name" value="{{ $country->name }}" required maxlength="100" /><br><br>

        <label for="area_km2">Platība (km²)</label>
        <input type="number" name="area_km2" id="area_km2" step="0.01" value="{{ $country->area_km2 }}" required /><br><br>

        <label for="population">Iedzīvotāju skaits</label>
        <input type="number" name="population" id="population" value="{{ $country->population }}" required /><br><br>

        <button type="submit">Saglabāt</button>
    </form>
</x-layout>
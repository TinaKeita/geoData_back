<x-layout>
    <h1>Izveidot valsti</h1>

    <form action="{{ route('countries.store') }}" method="POST">
        @csrf
        <label for="name">Nosaukums</label>
        <input type="text" name="name" id="name" required maxlength="100" /><br><br>

        <label for="area_km2">Platība (km²)</label>
        <input type="number" name="area_km2" id="area_km2" step="0.01" required /><br><br>

        <label for="population">Iedzīvotāju skaits</label>
        <input type="number" name="population" id="population" required /><br><br>

        <button type="submit">Izveidot</button>
    </form>
</x-layout>
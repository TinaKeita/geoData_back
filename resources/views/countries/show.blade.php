<x-layout>
    <h1>{{ $country->name }}</h1>

    <p>Platība: {{ $country->area_km2 }} km²</p>
    <p>Iedzīvotāju skaits: {{ $country->population }}</p>

    <h2>Pilsētas</h2>
    @if ($country->cities->count())
        <ul>
            @foreach ($country->cities as $city)
                <li>{{ $city->name }}</li>
            @endforeach
        </ul>
    @else
        <p>Šai valstij nav pilsētu.</p>
    @endif

    <a href="{{ route('countries.edit', $country) }}">Rediģēt</a>

    <form action="{{ route('countries.destroy', $country) }}" method="POST" onsubmit="return confirm('Vai tiešām vēlaties dzēst šo valsti?')" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit">Dzēst</button>
    </form>
</x-layout>
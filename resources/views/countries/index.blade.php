<x-layout>
    <h1>Visas valstis</h1>
    <ul>
        @foreach ($countries as $country)
            <li><a href="{{ route('countries.show', $country) }}">{{ $country->name }}</a></li>
        @endforeach
    </ul>
</x-layout>
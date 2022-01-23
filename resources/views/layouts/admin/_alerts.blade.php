@if (Session::has('success'))
    <x-admin.alert type="success" :dismissible="true">
        {{ Session::get('success') }}
    </x-admin.alert>
@endif

@if (Session::has('errors'))
    <x-admin.alert type="danger" :dismissible="true">
        @if ($errors->count() > 1)
            Errors: {{ $errors->count() }}
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @else
            {{ $errors->first() }}
        @endif
    </x-admin.alert>
@endif

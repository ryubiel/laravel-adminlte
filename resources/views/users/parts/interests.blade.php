<div class="card">
    <form action="{{ route('users.updateInterests', $user->id) }}" method="POST" >
        @csrf
        @method('PUT')
    <div class="card-header">
        Interesses
    </div>
    <div class="card-body">
        <div class="mb-3">
            @foreach(['Futebol', 'Formula 1'] as $item)
                <div class="form-check @error('interests') is-invalid @enderror">
                    <input class="form-check-input" type="checkbox" value="{{ $item }}" name="interests[][name]"
                    @checked(in_array($item, $user->interests->pluck('name')->toArray()))>
                    <label class="form-check-label">
                        {{ $item }}
                    </label>

                    @if($loop->last)
                        @error('interests')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @endif
                </div>
            @endforeach
        </div>

        <div class="mb-3">

        </div>

    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
    </form>
</div>


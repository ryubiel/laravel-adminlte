<div class="card">
    <form action="{{ route('users.updateRoles', $user->id) }}" method="POST" >
        @csrf
        @method('PUT')
    <div class="card-header">
        Cargos
    </div>
    <div class="card-body">
        <div class="mb-3">
            @foreach($roles as $role)
                <div class="form-check @error('roles') is-invalid @enderror">
                    <input class="form-check-input" type="checkbox" value="{{ $role->id }}" name="roles[]"
                        @checked(in_array($role->name, $user->roles->pluck('name')->toArray()))>
                    <label class="form-check-label">
                        {{ $role->name }}
                    </label>

                    @if($loop->last)
                        @error('roles')
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


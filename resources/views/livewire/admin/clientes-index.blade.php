<div>
    <div class="card">

        <div class="card-header">
            <input type="text" wire:model.live="search" class="form-control" placeholder="Buscar...">
        </div>
    
        @if ($users)
    
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user['id'] }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td width="10px">
                                    <a 
                                        class="btn btn-primary btn-sm" 
                                        href="{{ route('admin.users.edit', $user['id']) }}"
                                    >Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="card-footer">
                {{-- {{ $users->links() }} --}}
            </div>
    
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>

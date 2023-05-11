<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Koin</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('coin-update', Auth::user()->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="saldo_koin">Jumlah Koin</label>
                <input type="number" name="saldo_koin" id="saldo_koin" value="{{ $datakoin->saldo_koin }}"
                    class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update Koin</button>
        </form>
    </div>
</div>

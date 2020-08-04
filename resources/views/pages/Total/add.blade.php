<form action="{{route('moneys.update',1)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input type="number" class="form-control" id="amount" name="amount">
    </div>
    <button class="btn-cent" type="submit" name="create" value="create">
        Tambah Uang
    </button>
</form>


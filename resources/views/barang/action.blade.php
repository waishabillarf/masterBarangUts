<div class="d-flex">
    <a href="{{ route('barangs.show', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi bi-person-lines-fill me-1"></i> Detail
    </a>
    <a href="{{ route('barangs.edit', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi bi-pencil-square me-1"></i> Edit
    </a>
    <form action="{{ route('barangs.destroy', ['barang' => $barang->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-dark btn-sm me-2">
            <i class="bi bi-trash me-1"></i> Delete
        </button>
    </form>
</div>

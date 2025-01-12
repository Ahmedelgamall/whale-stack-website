<td>
    <div class="btn-group">
        <button class="btn btn-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton303"
            data-bs-toggle="dropdown" aria-expanded="false">
            Actions
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton303">


                <a class="dropdown-item" href="{{ route($model . '.edit', $raw->id) }}">Edit</a>
                <a class="dropdown-item delete_raw" data-id="{{ $raw->id }}" href="#">Delete</a>
                <form id="delete_form" action="{{ route($model . '.destroy', $raw->id) }}" method="post">
                    @csrf
                    @method('delete')
                </form>
        </div>
    </div>
</td>

<form style="display: inline-block;" method="POST" action="{{ route('form.edit', $data->id) }}">
    @csrf
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

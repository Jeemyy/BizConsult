<form action="{{ $href }}" method="POST" class="d-inline"
    id="formSubmit-{{ $formId }}">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger btn-sm" onclick="getAlert({{ $formId }})">
        <i class="fe fe-trash-2"></i>
    </button>
</form>
<script>
    function getAlert(id) {
        if (confirm('Are you sure you want to delete this service?')) {
            document.getElementById('formSubmit-' + id).submit();
        }
    }
</script>

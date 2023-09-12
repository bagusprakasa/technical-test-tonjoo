<a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
<a href="#" class="btn icon btn-danger" onClick="deleteRow(1,'nama')"><i class="bi bi-trash"></i></a>
@php
    $route = Request::segment(1);
@endphp
<form action="{{ route($route . '.destroy', 1) }}" id="deleteAction{{ 1 }}" method="POST">
    @csrf
    @method('DELETE')
</form>
@push('custom-js')
    <script></script>
@endpush

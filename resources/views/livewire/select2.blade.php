<div class="text-center m-5">
    <h1>Laravel Livewire Select2 Example</h1>
    <strong>Select2 Dropdown: {{ $selCity }}</strong>
    <div wire:ignore>
        <select class="form-control" id="select2" >
            <option value="">-- Select City --</option>
            @foreach($cities as $city)
                <option value="{{ $city }}">{{ $city }}</option>
            @endforeach
        </select>
    </div>
</div>
  
@push('scripts')
<script>
    $(document).ready(function() {
        $('#select2').select2();
        $('#select2').on('change', function (e) {
            var data = $('#select2').select2("val");
            @this.set('selCity', data);
        });
    });
</script>
@endpush
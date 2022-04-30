@if(count($errors) > 0)
@foreach($errors->all() as $error)
<script>
    toastr.error(`{{ $error }}`);
</script>
@endforeach
@endif


@if(session('success'))
<script>
    toastr.info(`{{ session('success')}}`);
</script>
@endif
@if(session('error'))
<script>
    toastr.error(`{{ session('error')}}`);
</script>
@endif
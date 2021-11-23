@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert" id="success">
        <strong class="font-bold">Sukces!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Błąd!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Check the following errors :(
    </div>
@endif

<script type="text/javascript">
    setTimeout(function(){
        document.getElementById('success').style.display = 'none';
    }, 3000);
</script>

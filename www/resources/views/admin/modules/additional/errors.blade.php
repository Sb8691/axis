@if($errors->any())
    <div class="col-md-12 alert alert-danger text-center">
        {{ implode('', $errors->all(':message')) }}
    </div>
@endif
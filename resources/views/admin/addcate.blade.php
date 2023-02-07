@extends('layouts.master')
@section('main')
<div>
    <p>Them loai san pham</p>
    <form action="listcatepost" method="post">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="ten">Ten loai</label>
            <input type="text" class="form-control" name="ten" id="ten">
        </div>
        <div class="mb-3">
            <label for="mota">Mo ta</label>
            <input type="text" class="form-control" name="mota" id="mota">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Them loai san pham</button>
        </div>
    </form>
</div>
@endsection

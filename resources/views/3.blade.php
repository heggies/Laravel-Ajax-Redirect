@extends(\Request::ajax() ? 'layouts.ajax-skeleton' : 'layouts.skeleton')
@section('content')

Ini halaman 3 <br>
<button type="button" name="button" class="btn btn-danger">button 3</button>

@endsection

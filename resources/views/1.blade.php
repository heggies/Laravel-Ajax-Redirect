@extends(\Request::ajax() ? 'layouts.ajax-skeleton' : 'layouts.skeleton')
@section('content')

Ini halaman 1 <br>
<button type="button" name="button" class="btn btn-default">button 1</button>

@endsection

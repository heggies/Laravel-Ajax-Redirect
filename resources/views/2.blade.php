@extends(\Request::ajax() ? 'layouts.ajax-skeleton' : 'layouts.skeleton')
@section('content')

Ini halaman 2 <br>
<button type="button" name="button" class="btn btn-primary">button 1</button>

@endsection

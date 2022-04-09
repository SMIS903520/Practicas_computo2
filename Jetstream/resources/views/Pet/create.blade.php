<form action="{{ url('/Pet') }}" method="post">
    @csrf
    @include('Pet.form')
</form>
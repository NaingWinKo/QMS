@extends('Admin.master')
@section('content')
<form action="">
    <input type="text" name="role" value="{{user->role}}">
</form>
@endsection
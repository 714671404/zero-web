

<form action="registers" method="post">
    <input type="text" name="name">
    <input type="text" name="email">{{ csrf_field() }}
    <input type="text" name="password">
    <input type="submit" name="submit" value="提交">
</form>
@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
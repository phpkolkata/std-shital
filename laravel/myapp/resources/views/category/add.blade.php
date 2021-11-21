<form action="/category" method="post" enctype="multipart/form-data">
    @csrf()
    Name:<input type="text" name="name"><br>
    isActive:
    <select name="is_active">
        <option value="y">Yes</option>
        <option value="n">No</option>
    </select>
    <br>
    Image:<input type="file" name="im">
    <br>
    <button>Add</button>
</form>

<img src="{{asset('storage/1.jpg')}}">

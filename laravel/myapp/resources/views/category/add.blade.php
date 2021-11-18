<form action="/category" method="post">
    @csrf()
    Name:<input type="text" name="name"><br>
    isActive:
    <select name="is_active">
        <option value="y">Yes</option>
        <option value="n">No</option>
    </select>
    <br>
    <button>Add</button>
</form>

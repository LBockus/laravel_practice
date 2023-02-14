<h1>Creating</h1>
<span>Redagavimo forma</span>
<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="slug" placeholder="Slug" value=""><br>
    <input type="text" name="description" placeholder="Description" value=""><br>
    <input type="text" name="category_id" placeholder="Category ID" value=""><br>
    <input type="text" name="color" placeholder="Color" value=""><br>
    <input type="text" name="size" placeholder="Size" value=""><br>
    <input type="text" name="price" placeholder="Price" value=""><br>
    <input type="text" name="status_id" placeholder="Status ID" value=""><br>
    <input type="file" name="foto">
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>

<h1>Editing {{$person->name}}</h1>
<span>Redagavimo forma</span>
<form action="{{route('persons.update', $person->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{$person->name}}"><br>
    <input type="text" name="slug" placeholder="Slug" value="{{$person->slug}}"><br>
    <input type="text" name="description" placeholder="Description" value="{{$person->description}}"><br>
    <input type="text" name="image" placeholder="Image" value="{{$person->image}}"><br>
    <input type="text" name="category_id" placeholder="Category ID" value="{{$person->category_id}}"><br>
    <input type="text" name="color" placeholder="Color" value="{{$person->color}}"><br>
    <input type="text" name="size" placeholder="Size" value="{{$person->size}}"><br>
    <input type="text" name="price" placeholder="Price" value="{{$person->price}}"><br>
    <input type="text" name="status_id" placeholder="Status ID" value="{{$person->status_id}}"><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>

<h1>Creating</h1>
<span>Redagavimo forma</span>
<form action="{{route('persons.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="surname" placeholder="Surname" value=""><br>
    <input type="text" name="personal_code" placeholder="Personal code" value=""><br>
    <input type="text" name="email" placeholder="Email" value=""><br>
    <input type="text" name="phone" placeholder="Phone" value=""><br>
    <input type="text" name="user_id" placeholder="User ID" value=""><br>
    <input type="text" name="address_id" placeholder="Address ID" value=""><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>

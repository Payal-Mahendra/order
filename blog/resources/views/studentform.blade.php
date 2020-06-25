<form action="submit" method="POST" enctype='multipart/form-data'>
@csrf
 <input type="text" name="name"><br><br>
 <input type="text" name="address"><br><br>
 <input type="text" name="phone"><br><br>
 <input type="file" name="image"><br><br>
 <button type="submit">INSERT</button>
 <button type="update">UPDATE</button>
 <button type="submit">DELETE</button>
</form>
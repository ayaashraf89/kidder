<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Testimonial list</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Profession</th>
        <th>Published</th>
        <th>Message</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
    @foreach($testimonial as $testimonial)
      <tr>
        <td>{{ $testimonial->name }}</td>
        <td>{{ $testimonial->profession }}</td>
        <td>{{ $testimonial->message }}</td>
        <td>{{ $testimonial->image}}</td>
        <td><a href="updateTestimonial/{{ $testimonial->id }}">Edit</a></td>
        <td><a href="deleteTestimonial/{{ $testimonial->id }}"onclick="return confirm('Are You Sure you want to delete?')">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

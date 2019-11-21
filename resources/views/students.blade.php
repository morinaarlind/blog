<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h2>Register Form</h2>
<form action="/addStudent" method="POST" >
    <div style="display:inline-block;">
        {{ csrf_field() }}
        <input type="text" name="first_name" placeholder="First Name">
        <span style="color:red"></span>
    </div>
    <div style="display:inline-block;">
        <input type="text" name="last_name" placeholder="Last Name">
    </div>
    <div style="display:inline-block;">
        <input type="text" name="email" placeholder="Email">
    </div>
    <div style="display:inline-block;">
        <input type="text" name="phone" placeholder="Phone"">
    </div>
    <div>
        <br/>
        <input type="checkbox" name="accept" >
        <label>Accept Terms & Conditions</label>
    </div>
    <div>
        <button type="submit" name="submit">Register</button>
    </div>
    <div style="display:inline-block;">
</form>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td><a  href="{{url('getStudentData/'.$student->id)}}">Edit</a></td>
            <td><a  href="{{url('deleteStudent/'.$student->id)}}">Delete</a></td>
        </tr>
    @endforeach

    </tbody>
</table>
    <form action="/editStudent/{{$selectedStudent->id ?? ''}}" method="POST" >
        <div style="display:inline-block;">
            {{ csrf_field() }}
            <input type="text" name="first_name" placeholder="First Name" value="{{$selectedStudent->first_name ?? ''}}">
            <span style="color:red"></span>
        </div>
        <div style="display:inline-block;">
            <input type="text" name="last_name" placeholder="Last Name" value="{{$selectedStudent->last_name ?? ''}}">
        </div>
        <div style="display:inline-block;">
            <input type="text" name="email" placeholder="Email" value="{{$selectedStudent->email ?? ''}}">
        </div>
        <div style="display:inline-block;">
            <input type="text" name="phone" placeholder="Phone" value="{{$selectedStudent->phone ?? ''}}">
        </div>
        <div>
            <button type="submit" name="submit" >Edit</button>
        </div>
        <div style="display:inline-block;">
    </form>


</body>
<html>
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Mobile_no</td>
            <td>Adharcard_no</td>
            <td>Password</td>
            <td>Address</td>
         </tr>
         @foreach ($users as $exam)
         <tr>
            <td>{{ $exam->id }}</td>
            <td>{{ $exam->name }}</td>
            <td>{{ $exam->mobile}}</td>
            <td>{{ $exam->adhar}}</td>
            <td>{{ $exam->psw}}</td>
            <td>{{ $exam->address}}</td>
            <td><a href = 'edit/{{ $exam->id }}'>Edit</a></td>
         </tr>
         @endforeach
        
      </table>
   </body>
</html>
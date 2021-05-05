<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Mobile_no</td>
            <td>Crime_type</td>
            <td>Crime_report</td>
             <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->number }}</td>
             <td>{{ $user->type }}</td>
              <td>{{ $user->report }}</td>
              <td><a href = 'view-records/{{ $user->id }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
    <style>
        #tabl{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #tabl td,#tabl th{
            border:1px solid white;
            padding:8px;
        }
        #tabl tr:nth-child(even){
            background-color:lightblue;
        }
        #tabl th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: lightgreen;
            color: white;
    
        }
    </style>
</head>
<body>
                                <table id="tabl">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Salary</th>
                                            <th>Department</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            @foreach ($employees as $emp)
                                            <tr>
                                                <td>{{$emp->id}}</td>
                                                <td>{{$emp->name}}</td>
                                                <td>{{$emp->email}}</td>
                                                <td>{{$emp->phone}}</td>
                                                <td>{{$emp->salary}}</td>
                                                <td>{{$emp->department}}</td>
                                                
                                            </tr>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
</body>
</html>
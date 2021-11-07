<x-header />




<table border="1" > 
    <tr>
    <th>Name</th>
    <th>{{$user['name']}}</th>

    </tr>
   
    <tr>
        <th>Email</th>
       
    <td>{{$user['email']}}</td>
    
    </tr>
   
    <tr>
    <th>Contact</th>
    <td>{{$user['contact']}}</td> 
    </tr>
    
</table>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  display: flex;
  flex-direction:center;
  justify-content:center;
  /* width: 100%; */
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
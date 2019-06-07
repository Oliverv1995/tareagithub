<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<CENTER><h1>FORMULARIO MOSTRAR <span class="badge badge-secondary"></span></h1></CENTER>
	<br>
  <form action="{{url('\ingresar')}}" method="get" accept-charset="utf-8" >
{{csrf_field()}}



<div>
    <button type="submit" name="Ingresar" class="btn btn-primary">Ingresar otro</button>
  </div>
 </form>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CEDULA</th>
      <th scope="col">PROMEDIO</th>
      <th scope="col">NIVEL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$arreglo[0]}}</td>
      <td>{{$arreglo[1]}}</td>
      <td>{{$arreglo[2]}}</td>
      @if($arreglo[3]>=1 and $arreglo[3]< 4 )
        <td>{{$arreglo[3]}}</td>
        <td style="background-color: red">REGULAR</td>
      @endif

       @if($arreglo[3]>=4 and $arreglo[3]< 6)
        <td>{{$arreglo[3]}}</td>
        <td style="background-color: #E6C115">BUENO</td>
      @endif

       @if($arreglo[3]>=6 and $arreglo[3]< 8 )
       <td>{{$arreglo[3]}}</td>
        <td style="background-color: #310AF9">MUY BUENO</td>
      @endif

       @if($arreglo[3]>=8 and $arreglo[3]<=10 )
       <td>{{$arreglo[3]}}</td>
      <td style="background-color: green">EXCELENTE</td>
      @endif

    </tr>
  </tbody>
</table>

</body>
</html>
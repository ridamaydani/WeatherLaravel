
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>example</title>
  <div class="body">
</head>

<body>

<div class="ParentDiv">


<div class="tablesh">
<div >
	<dl>
<dt class="textstyle">16 Days</dt>
<dt> {{strtoupper(\Carbon\Carbon::createFromTimestamp($futureWeather['list'][0]['dt'])->format('M d') )}}
</b>
        .
    {{strtoupper(\Carbon\Carbon::createFromTimestamp($futureWeather['list'][15]['dt'])->format('M d') )}}
    </dt>
<dt class='floatR'>PREVIOUS 8 DAYS </dt>

</dl>
<div class="u-table u-width100">
		<div class="u-tableCell">
        @foreach($futureWeather['list'] as $weather)
        <div 
			class="floatL" >

            <dl>
      <dt  class="tx"> {{strtoupper(\Carbon\Carbon::createFromTimestamp($weather['dt'])->format('D'))}}</dt>
      <dt> {{strtoupper(\Carbon\Carbon::createFromTimestamp($weather['dt'])->format('m/d'))}}</dt>
     <dt class="dt">   {{ucfirst($weather['weather'][0]['description']) }} </dt>
     <dt> <img src="http://openweathermap.org/img/wn/{{$weather['weather'][0]['icon']}}.png" alt="icon"></dt>
    <dt class="tx">{{ round($weather['temp']['day']) }}&#176;C</dt>
  
</dl>
</div>
@endforeach
</div>
	</div>
</div>
</div>
</div>  
</body>
</div>


<style type="text/css">
	.u-table{
		display: table;
    
	}
	.u-tableCell{
		display: tableCell;
    

	}
	.u-width100{
		width: 100%;
	}
	.ParentDiv{
		width: 100%;
		 max-width: 1300px;
    min-width:320px; 
		position: relative;
		padding: 15px;
    /* margin:auto; */
  height: 657px;
  background-color:#FFFAF0;
		margin-left: auto; 
  margin-right: auto; 
 
	}
	.floatL{
		float: left;
		
    padding: 17px;
    text-align:center;
	max-width: 100px;
height: 220px;;
 background-color:#D3D3D3;
    border: 1px solid grey;
    border-collapse: collapse;
	box-shadow: 10px 10px 10px #999;
	
	}
 .floatR{
margin-right: 100px;
padding-right:100px;
position: relative;
left: 650px;
bottom:30px;
font-weight:bold;
 }
   .tx{
	   font-weight:bold;
	   font-size:large;
   }
    
	.body{
    background-color:grey;
    width:100%;
	
  }
  .textstyle{
		font-style: italic;
		font-size: larger;	
		font-weight: 1000;}
		.tablesh{
			width: 100%;
		 max-width: 925px;
    min-width:320px; 
		position: relative;
		padding: 15px;
		margin-left:auto;
		margin-right:auto;
		}
</style>

</html>



@extends('layouts.app')
<title>Stadsbrouwhuis</title>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            		

                <div class="panel-body">
                    <!--<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                      

						
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">RFID tag Unique Identfier</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                                
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Gewicht</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                                
                            </div>
                        </div>
						
						
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Bier soort</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                                
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">RGB</label>

                            <div class="col-md-6">
                               <input type="color" name="favcolor" value="#ff0000">

                                
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Toevoegen
                                </button>

                            </div>
                        </div>
                    </form>-->
<?php 
exec('/usr/bin/python /var/Viltje/resources/views/text.py');
$command = escapeshellcmd('python /var/Viltje/resources/views/text.py');
$output = shell_exec($command);
$testt = 'iddd';
echo $output;?>


{!!Form::open(array('url'=>'/voegIdToe','method'=>'post'))!!}
<input type="text" name="id" placeholder="ID" value="<?php echo $testt;?>"><br>
@foreach ($beers as $beer)
<input type="radio" name="beerid" value="{{ $beer->id }}">{{ $beer->name }}<br>
@endforeach
<input type="submit" value="Toevoegen">
{!!Form::close()!!}@stop
                </div> 
		</div>

                </div>


            <div class="content">
                <div class="title m-b-md">
                   
                </div>

               
            </div>
        </div>

<!DOCTYPE html>
<html>
<head>
	<title>Editar 2</title>
</head>
<body>

<div class="row">
		{!! Form::model($unaprovincia, ['route' => ['provincias_editar/{$id}', $unaprovincia->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('nombre', 'Nombre de la provincia:') }}
			{{ Form::text('nombre', null, ["class" => 'form-control input-lg']) }}

			</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($unaprovincia->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($unaprovincia->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
	</div>	<!-- end of .row (form) -->


</body>
</html>


        <!DOCTYPE html>
<html>
<head>

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="padding:30px;" >
{!!Form::open(['url'=>'submit','method' => 'post', 'files'=>true]) !!}
<div class="form-group">
    {!! Form::label('customer_name','customer_name', ['class' => 'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!!Form::text('customer_name', null,['class' => 'form-control']) !!}
    </div></div>
    <div class="form-group">
        {!! Form::label('feedback_text','feedback_text', ['class' => 'control-label col-md-2']) !!}
        <div class="col-md-10">
            {!!Form::text('feedback_text', null,['class' => 'form-control']) !!}
        </div></div>
        <div class="form-group">
            {!! Form::label('customer_desig','customer_desig', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!!Form::text('customer_desig', null,['class' => 'form-control']) !!}
            </div></div>
            <div class="form-group">
                {!! Form::label('event_name','event_name', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!!Form::text('event_name', null,['class' => 'form-control']) !!}
                </div></div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input type="submit" value="submit" class="btn btn-success">
                </div>
            </div>
            {!!Form::close()!!}

</body>
</html>

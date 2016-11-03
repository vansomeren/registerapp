@include('layouts.app')
<div class="mainwrapper">
    <div class="mainpanel">
        <div class="pageheader">
            <div class="media">
                <div class="pageicon pull-left">
                    <i class="fa fa-bullhorn"></i>
                </div>
                <div class="media-body">
                    <ul class="breadcrumb">
                        <li><a href=""><i class="glyphicon glyphicon-bullhorn"></i></a></li>
                        <li><a href="">Members</a></li>
                        <li>Add Members</li>
                    </ul>
                    <h4>Add Members</h4>
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->


        <div class="contentpanel">

            <div class="row">

                {!! Form::open(array('route' => 'member.update','method'=>'PATCH')) !!}

                <div class="col-md-16">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!--<div class="panel-btns">
                                <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                            </div><!-- panel-btns -->
                            <h4 class="panel-title">Members:</h4>
                            <p>Create a new member</p>
                        </div><!-- panel-heading -->
                        <div class="panel-body">
                            <div class="pull-right" style="margin:10px;">

                                <a class="btn btn-primary" href="{{ route('member.index') }}"> Back</a>

                            </div>
                            <div class="row">
                                <div class="form-group  @if($errors->has('name'))has-error @endif">
                                    <div class="col-sm-12">
                                        {!! Form::text('name',null , ['class' => 'form-control  form-control-solid placeholder-no-fix', 'autocomplete' => 'off',
                                        'placeholder' => '' . trans('labels.name').'*' ]) !!}
                                        @foreach($errors->get('name') as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group  @if($errors->has('age'))has-error @endif">
                                    <div class="col-sm-12">
                                        {!! Form::text('age',null , ['class' => 'form-control  form-control-solid placeholder-no-fix', 'autocomplete' => 'off',
                                        'placeholder' => '' . trans('labels.age').'*' ]) !!}
                                        @foreach($errors->get('age') as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group  @if($errors->has('phone_number'))has-error @endif">
                                    <div class="col-sm-12">
                                        {!! Form::text('phone_number',null , ['class' => 'form-control  form-control-solid placeholder-no-fix', 'autocomplete' => 'off',
                                        'placeholder' => '' . trans('labels.phone_number').'*' ]) !!}
                                        <span class="help-block text-muted">{{ trans('labels.phone_numbers_help') }}</span>
                                        @foreach($errors->get('phone_number') as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    </div>
                                </div>

                            </div><!-- row -->

                        </div>
                    </div><!-- panel-body -->
                    <div class="panel-footer">
                        <button class="btn btn-success">Add Member</button>
                    </div><!-- panel-footer -->
                </div><!-- panel -->
                {!! Form::close() !!}

            </div><!-- col-md-6 -->


        </div><!-- contentpanel -->

    </div>
</div><!-- mainwrapper -->


</div>

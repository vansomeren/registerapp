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
                        <li>View Members</li>
                    </ul>
                    <h4>View Members</h4>
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->

        <div class="contentpanel">
            <div class="row">
                <div class="pull-right" >


                    <a class="btn btn-success" href="{{ route('member.create') }}"> Create New Member</a>


                </div>
                <div class="clearfix" style="margin-bottom: 20px;"></div>
                @if ($message = Session::get('success'))

                    <div class="alert alert-success">

                        <p>{{ $message }}</p>

                    </div>

                @endif

                <table class="table table-bordered">

                    <tr>

                        <th>No</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Phone Number</th>
                        <th width="280px">Action</th>

                    </tr>

                    @foreach ($members as $key => $member)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{$member->name}}</td>
                            <td>{{$member->age}}</td>
                            <td>{{ $member->phone_number}}</td>
                            <td>
                                    <a class="btn btn-dark" href="{{ route('member.show',$member->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('member.edit',$member->id) }}">Edit</a>


                                    {!! Form::open(['method' => 'DELETE','route' => ['member.destroy',$member->id],'style'=>'display:inline']) !!}

                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                    {!! Form::close() !!}


                            </td>

                        </tr>
                    @endforeach

                </table>

                {!! $members->render() !!}
            </div>
        </div>

    </div>
</div>


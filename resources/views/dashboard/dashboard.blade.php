@extends('layouts.index')

@section('content')
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Songs
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{ url('home') }}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Songs
                            </li>
                        </ol>
                    </div>
                </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif                 
                <!-- /.row -->
            <form method="POST" action="{{ route('home') }}">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name="search" class="form-control"  placeholder="Search by Song Title or Artist" value="">            
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Search</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSong" >Add new </button>    
                    </span>                
                </div>  
            </form>
            @include('partials.add')
                <div class="row">
                    <div class="col-lg-12">
                        <h5> All SONGS</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Song Title</th>
                                        <th>Artists</th>
                                        <th>Date Created</th>
                                        <th>Added by:</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($songs))
                                @foreach($songs as $song)
                                    <tr class="active">
                                        <td> {{$song['id']}}</td>
                                        <td> <a href="/page/{{$song['id']}}" target="_blank">{{$song['title']}}</a> </td>
                                        <td> {{$song['artist']}}</td>
                                        <td> {{$song['date']}} </td>
                                        <td> {{$song['user']}} </td>
                                        <td>
                                            <a href="/edit/{{$song['id']}}" >Edit</a>
                                            <a href="#" onclick="updateStatus({id:{{ $song['id']}},name:'title'})" data-toggle="tooltip" title="Delete" data-toggle="modal" data-target="#deleteSong">Delete</a>
                                        </td>
                                    </tr>
                                    @include('partials.add')                                 
                                @endforeach
                                @else
                                    <tr class="active">
                                        <td colspan="4" align="center"><h3>No result found</h3></td>
                                    </tr>                                
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="pagi" style="text-align: center;"><?php echo $pagi; ?></div>
                <!-- /.row -->
            </div>
@endsection
<!-- data-toggle="modal" data-target="#addSong{{$song['id']}}" -->
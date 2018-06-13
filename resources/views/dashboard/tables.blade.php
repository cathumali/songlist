@extends('layouts.index')

@section('content')
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Songs
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Songs
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            <form method="POST" action="{{ route('home') }}">
            <div class="input-group">
                <input type="text" name="search" class="form-control"  placeholder="Search by ID , Song Title or Artist" value="">            
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSong" >Add new </button>
                </span>                
            </div>  
            </form>

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Song List</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Song Title</th>
                                        <th>Artists</th>
                                        <th>Date Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <td> Top of the world</td>
                                        <td> The Carpenters </td>
                                        <td> 6-13-18 </td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#editModal">Edit</a>
                                            <a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
@include('partials.add')
@endsection
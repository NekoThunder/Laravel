<!--
Author      : Phurphat Khumsuan[Netkung]
ID          : 65160096
Workshop    : #5
-->

@extends('layouts.default')

@section('title', 'Netkung')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">General Form</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Member Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                          <div class="card-body">

                            <div class="form-group">
                              <label for="exampleInputFirstname">Firstname</label>
                              <input type="text" class="form-control" placeholder="Your Firstname">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputLastname">Lastname</label>
                                <input type="text" class="form-control" placeholder="Your Lastname">
                            </div>

                            <!-- Date -->
                            <div class="form-group">
                                <label>Birthday</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    {{-- <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/> --}}
                                    <input type="date" id="birthday" name="birthday">
                                    {{-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control" placeholder="Your Age">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Profile Picture</label>
                                {{-- <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                                  </div>
                                  <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                  </div>
                                </div> --}}
                                <br>
                                <input type="file" id="img" name="img" accept="image/*">
                            </div>
                        </form>

                    </div><!-- /.card -->
                </div>

                <div class="card card-warning">
                    <div class="card-header">
                      <h3 class="card-title">Location Member</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form>
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- Location -->
                            <div class="form-group">
                                <label>Please Write Your Location</label>
                                <textarea class="form-control" rows="3" placeholder="Your Location"></textarea>
                              </div>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>

                <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Things of Interest</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form>
                        <div class="row">

                          <div class="col-sm-6">
                            <!-- radio -->
                            <div class="form-group">
                                <label>Love Music</label><br>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio1">
                                <label class="form-check-label">Yaosobi</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio1" checked>
                                <label class="form-check-label">UrboyTJ</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio1" checked>
                                <label class="form-check-label">Linkin Park</label>
                                </div>
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <!-- radio -->
                            <div class="form-group">
                                <label>Love Anime</label><br>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio2">
                                <label class="form-check-label">High School DXD</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio2" checked>
                                <label class="form-check-label">Fight Break Sphere</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio2" checked>
                                <label class="form-check-label">Throne of Seal</label>
                                </div>
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <!-- Location -->
                            <div class="form-group">
                                <label>Love Color</label><br>
                                <input type="color" id="favcolor" name="favcolor" value="#ff0000">
                            </div>
                          </div>

                        </div>
                      </form>
                    </div>
                </div>

                <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Verify Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form>
                        <div class="row">
                          <div class="col-sm-6">

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Confirm</label>
                            </div>

                            <br>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                          </div>

                          </div>
                        </div>
                      </form>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

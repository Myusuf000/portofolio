@extends('layouts.app')
@section('content')

<div class="right_col" role="main">
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>{{ $title ?? ''}}</h3>
      </div>

      {{-- <div class="title_right">
        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div> --}}
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>biodata</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
    
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <div class="float-left">
                        <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal">tambah data</a>
                    </div>
              
                    <div class="modal-body">
                        <form action="{{ route('biodata.update', $biodata->id)}}" method="post" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <div class="item form-group">
                                <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name" >Nama Lengkap <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="nama" name="nama" required="required" class="form-control" value="{{ $biodata->nama}}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-4 col-sm-4 label-align" for="last-name">Alamat <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea   id="" name="alamat">{{ $biodata->alamat}}</textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align">No Hp / Whatapps</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="wa" name="wa" class="form-control" type="text" value="{{ $biodata->wa}}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align">Instagram</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="ig" name="ig" class="form-control" type="text" value="{{ $biodata->ig}}" >
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align">github</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="github" name="github" class="form-control" type="text" value="{{ $biodata->github}}">
                                </div>
                            </div>
                 
            
                        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
        </div>
        </div>
    </div>
  </div>

        </div>
      </div>
    </div>
  </div>
</div>


@endsection
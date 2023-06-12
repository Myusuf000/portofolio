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

          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>No HP/ Whataps</th>
                <th>Instagram</th>
                <th>Github</th>
                <th>Aksi</th>
              </tr>
            </thead>


            <tbody>
                @foreach ($biodatakus as $biodata)
              <tr>
                
                <td class="align-middle" style="width: 5%">{{ $loop->iteration}}</td>
                <td class="align-middle" style="width: 15%">{{ $biodata->nama}}</td>
                <td class="align-middle" style="width: 20%">{{ $biodata->alamat}}</td>
                <td class="align-middle" style="width: 20%">{{ $biodata->wa}}</td>
                <td class="align-middle" style="width: 15%">{{ $biodata->ig}}</td>
                <td class="align-middle" style="width: 15%">{{ $biodata->github}}</td>
                <td class="align-middle" style="width: 15%">
                  <x-a-link-edit-modal param="{{ $biodata->id }}">
                  </x-a-link-edit-modal>
    
                <x-button-delete
                action="{{ route('biodataku.destroy', $biodata->id)}}">
            </x-button-delete>
         
                </td>
     
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
    </div>
  </div>

        </div>
      </div>
    </div>
  </div>
</div>


  
 

  <!-- Modal -->
 @foreach ($biodatakus as $biodata)
  <div class="modal fade" id="editModal{{$biodata->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Data Identitas Diri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('biodataku.update',$biodata->id)}}" method="POST" autocomplete="off">
              @method('PUT') 
              @csrf
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
                        <textarea name="alamat" id="" value="">{{ $biodata->alamat}}</textarea>
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
  @endforeach

   <!-- Modal -->
   <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Tambah Data Identitas Diri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('biodataku.store')}}" method="post" autocomplete="off">
                @csrf
                
                <div class="item form-group">
                    <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name" >Nama Lengkap <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="nama" name="nama" required="required" class="form-control" value="">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-4 col-sm-4 label-align" for="last-name">Alamat <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <textarea name="alamat" id=""></textarea>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align">No Hp / Whatapps</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input id="wa" name="wa" class="form-control" type="text" value="">
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align">Instagram</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input id="ig" name="ig" class="form-control" type="text" value="" >
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align">github</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input id="github" name="github" class="form-control" type="text" value="">
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
@endsection
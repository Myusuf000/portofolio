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
            <h2>tentang</h2>
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
                <th>Deskripsi 1</th>
                <th>Deskripsi 2</th>
          
                <th>Aksi</th>
              </tr>
            </thead>


            <tbody>
                @foreach ($tentangs as $tentang)
              <tr>
                
                <td class="align-middle" style="width: 5%">{{ $loop->iteration}}</td>
                <td class="align-middle" style="width: 15%">{{ $tentang->tentang1}}</td>
                <td class="align-middle" style="width: 20%">{{ $tentang->tentang2}}</td>
             
                <td class="align-middle" style="width: 15%">
                  <x-a-link-edit-modal param="{{ $tentang->id }}">
                  </x-a-link-edit-modal>
    
                <x-button-delete
                action="{{ route('tentang.destroy', $tentang->id)}}">
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
 @foreach ($tentangs as $tentang)
  <div class="modal fade" id="editModal{{$tentang->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Data Identitas Diri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('tentang.update',$tentang->id)}}" method="POST" autocomplete="off">
              @method('PUT') 
              @csrf
                <div class="item form-group">
                    <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name" >Deskripsi 1 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="tentang1" name="tentang1" required="required" class="form-control" value="{{ $tentang->tentang1}}">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-4 col-sm-4 label-align" for="last-name">Deskripsi 2 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="tentang2" name="tentang2" required="required" class="form-control" value="{{ $tentang->tentang2}}">
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
            <form action="{{ route('tentang.store')}}" method="post" autocomplete="off">
                @csrf
                
                <div class="item form-group">
                    <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name" >Deskripsi 1 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="tentang1" name="tentang1" required="required" class="form-control" value="">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-4 col-sm-4 label-align" for="last-name">Deskripsi 2 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="tentang2" name="tentang2" required="required" class="form-control" value="">
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
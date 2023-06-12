<x-app-layout>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="ion ion-plus"> </i> Tambah Data
                </button>
                <div class="section-header-breadcrumb">
                    @foreach ($breadcrumbs as $title => $url)
                    <div class="breadcrumb-item"><a href="{{ $url ?? ''}}">{{ $title ?? ''}}</a></div>
                    @endforeach
                    <div class="breadcrumb-item">DataTabel</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">{{ $title ?? config('app.name')}}</h2>
                <p class="section-lead">
                    Menampilkan semua data formasi.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">{{ ucwords('No')}}</th>
                                                <th>{{ ucwords('Nama')}}</th>
                                                <th>{{ ucwords('alamat')}}</th>
                                                <th>{{ ucwords('No HP/ Whataps')}}</th>
                                                <th>{{ ucwords('Instagram')}}</th>
                                                <th>{{ ucwords('Github')}}</th>
                                                <th>{{ ucwords('Aksi')}}</th>
                         
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($biodatas as $biodata)
                                            
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
                                                        action="{{ route('biodata.destroy', $biodata->id)}}">
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
        </section>
    </div>


    <!-- Modal Add -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data {{ $title ?? ''}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('biodata.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                       
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
                 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" id="buttonAdd" class="btn btn-primary" disabled>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($biodatas as $biodata)
    <div class="modal fade" id="editModal{{ $biodata->id }}" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data {{ $title ?? ''}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('biodata.update', $biodata->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" id="buttonUpdate" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    {{-- css library --}}
    @push('css-libraries')
    <link rel="stylesheet"
        href="{{ asset('stisla/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
        href="{{ asset('stisla/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
    @endpush

    {{-- css spesific --}}
    @push('css-spesific')
    <style>
        .required-label {
            position: relative;
        }

        .required-label::before {
            content: '*required';
            position: absolute;
            top: -4px;
            color: red;
        }

    </style>
    @endpush

    @push('js-libraries')
    <script src="{{ asset('stisla/node_modules/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('stisla/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('stisla/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>
    @endpush

    @push('js-spesific')
    <script src="{{ asset('stisla/assets/js/page/modules-datatables.js')}}"></script>

    <script>
        $(document).ready(function () {
            // Event listener untuk input change
            $('input[name="name"]').on('input', function () {
                var nameInput = $(this);
                var name = nameInput.val();

                if (name.trim() === '') {
                    nameInput.removeClass('is-valid').addClass('is-invalid');
                    $('#buttonAdd').prop('disabled', true);
                    $('#buttonUpdate').prop('disabled', true);
                } else {
                    nameInput.removeClass('is-invalid').addClass('is-valid');
                    $('#buttonAdd').prop('disabled', false);
                    $('#buttonUpdate').prop('disabled', false);
                }
            });
        });

    </script>

    @endpush

</x-app-layout>

@extends('backend.master')
@section('content')
<style>
    #preview {
        max-width: 300px;
        max-height: 300px;
        border-radius: 10px;
        display: none;
    }

    #btn-hapus {
        background-color: #750101;
    }

    #btn-edit {
        background-color: #c65050;
    }

    #submit-button {
        display: none;
    }
</style>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="mb-4">Galeri</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@image">Tambah Foto</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Foto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('gallery.store') }}" method="post">
                            <div class="modal-body">

                                <label for="file-input" class="btn btn-primary">Pilih Foto
                                    <input type="file" id="file-input" hidden required></label>
                                <br>
                                <img id="preview" src="#" alt="Image Preview">
                                <!-- <br><br>
                                <button type="submit" class="btn btn-primary" id="submit-button">Upload Foto</button> -->
                                <br>
                                <br>
                                <label for="deskripsi" class="form">Deskripsi Foto</label>
                                <input type="text" name="title" class="form-control" maxlength="50" required>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" id="submit-button">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th style="width: 30px">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td style="width: 30px">
                            <form action="" method="post">

                                <a href="" class="btn btn-sm text-white" id="btn-edit">Edit</a>
                                <button type="submit" class="btn btn-sm text-white" id="btn-hapus">Hapus</button>
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#file-input').change(function(event) {
            var file = event.target.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result).show();
                    $('#submit-button').show();
                }
                reader.readAsDataURL(file);
            } else {
                $('#preview').hide();
                $('#submit-button').hide();
            }
        });

        $('#custom-button').click(function() {
            $('#file-input').click();
        });
    });
</script>
@endsection
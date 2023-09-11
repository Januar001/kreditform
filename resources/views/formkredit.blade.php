<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form Pengajuan Kredit</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card p-3">
            <h5 class="card-title">Form Pengajuan</h5>
            <div class="card-body">
                <form action="" method="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Refferal</label>
                        <input type="text" class="form-control" name="reff" id="reff"
                            placeholder="Masukkan nama" required readonly value="{{ request('reff') }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            placeholder="Masukkan nama" required value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" required
                            value="{{ old('alamat') }}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jeniskelamin" name="jeniskelamin" required
                            value="{{ old('jeniskelamin') }}">
                            <option value="">-- Pilih Salah Satu
                                --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <label>Upload Dokumen KTP</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="myInput" aria-describedby="myInput"
                                name="F_ktp">
                            <label class="custom-file-label" for="myInput">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group form-check mt-3">
                        <input type="checkbox" class="form-check-input" id="check" name="check" required>
                        <label class="form-check-label" for="check">Saya Menyetujui Syarat dan Ketentuan</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
        // $('#chooseFile').on('change', function() {
        //     //get the file name
        //     var fileName = $(this).val();
        //     //replace the "Choose a file" label
        //     $(this).next('.custom-file-label').html(fileName);
        // })
        document.querySelector('.custom-file-input').addEventListener('change', function(e) {
            var fileName = document.getElementById("myInput").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        })
    </script>
</body>

</html>

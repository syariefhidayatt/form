<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Biodata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body data-bs-theme="dark">
        <div class="form-check form-switch mx-4">
            <input class="form-check-input p-2" 
            type="checkbox"
            role="switch"
            id="flexswitchCheckChecked"
            checked
            onclick="myFunction()"
            />
            <div class="form-group">
                <i class="bi bi-lightbulb"></i>
                </div>
            </div>

    <form method="POST" action="index.php">

        <div class="container">

            <h2>Form Biodata</h2>

            <div class="form-group">
                <label for="nama_lengkap">Nama</label>
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required="required">
            </div>

            <div class="form-group">
                <label for="basic-addon2" class="form-label">Email</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="email" placeholder="Username anda" aria-label="Username anda" aria-describedby="basic-addon2" required="required">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
            </div>

            <div class="form-group">
                <label for="basic-addon2" class="form-label">No.Telepon</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">+62</span>
                    <input type="text" class="form-control" name="no_telp" aria-label="" aria-describedby="basic-addon2" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="jenis_Kelamin">Jenis Kelamin</label><br>
                <input type="radio" class="btn-check" name="jenis_kelamin" value="Laki-laki" id="option1" autocomplete="off">
                <label class="btn btn-outline-info" for="option1">Laki-laki</label>

            
                <input type="radio" class="btn-check" name="jenis_kelamin" value="Perempuan" id="option2" autocomplete="off">
                <label class="btn btn-outline-info" for="option2">Perempuan</label>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir">
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" rows="4" cols="40" placeholder="Alamat lengkap" required="required"></textarea>
            </div>

            <div class="form-group">
                <label for="hobby">Hobby</label><br>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" name="hobby[]" value="Melukis">
                    <label class="btn btn-outline-info" for="btncheck1">Melukis</label>

                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" name="hobby[]" value="Menyanyi">
                    <label class="btn btn-outline-info" for="btncheck2">Menyanyi</label>

                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" name="hobby[]" value="Futsal">
                    <label class="btn btn-outline-info" for="btncheck3">Futsal</label>
                    
                    <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" name="hobby[]" value="Renang">
                    <label class="btn btn-outline-info" for="btncheck4">Renang</label>
                    
                    <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off" name="hobby[]" value="Badminton">
                    <label class="btn btn-outline-info" for="btncheck5">Badminton</label>
                </div>
            </div>

            <div class="form-group">
                <label for="asal_kota">Asal Kota</label>
                <select name="asal_kota" class="form-select form-select-md mb-3">
                    <option value="" disabled selected>--Pilih Kota Anda--</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Jogja">Jogja</option>
                    <option value="Medan">Medan</option>
                    <option value="Bali">Bali</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </form>

    <script>
        function myFunction() {
            var element = document.body;
            element.dataset.bsTheme =
            element.dataset.bsTheme == "light" ? "dark" : "light";
        }
        function stepFunction(event) {
            debugger;
            var element = document.getElementsByClassName("collapse");
            for (var i = 0; i < element.length; i++) {
            if (element[i] !== event.target.ariaControls) {
                element[i].classList.remove("show");
            }
            }
        }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
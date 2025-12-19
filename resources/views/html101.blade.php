<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop #HTML - FORM (Bootstrap Edition)</title>

</head>
<body>
<x-navbar />
            @extends('templates.default')
            @section('content')
            <form>
                <div class="row mb-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <label for="firstName" class="form-label mb-0">ชื่อ</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <label for="lastName" class="form-label mb-0">สกุล</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <label for="dob" class="form-label mb-0">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control" id="dob" name="dob">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <label for="age" class="form-label mb-0">อายุ</label>
                    </div>
                    <div class="col-md-4">
                        <input type="number" class="form-control" id="age" name="age" min="1">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label class="form-label">เพศ</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male">
                            <label class="form-check-label" for="genderMale">ชาย</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
                            <label class="form-check-label" for="genderFemale">หญิง</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <label for="photo" class="form-label mb-0">รูป</label>
                    </div>
                    <div class="col-md-10">
                        <input class="form-control" type="file" id="photo" name="photo">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="address" class="form-label">ที่อยู่</label>
                    </div>
                    <div class="col-md-10">
                        <textarea class="form-control" id="address" name="address" rows="4"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <label for="favColor" class="form-label mb-0">สีที่ชอบ</label>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" id="favColor" name="favColor">
                            <option value="red" selected>สีแดง</option>
                            <option value="green">สีเขียว</option>
                            <option value="blue">สีฟ้า</option>
                            <option value="yellow">สีเหลือง</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-2">
                        <label class="form-label">แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="musicGenre" id="musicLife" value="life">
                            <label class="form-check-label" for="musicLife">เพื่อชีวิต</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="musicGenre" id="musicCountry" value="country">
                            <label class="form-check-label" for="musicCountry">ลูกทุ่ง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="musicGenre" id="musicOther" value="other">
                            <label class="form-check-label" for="musicOther">อื่นๆ</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-10 offset-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="consent">
                            <label class="form-check-label" for="consent">
                                ยินยอมให้เก็บข้อมูล
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 offset-md-2 d-flex gap-2">
                        <button type="reset" class="btn btn-secondary px-4">Reset</button>
                        <button class="btn btn-primary px-4" onclick="Clickme()">Submit</button>
                    </div>
                </div>

            </form>
@endsection

@push('scripts')
    <script>
        let Clickme = function() {
            document.getElementById("firstName").value = "Ratrawe";
            console.log(document.getElementById("firstName").value);
        }
    alert('Hello from HTML FORM Bootstrap Edition!');
    </script>
@endpush
</body>
</html>

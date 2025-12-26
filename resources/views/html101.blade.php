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
            <form action="/form-workshop" method="post">
                @csrf
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
    function Clickme() {
        // --- 1. กลุ่ม Input ทั่วไป (Text, Date, Number, File, Textarea, Select) ---
        // เอา ID ของ input ทั้งหมดมายัดใส่ Array นี้
        // หมายเหตุ: favColor ปกติมันมีค่า Default selected อยู่แล้ว อาจจะไม่ต้องเช็คก็ได้ แต่ใส่ไว้ให้ครบตามขอ
        const fieldIds = [
            'firstName',
            'lastName',
            'dob',
            'age',
            // 'photo',
            'address',
            'favColor'
        ];

        let isValid = true;

        // วนลูปเช็ค Input ทั่วไป
        fieldIds.forEach(id => {
            let element = document.getElementById(id);
            if (!element) return; // กัน Error ถ้าหา ID ไม่เจอ

            // เช็คว่าค่าว่างไหม (ใช้ trim ตัดช่องว่างหน้าหลัง)
            if (element.value.trim() === "") {
                element.classList.remove('is-valid');
                element.classList.add('is-invalid');
                isValid = false;
            } else {
                element.classList.remove('is-invalid');
                element.classList.add('is-valid');
            }
        });

        // --- 2. กลุ่ม Radio Button (ต้องเช็คเป็นกลุ่ม) ---

        // 2.1 เช็คเพศ (Gender)
        const genderMale = document.getElementById('genderMale');
        const genderFemale = document.getElementById('genderFemale');

        // เช็คว่าไม่มีอันไหนถูกเลือกเลยใช่ไหม?
        if (!genderMale.checked && !genderFemale.checked) {
            genderMale.classList.add('is-invalid');
            genderFemale.classList.add('is-invalid');
            isValid = false;
        } else {
            // ถ้าเลือกแล้ว ให้ลบแดงออก (ปกติ Radio เขาไม่ค่อยใส่เขียว is-valid กันนะ มันรก แต่ถ้าจะใส่ก็เพิ่มไป)
            genderMale.classList.remove('is-invalid');
            genderFemale.classList.remove('is-invalid');
        }

        // 2.2 เช็คแนวเพลง (Music Genre)
        const musicLife = document.getElementById('musicLife');
        const musicCountry = document.getElementById('musicCountry');
        const musicOther = document.getElementById('musicOther');

        if (!musicLife.checked && !musicCountry.checked && !musicOther.checked) {
            musicLife.classList.add('is-invalid');
            musicCountry.classList.add('is-invalid');
            musicOther.classList.add('is-invalid');
            isValid = false;
        } else {
            musicLife.classList.remove('is-invalid');
            musicCountry.classList.remove('is-invalid');
            musicOther.classList.remove('is-invalid');
        }

        // --- 3. กลุ่ม Checkbox (Consent) ---
        const consent = document.getElementById('consent');
        if (!consent.checked) {
            consent.classList.add('is-invalid');
            isValid = false;
        } else {
            consent.classList.remove('is-invalid');
            // consent.classList.add('is-valid'); // อยากเขียวก็เปิดคอมเมนต์นี้
        }

        // --- สรุปผล ---
        if (isValid) {
             document.querySelector('form').submit();
        } else {
            // alert("กรอกข้อมูลไม่ครบนะจ๊ะ ไปเช็คสีแดงๆ ดู");
            // เลื่อนหน้าจอไปหาจุดที่ Error จุดแรก (UX ที่ดี)
            const firstInvalid = document.querySelector('.is-invalid');
            if (firstInvalid) {
                firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    }
</script>
@endpush

</body>
</html>

@extends('templates.default')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Workshop #HTML - FORM Validation</h2>

    <form class="form-box" id="workshopForm">

        <div class="row mb-4">
            <div class="col-12 text-center">
                <label class="fs-3">แบบฟอร์มเก็บข้อมูล</label>
            </div>
        </div>

        <div class="row mb-2">
            <label for="firstname" class="col-sm-4 col-form-label">ชื่อ <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="firstname">
            </div>
        </div>

        <div class="row mb-2">
            <label for="lastname" class="col-sm-4 col-form-label">สกุล <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="lastname">
            </div>
        </div>

        <div class="row mb-2">
            <label for="birthdate" class="col-sm-4 col-form-label">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="birthdate">
            </div>
        </div>

        <div class="row mb-2">
            <label for="age" class="col-sm-4 col-form-label">อายุ <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="age" min="1">
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">เพศ <span class="text-danger">*</span></label>
            <div class="col-sm-8 pt-2">
                <input type="radio" name="gender" id="male" value="male"> <label for="male">ชาย</label>
                <input type="radio" name="gender" class="ms-3" id="female" value="female"> <label for="female">หญิง</label>
            </div>
        </div>

        <div class="row mb-2">
            <label for="file_upload" class="col-sm-4 col-form-label">รูป <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                <input type="file" class="form-control" id="file_upload">
            </div>
        </div>

        <div class="row mb-2">
            <label for="address" class="col-sm-4 col-form-label">ที่อยู่ <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                <textarea class="form-control" id="address"></textarea>
            </div>
        </div>

        <div class="row mb-2">
            <label for="fav_color" class="col-sm-4 col-form-label">สีที่ชอบ <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                <select class="form-select" id="fav_color">
                    <option value="red">สีแดง</option>
                    <option value="green">สีเขียว</option>
                    <option value="blue">สีน้ำเงิน</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">แนวเพลงที่ชอบ <span class="text-danger">*</span></label>
            <div class="col-sm-8 pt-2">
                <input type="radio" name="music" id="music_life" value="life"> <label for="music_life">เพื่อชีวิต</label>
                <input type="radio" name="music" class="ms-2" id="music_country" value="country"> <label for="music_country">ลูกทุ่ง</label>
                <input type="radio" name="music" class="ms-2" id="music_other" value="other"> <label for="music_other">อื่นๆ</label>
            </div>
        </div>

        <div class="row mb-3 mt-3">
            <div class="col-12 text-center">
                <input type="checkbox" id="agree_terms"> <label for="agree_terms" class="fw-bold">ยินยอมให้เก็บข้อมูล <span class="text-danger">*</span></label>
            </div>
        </div>

        <div class="row">
            <div class="col-6 text-start">
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
            <div class="col-6 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection

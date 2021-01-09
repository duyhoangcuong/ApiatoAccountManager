@extends('layouts.master')

@section('content')
<div class="d-flex justify-content-between">
  <h3>Thông tin ứng dụng</h3>
  <div>
    <button onclick="location.href='{{ route ('home_page')}}'" class="btn-back mr-3">Quay về</button>
    <button onclick="onSubmitFormAddNew();" class="btn-save">Lưu</button>
  </div>

</div>

{!!Form::open(['id'=> 'form_add_new', 'route' => 'api_accountmanager_create_account_manager', 'method' => 'POST'])!!}

<div class="d-flex mt-3">
  <div class="label-addnew-container">
    <p>Tên domain</p>
  </div>
  <div class="input-addnew-container">
  {!! Form::text('domain_name', 'domain_name')!!}
    
    <p>Chỉ nhâp tên domain (vd: nếu là 'buslines.phanmemve.vn' thì sẽ nhập 'buslines')</p>
  </div>
</div>
<div class="d-flex mt-3">
  <div class="label-addnew-container">
    <p>Base URL (Đường dẫn module sử dụng vd: /admin , /fronend...)</p>
  </div>
  <div class="input-addnew-container">
  {!! Form::text('base_url', 'base_url')!!}
    
    <p>Mặc định ("/"), nếu nhập '/dongphuoc' thì domain đầy đủ sẽ là 'express.phanmemve.vn/dongphuoc'</p>
  </div>
</div>
<div class="d-flex mt-3">
  <div class="label-addnew-container">
    <p>Mã ứng dụng</p>
  </div>
  <div class="input-addnew-container">
  {!! Form::text('app_code', 'app_code')!!}
    
    <p>Mã ứng dụng là tên công ty viết liền không dấu</p>
  </div>
</div>
<div class="d-flex mt-3">
  <div class="label-addnew-container">
    <p>Chọn loại ứng dụng</p>
  </div>
  <div class="input-radio-addnew-container">
  {!! Form::text('app_brand', 'app_brand')!!}

    <form action="">
      <input type="radio" name="gender" value="male"> Phần mềm vé<br>
      <input type="radio" name="gender" value="female"> Website phần mềm vé<br>
      <input type="radio" name="gender" value="other"> Phần mềm hàng<br>
      <input type="radio" name="gender" value="male"> Tracking phần mềm hàng<br>
      <input type="radio" name="gender" value="female"> Nhân sự<br>
      <input type="radio" name="gender" value="other"> Manual (tự cấu hình)<br>
    </form>
  </div>
</div>
<div class="d-flex mt-3">
  <div class="label-addnew-container">
    <p>Site name</p>
  </div>
  <div class="input-addnew-container">
  {!! Form::text('site_name', 'site_name')!!}
    
    <p>Chọn tên file config phần mềm vé</p>
  </div>
</div>

{!! Form::close() !!}
@endsection

<script type="text/javascript">
  function onSubmitFormAddNew() {
    document.getElementById("form_add_new").submit();
  }
</script>
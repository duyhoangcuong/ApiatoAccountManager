@extends('layouts.master')

@section('content')
<div class="d-flex justify-content-between">
  <h3>Thông tin ứng dụng</h3>
  <div class="d-flex">
    <button onclick="location.href='{{ route ('web_accountmanager_index')}}'" class="btn-back mr-3">Quay về</button>
    <button class="btn-save mr-3" onclick="onclickUpdateBtn()" type="submit">Chỉnh sửa</button>               
    <form action="{!! route('api_accountmanager_delete_account_manager', [$accountManager->id]) !!}" method="POST">
      @method('DELETE')
      @csrf
      <button class="btn-delete" type="submit">Xóa</button>               
    </form>
  </div>
</div>

@component('accountmanager::forms.form-account-manager',[
    // thành viên đưa vào form
    'accountManager'  =>  $accountManager,
    // thuộc tính
    'disabled'  =>  true,
])
@endcomponent

<script type="text/javascript">
  function onclickUpdateBtn(argument) {
    
  }
</script>
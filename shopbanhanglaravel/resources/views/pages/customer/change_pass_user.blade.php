@extends('layout')
@section('content')
<section style="background-color: #eee;">
  <div class="container py-5">
  @if(session()->has('message'))
                <div class="alert alert-success title_user">
                    {!!session()->get('message')!!}
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger title_user" style="margin: 10px 0; width: 832px;">
                    {!!session()->get('error')!!}
                </div>
        @endif
    <div class="row">
      <div class="col-lg-4" style="margin: 10px 0;">
      </div>
      <div class="col-lg-8" style="margin: 86px -160px; width: 470px; border-radius: 10px;">
        <div class="card mb-4">
          <div class="card-body">
            <!-- form card change password -->
            <div class="card card-outline-secondary">
                        <!-- form card change password -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                        <h3 class="mb-0" style="font-size: 2.4rem; font-weight: bold;">Đổi Mật Khẩu</h3>
                        </div>
                        <div class="card-body">
                            @foreach($customer as $key => $cus)
                            <form class="form" action="{{URL::to('/change-password-user/'.$cus->customer_id)}}" method="POST">
                                @csrf
                                <div class="form-group change_pass">
                                    <label for="inputPasswordOld">Mật Khẩu Hiện Tại</label>
                                    <input type="password" class="form-control" name="old_password" id="inputPasswordOld" required="">
                                    <a href="javascript::void(0)" style="position: absolute; top: 22%; right: 20px; color: #333;"><i class="fa fa-eye"></i></a>
                                    <span class="form-text small text-muted">   
                                        Mật khẩu phải có 8-20 ký tự và phải <em>không</em> chứa khoảng trắng.
                                    </span>
                                </div>
                                <div class="form-group change_pass">
                                    <label for="inputPasswordNew">Mật Khẩu Mới</label>
                                    <input type="password" class="form-control" name="new_password" id="inputPasswordNew" required="">
                                    <a href="javascript::void(0)" style="position: absolute; top: 46%; right: 20px; color: #333;"><i class="fa fa-eye"></i></a>
                                    <span class="form-text small text-muted">   
                                        Mật khẩu phải có 8-20 ký tự và phải <em>không</em> chứa khoảng trắng.
                                    </span>
                                </div>
                                <div class="form-group change_pass">
                                    <label for="inputPasswordNew">Xác Nhận Mật Khẩu</label>
                                    <input type="password" class="form-control" name="cofirm_password" id="inputPasswordNew" required="">
                                    <a href="javascript::void(0)" style="position: absolute; top: 70%; right: 20px; color: #333;"><i class="fa fa-eye"></i></a>
                                    <span class="form-text small text-muted">   
                                        Mật khẩu phải có 8-20 ký tự và phải <em>không</em> chứa khoảng trắng.
                                    </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right">Đổi Mật Khẩu</button>
                                </div>
                            </form>
                        @endforeach
                        </div>
                    </div>
                    <!-- /form card change password -->
                    </div>
                    <!-- /form card change password -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
</section>
@endsection
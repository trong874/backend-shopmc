@extends('backend.layout.default')
@section('content')
    <form action="{{route("setting.update",'-')}}" method="POST">
        @method('PUT')
        @csrf
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Cấu hình hệ thống')}}</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary font-weight-bolder">
                        <i class="flaticon2-check-mark"></i>{{__('Cập nhật')}}</button>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <div class="example-preview">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home">
																	<span class="nav-icon">
																		<i class="flaticon2-chat-1"></i>
																	</span>
                                <span class="nav-text">{{__('Thông tin website')}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile">
																	<span class="nav-icon">
																		<i class="flaticon2-layers-1"></i>
																	</span>
                                <span class="nav-text">Email</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" aria-controls="contact">
																	<span class="nav-icon">
																		<i class="flaticon2-rocket-1"></i>
																	</span>
                                <span class="nav-text">Mã nhúng script</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            @foreach($configs as $item)
                                @if($item->type == 'website_info')
                                    <div class="form-group">
                                        <label>{{__($item->name)}}</label>
                                        <input type="text" name="{{$item->id}}" class="form-control" value="{{$item->val}}" placeholder="{{__($item->name)}}">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Tab content
                            2
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Tab content
                            3
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

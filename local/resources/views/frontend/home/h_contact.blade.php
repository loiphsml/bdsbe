<div id="h_contact" class="col-md-12">
    <div class="empty-space-32"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="lh-top">
                <span class="lh-span-dash">
                    <span class="line"></span>
                </span>
                <h4>LIÊN HỆ NHẬN THÔNG TIN BẤT ĐỘNG SẢN</h4>
                <span class="lh-span-dash">
                    <span class="line"></span>
                </span>
            </div>
            <div class="empty-space-32"></div>
            <p class="lh-p-1">Quí khách vui lòng nhập chính xác thông tin vào form liên hệ bên cạnh để chúng tôi có thể
                tư
                vấn tốt nhất.</p>
            <p class="lh-p-2" style="text-align: center;">—–oOo—–</p>
            <div style="line-height: 1.5">
                <p class="lh-p-3" style="text-align: center; ">
                    {{--@foreach($posts as $key=>$post)--}}
                    {{--@if($post->name=='trangchu-contents-lh')--}}
                    {!! $data['configContact']->content !!}
                    {{--@endif--}}
                    {{--@endforeach--}}
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <p class="lh-p-4">Chúng tôi sẽ phản hồi trong vòng 5 phút đến 1 giờ sau khi nhận yêu cầu của quí vị</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="ip-name input-group">
                        <input class="form-control input-text" placeholder="Tên Của Bạn" name="name-ct" type="text"
                               value="">
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ip-phone input-group">
                        <input class="form-control input-text" placeholder="Số Điện Thoại" name="phone-ct" type="text"
                               value="">
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="ip-email input-group">
                        <input class="form-control input-text" placeholder="Email" name="email-ct" type="text" value="">
                        <div class="invalid-feedback">
                            Please choose a Email.
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="ip-contentMail input-group">
                    <textarea class="form-control input-area" placeholder="Viết Nội Dung" name="contentMail" cols="30"
                              rows="5"></textarea>
                        <div class="invalid-feedback">
                            Please choose a Email.
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="text-align: center">
                    <div class="button-group">
                        <button id="btnSendMail" type="button" class="btn btn-contact">Gửi Liên Hệ<i
                                    class="fa fa-spinner fa-spin fa-3x fa-fw loadingSending" style="
    font-size: 15px;display: none"></i><i
                                    class="fa fa-check-circle successSending" style="display: none"
                                    aria-hidden="true"></i></button>
                        <span style="display: none">Chúng tôi đã nhận được mail và sẽ phản hồi quý khách trong 24h. Xin cảm ơn.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
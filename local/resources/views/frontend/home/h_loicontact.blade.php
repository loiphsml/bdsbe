<style>



    /*iconphia tren*/
    #btnSendMail{
        margin-top: 5px;
        width: 100%;

    }

    #h_contact_title{
        display: block;
        background-color: #088db6;
        padding: 5px;
        color: white;
    }

    #h_contact_title::before{
        content: '';
        background-color: #064a76;
        padding-right: 5px;
        width: 5px;
        height: 13px;

    }

    #h_statis {
        margin-top: 40px;
        background: url(http://tsgvietnam.com.vn/public/upload/image/1506918199canhomasterithaodien1-1414845568.jpg) bottom;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        position: relative;
        background-attachment: fixed;
        padding: 75px;
    }

    #h_statis .title{
        color: #165986;
        font-size: 18px;
        font-weight: 600;
        text-shadow: 1px 0 0 #fff;
    }
    #h_statis .count-statis{
        color: #165986;
        font-size: 18px;
        font-weight: 600;
        text-shadow: 1px 0 0 #fff;
    }


    #h_statis:after {
        background-color: rgba(0,0,0,0.1);
        height: 100%;
        width: 100%;
        position: absolute;
        content: "";
        right: 0;
        top: 0;
    }

</style>

<div id="h_statis" class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 one-item text-center">
                <h2 class="title">Hồ Sơ Hoàn Thành</h2>
                <div id="hs1" class="count-statis">500+</div>
            </div>
            <div class="col-md-3 one-item text-center">
                <h2 class="title">KHONG BIET</h2>
                <div id="hs3" class="count-statis">100%</div>
            </div>
            <div class="col-md-3 one-item text-center">
                <h2 class="title">Khách Hàng</h2>
                <div id="hs3" class="count-statis">100%</div>
            </div>
            <div class="col-md-3 one-item text-center">
                <h2 class="title">Nhân Viên</h2>
                <div id="hs4" class="count-statis">500+</div>
            </div>
        </div>
    </div>
</div>

{{--@include('frontend.home.h_product')--}}

<div class="container p-0">
<div id="h_contact" class="col-md-12">
    <div class="empty-space-32"></div>
    <div class="row">

        <div class="col-md-12 mb-3 h_contact2">
            <div class="wid3"></div>
            <div class="wid2"></div>
          <p id="h_contact_title" class="p-2">
              CONTACT WITH US
          </p>
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
                        <button id="btnSendMail" type="button" class="btn btn-contact bg-primary text-light">GỬI LIÊN HỆ<i
                                    class="fa fa-spinner fa-spin fa-3x fa-fw loadingSending" style="
    font-size: 15px;display: none"></i><i
                                    class="fa fa-check-circle successSending" style="display: none"
                                    aria-hidden="true"></i></button>


                        <span style="display: none">Chúng tôi đã nhận được mail và sẽ phản hồi quý khách trong 24h. Xin cảm ơn.</span>
                    </div>
                </div>
            </div>
        </div>

        {{--PHAAFN THONG TIN LINE HE--}}

        <div class="col-md-6 text-center">
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
            <img src="images/loiph/logosgr365.png" alt="" style="width: 280px">

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

        {{--phần hình phía dưới--}}
        <div class="col-md-12 mt-4">
            <img src="images/loiph/imagesb.png" alt="" style="width: 100%">
        </div>
    </div>
</div>

</div>
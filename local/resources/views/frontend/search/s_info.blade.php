<div id="s_info">
    @if(count($data['products'])!==0)
        @foreach($data['products'] as $key=>$item)
            <div class="col-md-12 one-product p-0">
                <div class="row">
                    <div class="col-md-5 ">
                        <a href="{{URL::to('danh-muc/'.$item->path)}}">{{ Html::image($item->image,'',array('class'=>'img-one-product')) }}</a>
                    </div>
                    <div class="col-md-7 info card">
                        <h3><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></h3>
                        <p class="address">{{$item->location}}</p>
                        <div class="card-body">
                            <span class="description">Proportioned rooms of the original house include a sitting room with fireplace and two bedrooms one with a shower room and fireplace.</span>
                        </div>
                        <div class="card-footer">
                            <div class="more-info">
                                <div class="row">
                                    <div class="col-md-5">
                                        Diện Tích: {{$item->area}} m2
                                    </div>
                                    <div class="col-md-7">
                                        Giá:
                                        @if($item->price!==0)
                                            {{$item->price}} {{$item->unit->name}}
                                        @else
                                            Liên Hệ
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-md-12 no-result  p-0">
            <h3>Không Có Kết Quả</h3>
        </div>
    @endif
</div>
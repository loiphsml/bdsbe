<div id="h_product">
    <div class="container">
        <h3 class="title">
            Danh sách bất động sản
        </h3>
        <div class="row">
            @foreach($data['products'] as $key=>$item)
                <div class="col-md-4 mb-4">
                    <div class="card one-product h-100">
                        <a href="{{URL::to('danh-muc/'.$item->path)}}">
                            {{ Html::image($item->image,'',array('class'=>'img-one-product')) }}
                        </a>
                        <div class="card-body">
                            <h2 class="title card-title"><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></h2>
                        </div>
                        <div class="info card-footer">
                            <ul class="info-top">
                                <li><i class="fas fa-expand"></i> {{$item->area}} m2</li>
                                @if($item->price!==0)
                                    <li><i class="fas fa-dollar-sign"></i><span>{{$item->price}}{{$item->unit->name}}</span></li>
                                @else
                                    <li><i class="fas fa-dollar-sign"></i><span>Liên Hệ</span></li>
                                @endif
                            </ul>
                            <hr>
                            <div class="info-bottom">
                                <i class="fas fa-map-marker"></i>{{$item->location}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@extends('layout.app1')
@section('content')
    <div class="sec-01__wrapper">
        <div class="sec-01__wrapper">
            <div class="sec-01__inner">
                <picture class="sec-01__flow">
                    <source srcset="./img/flow-02-pc.png" media="(min-width: 768px)">
                    <img src="./img/flow-02.png" alt="">
                </picture>
                <form action="{{ route('checkPage2') }}" method="post">
                    @csrf
                    <div class="sec-01__box">
                        <div class="sec-01__box-inner">
                            <div class="sec-01__box-header">
                                <span class="sec-01__box-header-01">質問5</span>
                                <span class="sec-01__box-header-02">
                                    当院のサービス向上のため患者様のお声をお聞かせいただければと思います。<br>
                                    さらに当院に期待することや不満に感じた点など、なんでも構いませんのでよろしければご記入ください
                                </span>
                            </div>
                            <div class="sec-01__box-body">
                                <textarea name="question5" id="" cols="30" rows="10" class="form-control text-area-01"
                                    placeholder="お気づきの点などご自由にご記入ください。"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-end"><input type="submit" id="confirmBtn" name="btn_submit" class="u__btn"
                            value="次のページ"></div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layout.app1')
@section('content')
<div class="sec-01__wrapper">
    <div class="sec-01__inner">
        <picture class="sec-01__flow">
            <source srcset="./img/flow-02-pc.png" media="(min-width: 768px)">
            <img src="./img/flow-02.png" alt="">
        </picture>
        <div>
            <p class="lead-02">
                <span class="lead-02-big">宜しければ、Google上で<span class="abr">当院の評価を頂けないでしょうか？</span></span><br class="spover-only">皆様の評価が私達の励みとなり、<span class="abr">ご意見、ご投稿は、医療サービスの向上に繋がります。</span><br class="spover-only">
                是非、皆様のご意見をお待ちしております。
            </p>
        </div>
        <form action="{{route('checkGoogle')}}" method="post">
            @csrf
            <div class="sec-01__box">
                <div class="sec-01__box-inner">
                    <div class="sec-01__box-header">
                        <span class="sec-01__box-header-01">質問</span>
                        <span class="sec-01__box-header-02">
                            Googleで評価
                        </span>
                    </div>
                    <div class="sec-01__box-body sec-01__box-body-02">
                        <div class="btn-flex-01">
                            <div class="u__btn-03-area">
                                <input type="radio" name="googleReview" value="1" id="googleReview1" class="gender-btn" checked>
                                <label class="u__btn-03" for="googleReview1">
                                    評価しても良い。
                                </label>
                            </div>
                            <div class="u__btn-03-area">
                                <input type="radio" name="googleReview" value="0" id="googleReview2" class="gender-btn">
                                <label class="u__btn-03" for="googleReview2">
                                    評価しない。
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <input type="submit" id="confirmBtn" name="btn_checkGoogle" class="u__btn" value="次のページ">
        </form>
    </div>
</div>
@endsection

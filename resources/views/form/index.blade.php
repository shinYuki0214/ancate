@extends('layout.app1')
@section('content')
    <div class="sec-01__wrapper">
        <div class="sec-01__inner">
            <picture class="sec-01__flow">
                <source srcset="./img/flow-01-pc.png" media="(min-width: 768px)">
                <img src="./img/flow-01.png" alt="">
            </picture>

            <form action="{{route('checkPage1')}}" method="post">
                @csrf
                <div class="sec-01__box">
                    <div class="sec-01__box-inner">
                        <div class="sec-01__box-header">
                            <span class="sec-01__box-header-01">質問1</span>
                            <span class="sec-01__box-header-02">
                                待ち時間はいかがでしたか？
                            </span>
                        </div>
                        <div class="sec-01__box-body">
                            <div id="app1">
                                <star-rating v-model="rating" :show-rating="false"></star-rating>
                                <span class="rate-message">@{{ ratingMessage() }}</span>
                                <input type="hidden" name="question1" :value="rating" id="question1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-01__box">
                    <div class="sec-01__box-inner">
                        <div class="sec-01__box-header">
                            <span class="sec-01__box-header-01">質問2</span>
                            <span class="sec-01__box-header-02">
                                説明は分かりやすかったですか？
                            </span>
                        </div>
                        <div class="sec-01__box-body">
                            <div id="app2">
                                <star-rating v-model="rating" :show-rating="false"></star-rating>
                                <span class="rate-message">@{{ ratingMessage() }}</span>
                                <input type="hidden" name="question2" :value="rating" id="question2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-01__box">
                    <div class="sec-01__box-inner">
                        <div class="sec-01__box-header">
                            <span class="sec-01__box-header-01">質問3</span>
                            <span class="sec-01__box-header-02">
                                術者による治療の痛みはありましたか？
                            </span>
                        </div>
                        <div class="sec-01__box-body">
                            <div id="app3">
                                <star-rating v-model="rating" :show-rating="false"></star-rating>
                                <span class="rate-message">@{{ ratingMessage() }}</span>
                                <input type="hidden" name="question3" :value="rating" id="question3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-01__box">
                    <div class="sec-01__box-inner">
                        <div class="sec-01__box-header">
                            <span class="sec-01__box-header-01">質問4</span>
                            <span class="sec-01__box-header-02">
                                これまで治療を受けられた総合的な満足度はいかがでしたか？
                            </span>
                        </div>
                        <div class="sec-01__box-body">
                            <div id="app4">
                                <star-rating v-model="rating" :show-rating="false"></star-rating>
                                <span class="rate-message">@{{ ratingMessage() }}</span>
                                <input type="hidden" name="question4" :value="rating" id="question4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end"><input type="submit" id="confirmBtn" name="btn_confirm" class="u__btn"
                        value="次のページ"></div>
            </form>
        </div>
    </div>
@endsection

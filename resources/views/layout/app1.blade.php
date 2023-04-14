<!DOCTYPE html>
<html lang="ja">

<head>
    <meta name="robots" content="noindex, nofollow">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    @vite(['resources/css/app.scss', 'resources/js/app.js', 'resources/css/style.css'])
</head>

<body>

    <div class="d-flex text-center form-mv">
        <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
            <div class="">
                <figure class="title-svg">
                    <svg viewBox="0 0 163 129" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M123.9 128.3L55.2 102.5C54.3 102.2 53.8 101.1 54.2 100.2L90.7 3.09997C91 2.19997 92.1 1.69997 93 2.09997L161.7 27.9C162.6 28.2 163.1 29.3 162.7 30.2L126.2 127.3C125.9 128.2 124.9 128.7 123.9 128.3Z"
                            fill="#2E384C" />
                        <path d="M92.7801 6.69485L57.6405 100.108L123.722 124.966L158.862 31.5531L92.7801 6.69485Z"
                            fill="white" />
                        <path d="M110.6 15.7999L110.3 14.7L140.4 25.9999L139.4 26.5999L110.6 15.7999Z" fill="#CCCCCC" />
                        <path
                            d="M140 17.9L132.2 15C133.1 12.7 131.9 10.1 129.6 9.20001C127.3 8.30001 124.7 9.49998 123.8 11.8L116 8.89999C114.3 8.29999 112.5 9.09998 111.9 10.8L110.4 14.7L140.4 26L141.9 22.1C142.4 20.4 141.6 18.5 140 17.9Z"
                            fill="#DCDCDC" />
                        <path
                            d="M128.5 11.9C129.6 12.3 130.1 13.4 129.9 14.5C130 14.4 130 14.3 130 14.2C130.4 13 129.9 11.7 128.7 11.3C127.5 10.9 126.2 11.5 125.8 12.6C125.8 12.7 125.7 12.8 125.7 12.9C126.3 12 127.5 11.5 128.5 11.9Z"
                            fill="#B3B3B3" />
                        <path
                            d="M127.2 15.5C128.3 15.9 129.4 15.4 130 14.5C130.2 13.4 129.7 12.3 128.6 11.9C127.5 11.5 126.4 12 125.8 12.9C125.5 14 126.1 15.1 127.2 15.5Z"
                            fill="#CCCCCC" />
                        <path
                            d="M93.2 34.1999C92.5 33.9999 92.2 33.1999 92.5 32.4999L96.1 22.8999C96.3 22.1999 97.1 21.8999 97.8 22.1999L107.4 25.7999C108.1 25.9999 108.4 26.7999 108.1 27.4999L104.5 37.0999C104.3 37.7999 103.5 38.0999 102.8 37.7999L93.2 34.1999Z"
                            fill="#E4E4E4" />
                        <path
                            d="M98.3 32.7L96.4 28.5C96.2 28.2 96.4 27.8 96.7 27.6C97 27.4 97.4 27.6 97.6 27.9L99 30.9L104.2 28.6C104.5 28.4 104.9 28.6 105.1 28.9C105.3 29.2 105.1 29.6 104.8 29.8L98.3 32.7Z"
                            fill="white" />
                        <path
                            d="M85.3 55.2999C84.6 55.0999 84.3 54.2999 84.6 53.5999L88.2 43.9999C88.4 43.2999 89.2 42.9999 89.9 43.2999L99.5 46.8999C100.2 47.0999 100.5 47.8999 100.2 48.5999L96.6 58.1999C96.4 58.8999 95.6 59.1999 94.9 58.8999L85.3 55.2999Z"
                            fill="#E4E4E4" />
                        <path
                            d="M90.4 53.8L88.5 49.6C88.3 49.3 88.5 48.9 88.8 48.7C89.1 48.5 89.5 48.7 89.7 49L91.1 52L96.3 49.7C96.6 49.5 97 49.7 97.2 50C97.4 50.3 97.2 50.7 96.9 50.9L90.4 53.8Z"
                            fill="white" />
                        <path
                            d="M77.4 76.2999C76.7 76.0999 76.4 75.2999 76.7 74.5999L80.3 64.9999C80.5 64.2999 81.3 63.9999 82 64.2999L91.6 67.8999C92.3 68.0999 92.6 68.8999 92.3 69.5999L88.7 79.1999C88.5 79.8999 87.7 80.1999 87 79.8999L77.4 76.2999Z"
                            fill="#E4E4E4" />
                        <path
                            d="M82.5 74.8L80.6 70.6C80.4 70.3 80.6 69.9 80.9 69.7C81.2 69.5 81.6 69.7 81.8 70L83.2 73L88.4 70.7C88.7 70.5 89.1 70.7 89.3 71C89.5 71.3 89.3 71.7 89 71.9L82.5 74.8Z"
                            fill="white" />
                        <path
                            d="M69.5 97.2999C68.8 97.0999 68.5 96.2999 68.8 95.5999L72.4 85.9999C72.6 85.2999 73.4 84.9999 74.1 85.2999L83.7 88.8999C84.4 89.0999 84.7 89.8999 84.4 90.5999L80.8 100.2C80.6 100.9 79.8 101.2 79.1 100.9L69.5 97.2999Z"
                            fill="#E4E4E4" />
                        <path d="M111.03 33.3167L110.678 34.2527L143.718 46.6818L144.071 45.7458L111.03 33.3167Z"
                            fill="#DCDCDC" />
                        <path d="M109.982 36.0963L109.63 37.0323L142.671 49.4615L143.023 48.5255L109.982 36.0963Z"
                            fill="#DCDCDC" />
                        <path d="M108.97 38.7823L108.618 39.7183L141.659 52.1474L142.011 51.2114L108.97 38.7823Z"
                            fill="#DCDCDC" />
                        <path d="M112.869 28.5474L111.953 30.981L128.801 37.3188L129.717 34.8852L112.869 28.5474Z"
                            fill="#DCDCDC" />
                        <path d="M103.114 54.3223L102.762 55.2583L135.803 67.6874L136.155 66.7514L103.114 54.3223Z"
                            fill="#DCDCDC" />
                        <path d="M102.066 57.1018L101.714 58.0378L134.755 70.467L135.107 69.531L102.066 57.1018Z"
                            fill="#DCDCDC" />
                        <path d="M101.054 59.7879L100.702 60.7239L133.743 73.153L134.095 72.217L101.054 59.7879Z"
                            fill="#DCDCDC" />
                        <path d="M104.953 49.5528L104.038 51.9865L120.886 58.3243L121.801 55.8906L104.953 49.5528Z"
                            fill="#DCDCDC" />
                        <path d="M95.1977 75.3279L94.8456 76.2639L127.886 88.6931L128.239 87.7571L95.1977 75.3279Z"
                            fill="#DCDCDC" />
                        <path d="M94.1503 78.1075L93.7982 79.0435L126.839 91.4726L127.191 90.5366L94.1503 78.1075Z"
                            fill="#DCDCDC" />
                        <path d="M93.2317 80.8286L92.8796 81.7646L125.92 94.1938L126.273 93.2578L93.2317 80.8286Z"
                            fill="#DCDCDC" />
                        <path d="M97.0371 70.5585L96.1217 72.9921L112.97 79.3299L113.885 76.8963L97.0371 70.5585Z"
                            fill="#DCDCDC" />
                        <path d="M87.3402 96.4622L86.9881 97.3982L120.029 109.827L120.381 108.891L87.3402 96.4622Z"
                            fill="#DCDCDC" />
                        <path d="M86.328 99.1484L85.9759 100.084L119.017 112.513L119.369 111.577L86.328 99.1484Z"
                            fill="#DCDCDC" />
                        <path d="M85.3157 101.834L84.9636 102.77L118.004 115.199L118.357 114.263L85.3157 101.834Z"
                            fill="#DCDCDC" />
                        <path d="M89.1209 91.5641L88.2055 93.9977L105.053 100.335L105.969 97.9019L89.1209 91.5641Z"
                            fill="#DCDCDC" />
                        <path
                            d="M74.6 95.8L72.7 91.6C72.5 91.3 72.7 90.9 73 90.7C73.3 90.5 73.7 90.7 73.9 91L75.3 94L80.5 91.7C80.8 91.5 81.2 91.7 81.4 92C81.6 92.3 81.4 92.7 81.1 92.9L74.6 95.8Z"
                            fill="white" />
                        <path
                            d="M109.2 101.3L40.6 127.6C39.7 128 38.7 127.5 38.3 126.6L1.1 29.7C0.700004 28.8 1.2 27.8 2.1 27.4L70.7 1.09997C71.6 0.699973 72.6 1.19997 73 2.09997L110.2 99C110.6 99.9 110.2 100.9 109.2 101.3Z"
                            fill="#2E384C" />
                        <path d="M71.1154 5.761L5.19623 31.0428L40.9346 124.226L106.854 98.9442L71.1154 5.761Z"
                            fill="white" />
                        <path d="M24.6 25.9999L23.6 25.2999L53.6 13.7999L53.3 14.9999L24.6 25.9999Z" fill="#CCCCCC" />
                        <path
                            d="M47.9 8.09997L40.1 11.1C39.2 8.79997 36.6 7.59996 34.3 8.49996C32 9.39996 30.8 11.9999 31.7 14.2999L23.9 17.2999C22.3 17.9 21.4 19.8 22.1 21.4L23.6 25.2999L53.5 13.7999L52 9.89996C51.4 8.29996 49.6 7.49997 47.9 8.09997Z"
                            fill="#DCDCDC" />
                        <path
                            d="M35.4 11.2C36.5 10.8 37.6 11.2 38.2 12.2C38.2 12.1 38.1 12 38.1 11.9C37.7 10.7 36.4 10.2 35.2 10.6C34 11 33.5 12.3 33.9 13.5C33.9 13.6 34 13.7 34 13.8C33.8 12.7 34.3 11.6 35.4 11.2Z"
                            fill="#B3B3B3" />
                        <path
                            d="M36.8 14.7999C37.9 14.3999 38.4 13.2999 38.2 12.1999C37.7 11.1999 36.5 10.7999 35.4 11.1999C34.3 11.5999 33.8 12.6999 34 13.7999C34.5 14.6999 35.7 15.1999 36.8 14.7999Z"
                            fill="#CCCCCC" />
                        <path
                            d="M23.8 51.2999C23.1 51.5999 22.4 51.1999 22.1 50.5999L18.4 40.9999C18.1 40.2999 18.5 39.5999 19.1 39.2999L28.7 35.5999C29.4 35.2999 30.1 35.6999 30.4 36.2999L34.1 45.8999C34.4 46.5999 34 47.2999 33.4 47.5999L23.8 51.2999Z"
                            fill="#B1B1B1" />
                        <path
                            d="M26.7 46.7999L22.5 44.8999C22.2 44.6999 22 44.2999 22.2 43.9999C22.4 43.6999 22.8 43.5 23.1 43.7L26.1 44.9999L28.4 39.7999C28.6 39.4999 29 39.2999 29.3 39.4999C29.6 39.6999 29.8 40.0999 29.6 40.3999L26.7 46.7999Z"
                            fill="white" />
                        <path
                            d="M31.8 72.2999C31.1 72.5999 30.4 72.1999 30.1 71.5999L26.4 61.9999C26.1 61.2999 26.5 60.5999 27.1 60.2999L36.7 56.5999C37.4 56.2999 38.1 56.6999 38.4 57.2999L42.1 66.8999C42.4 67.5999 42 68.2999 41.4 68.5999L31.8 72.2999Z"
                            fill="#B1B1B1" />
                        <path
                            d="M34.7 67.7999L30.5 65.8999C30.2 65.6999 30 65.2999 30.2 64.9999C30.4 64.6999 30.8 64.5 31.1 64.7L34.1 65.9999L36.4 60.7999C36.6 60.4999 37 60.2999 37.3 60.4999C37.6 60.6999 37.8 61.0999 37.6 61.3999L34.7 67.7999Z"
                            fill="white" />
                        <path
                            d="M39.9 93.2999C39.2 93.5999 38.5 93.1999 38.2 92.5999L34.5 82.9999C34.2 82.2999 34.6 81.5999 35.2 81.2999L44.8 77.5999C45.5 77.2999 46.2 77.6999 46.5 78.2999L50.2 87.8999C50.5 88.5999 50.1 89.2999 49.5 89.5999L39.9 93.2999Z"
                            fill="#B1B1B1" />
                        <path
                            d="M42.7 88.7L38.5 86.8C38.2 86.6 38 86.2 38.2 85.9C38.4 85.6 38.8 85.4 39.1 85.6L42.1 86.9L44.4 81.7C44.6 81.4 45 81.2 45.3 81.4C45.6 81.6 45.8 82 45.6 82.3L42.7 88.7Z"
                            fill="white" />
                        <path
                            d="M47.9 114.2C47.2 114.5 46.5 114.1 46.2 113.5L42.5 103.9C42.2 103.2 42.6 102.5 43.2 102.2L52.8 98.5C53.5 98.2 54.2 98.6 54.5 99.2L58.2 108.8C58.5 109.5 58.1 110.2 57.5 110.5L47.9 114.2Z"
                            fill="#B1B1B1" />
                        <path d="M69.5463 26.1933L36.5867 38.8342L36.9448 39.7679L69.9044 27.127L69.5463 26.1933Z"
                            fill="#DCDCDC" />
                        <path d="M70.5502 28.9051L37.5906 41.546L37.9487 42.4797L70.9083 29.8388L70.5502 28.9051Z"
                            fill="#DCDCDC" />
                        <path d="M71.5542 31.6169L38.5946 44.2578L38.9527 45.1915L71.9123 32.5506L71.5542 31.6169Z"
                            fill="#DCDCDC" />
                        <path d="M51.5492 27.646L34.7426 34.0918L35.6737 36.5194L52.4803 30.0736L51.5492 27.646Z"
                            fill="#DCDCDC" />
                        <path d="M77.5626 47.2051L44.603 59.8461L44.9611 60.7798L77.9207 48.1388L77.5626 47.2051Z"
                            fill="#DCDCDC" />
                        <path d="M78.5666 49.9169L45.607 62.5579L45.9651 63.4916L78.9247 50.8506L78.5666 49.9169Z"
                            fill="#DCDCDC" />
                        <path d="M79.6639 52.5928L46.7043 65.2338L47.0624 66.1675L80.022 53.5265L79.6639 52.5928Z"
                            fill="#DCDCDC" />
                        <path d="M59.5655 48.658L42.7589 55.1038L43.69 57.5314L60.4966 51.0856L59.5655 48.658Z"
                            fill="#DCDCDC" />
                        <path d="M85.5788 68.2171L52.6192 80.858L52.9773 81.7917L85.9369 69.1508L85.5788 68.2171Z"
                            fill="#DCDCDC" />
                        <path d="M86.6761 70.893L53.7165 83.5339L54.0746 84.4676L87.0342 71.8267L86.6761 70.893Z"
                            fill="#DCDCDC" />
                        <path d="M87.6801 73.6048L54.7205 86.2457L55.0786 87.1794L88.0382 74.5385L87.6801 73.6048Z"
                            fill="#DCDCDC" />
                        <path d="M67.6394 69.5405L50.8328 75.9863L51.7638 78.4139L68.5704 71.9681L67.6394 69.5405Z"
                            fill="#DCDCDC" />
                        <path d="M93.6527 89.0998L60.6931 101.741L61.0512 102.674L94.0108 90.0335L93.6527 89.0998Z"
                            fill="#DCDCDC" />
                        <path d="M94.6566 91.8116L61.697 104.453L62.0551 105.386L95.0147 92.7453L94.6566 91.8116Z"
                            fill="#DCDCDC" />
                        <path d="M95.6606 94.5233L62.701 107.164L63.0591 108.098L96.0187 95.457L95.6606 94.5233Z"
                            fill="#DCDCDC" />
                        <path d="M75.6556 90.5524L58.849 96.9982L59.78 99.4258L76.5866 92.98L75.6556 90.5524Z"
                            fill="#DCDCDC" />
                        <path
                            d="M50.8 109.7L46.6 107.8C46.3 107.6 46.1 107.2 46.3 106.9C46.5 106.6 46.9 106.4 47.2 106.6L50.2 107.9L52.5 102.7C52.7 102.4 53.1 102.2 53.4 102.4C53.7 102.6 53.9 103 53.7 103.3L50.8 109.7Z"
                            fill="white" />
                    </svg>
                </figure>

                <h1 class="title">
                    <span class="title-txt-01">アンケート</span>
                    <span class="title-txt-02"><span class="title-txt-02-point">Q</span>uestionnaire</span>
                </h1>
                @if (isset($topage))
                    <p class="lead-01">
                        この度はご来院いただきありがとうございました。<br class="spover-only">
                        より良いクリニックを作るために、<br class="spover-only-02">お気づきの点がございましたら<br
                            class="spover-only-02">是非ご意見・ご感想をお聞かせください。</span>
                    <div class="lead-01-small-area"><span
                            class="lead-01-small">ご意見は匿名で処理され、当院の改善のために使用させていただきます。</span>
                    </div>
                    </p>
                @endif
            </div>
        </div>
    </div>
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
    <script src="https://unpkg.com/vue-star-rating@1.6.3/dist/star-rating.min.js"></script>
    <script>
        const StarRating = window.VueStarRating.default;
        Vue.component('star-rating', StarRating);
        let app1 = new Vue({
            el: '#app1',
            data: {
                rating: 0
            },
            methods: {
                ratingMessage: function() {
                    if (this.rating == 0) {
                        return "評価をお願いします。"
                    }
                    if (this.rating == 1) {
                        return "とても不満"
                    }
                    if (this.rating == 2) {
                        return "やや不満"
                    }
                    if (this.rating == 3) {
                        return "どちらとも言えない"
                    }
                    if (this.rating == 4) {
                        return "おおむね満足している"
                    }
                    if (this.rating == 5) {
                        return "とても満足している"
                    }
                }
            },
        });
        let app2 = new Vue({
            el: '#app2',
            data: {
                rating: 0
            },
            methods: {
                ratingMessage: function() {
                    if (this.rating == 0) {
                        return "評価をお願いします。"
                    }
                    if (this.rating == 1) {
                        return "とても不満"
                    }
                    if (this.rating == 2) {
                        return "やや不満"
                    }
                    if (this.rating == 3) {
                        return "どちらとも言えない"
                    }
                    if (this.rating == 4) {
                        return "おおむね満足している"
                    }
                    if (this.rating == 5) {
                        return "とても満足している"
                    }
                }
            },
        });
        let app3 = new Vue({
            el: '#app3',
            data: {
                rating: 0
            },
            methods: {
                ratingMessage: function() {
                    if (this.rating == 0) {
                        return "評価をお願いします。"
                    }
                    if (this.rating == 1) {
                        return "とても不満"
                    }
                    if (this.rating == 2) {
                        return "やや不満"
                    }
                    if (this.rating == 3) {
                        return "どちらとも言えない"
                    }
                    if (this.rating == 4) {
                        return "おおむね満足している"
                    }
                    if (this.rating == 5) {
                        return "とても満足している"
                    }
                }
            },
        });
        let app4 = new Vue({
            el: '#app4',
            data: {
                rating: 0
            },
            methods: {
                ratingMessage: function() {
                    if (this.rating == 0) {
                        return "評価をお願いします。"
                    }
                    if (this.rating == 1) {
                        return "とても不満"
                    }
                    if (this.rating == 2) {
                        return "やや不満"
                    }
                    if (this.rating == 3) {
                        return "どちらとも言えない"
                    }
                    if (this.rating == 4) {
                        return "おおむね満足している"
                    }
                    if (this.rating == 5) {
                        return "とても満足している"
                    }
                }
            },
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
        integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            let question1 = $('#question1');
            let question2 = $('#question2');
            let question3 = $('#question3');
            let question4 = $('#question4');
            let confirmBtn = $('#confirmBtn');
            $(confirmBtn).click(function() {

                if (question1.val() === '0') {
                    alert('質問1は必須項目です。');
                    question1.focus();
                    return false;
                }
                if (question2.val() === '0') {
                    alert('質問2は必須項目です。')
                    question2.focus();
                    return false;
                }
                if (question3.val() === '0') {
                    alert('質問3は必須項目です。')
                    question3.focus();
                    return false;
                }
                if (question4.val() === '0') {
                    alert('質問4は必須項目です。')
                    question4.focus();
                    return false;
                }
                if (question1.val() !== '0' && question2.val() !== '0' && question3.val() !== '0' &&
                    question4.val() !== '0') {

                }
            });

        });
    </script>
</body>

</html>

@extends('layouts.app')

@section('content')

    <head>
        <style type="text/css">
            .header {
                border-radius: 20px 20px 0px 0px;
                padding: 10px 0px;
                background: black;
                color: #fff;
                width: 100%;
                display: flex;
                align-content: center;
                justify-content: center;
            }

            .faq-item {
                margin-bottom: 40px;
                margin-top: 40px;
            }

            .faq-body {
                display: none;
                margin-top: 30px;
            }

            .faq-wrapper {
                width: 75%;
                margin: 0 auto;
            }

            .faq-inner {
                padding: 30px;
                background: rgb(187, 232, 236);
            }

            .faq-plus {
                float: right;
                font-size: 1.4em;
                line-height: 1em;
                cursor: pointer;
            }

            hr {
                background-color: #9b9b9b;
            }
        </style>
    </head>
    <div class="container">
        <div class="row">
            <div class="faq-wrapper">
                <div class="header">
                    <h1>FAQs</h1>
                </div>
                <div class="faq-inner">
                    <div class="faq-item">
                        <h3>
                            What is your clinic operation time?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            Our operation is 9am-5pm, Monday to Sunday.
                        </div>
                    </div>
                    <hr>
                    <div class="faq-item">
                        <h3>
                            Can I book an appointment today?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            No, you cannot book an appointment today. You can only book an appointment one day in advance.
                        </div>
                    </div>
                    <hr>
                    <div class="faq-item">
                        <h3>
                            How can I contact your clinic if I have any problem?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            You can contact us using email or phone, you can find information in our about us page.
                        </div>
                    </div>
                    <hr>
                    {{-- <div class="faq-item">
          <h3>
            What is an FAQ page ?
            <span class="faq-plus">&plus;</span>
          </h3>
          <div class="faq-body">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </div>
        </div>
        <hr>
        <div class="faq-item">
          <h3>
            What is an FAQ page ?
            <span class="faq-plus">&plus;</span>
          </h3>
          <div class="faq-body">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </div>
        </div> --}}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(".faq-plus").on('click', function() {
            $(this).parent().parent().find('.faq-body').slideToggle();
        });
    </script>
@endsection

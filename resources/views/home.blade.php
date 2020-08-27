@extends('layouts.master')

@section('content')

    <section class="ls ms section_padding_50">
        <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-8 col-lg-10">
                    
            </div>

   
           <div class="col-md-2 col-sm-4 col-lg-2">
                <a class="theme_button color1" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        
                <i class="fa fa-external-link"></i> LOG OUT</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
            </div>

        </div>
         <div class="row">

        <div class="col-sm-6">
            <h3>Transmission</h3>
            <div class="panel-group" id="accordion1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                <i class="fa fa-envelope-o highlight"></i>
                                Web Design
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor!
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
                                <i class="fa fa-envelope-o highlight"></i>
                                Photography
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facere doloremque ut dolores laudantium nihil at, repudiandae est numquam fuga tempora totam sequi quidem saepe officiis sint beatae, magni fugit.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
                                <i class="fa fa-envelope-o highlight"></i>
                                3D Modeling
                            </a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse4" class="collapsed">
                                <i class="fa fa-envelope-o highlight"></i>
                                Developing
                            </a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-6">
            <h3>Reception</h3>
            <div class="panel-group" id="accordion2">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                                Lorem Ipsum
                            </a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/recent_post01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6" class="collapsed">
                                Sit Amet
                            </a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/recent_post02.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7" class="collapsed">
                                Sed Diam
                            </a>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/recent_post01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse8" class="collapsed">
                                Eirmod Tempor
                            </a>
                        </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/recent_post02.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        </div>
    </section>
@endsection

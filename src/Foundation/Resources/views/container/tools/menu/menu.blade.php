@extends('dashboard::layouts.dashboard')


@section('title','Меню')
@section('description','Верхнее')


@section('navbar')
    <div class="col-sm-6 col-xs-12 text-right">


        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </li>

            <li>
                <button class="btn btn-link menu-save"><i
                            class="ion-ios-plus-outline fa fa-2x"></i></button>
            </li>

        </ul>

    </div>
@stop



@section('content')


    <div id="menu-vue" class="wrapper-md">


        <div class="row">
            <div class="col-sm-4">

                <div class="wrapper b-b bg">
                    <button class="btn btn-sm btn-default pull-right visible-sm visible-xs"><i class="fa fa-bars"></i>
                    </button>
                    <a class="btn btn-sm btn-danger font-bold" v-on:click="create()">Универсальный элемент</a>
                </div>


            </div>
            <div class="col-sm-8">
                <div class="dd">
                    <ol class="dd-list">

                        {{--
                        <li class="dd-item dd3-item" data-id="13" data-sort="1" data-label="" data-slug="" data-robot="" data-style="" data-target="">
                            <div class="dd-handle dd3-handle">Drag</div>
                            <div class="dd3-content">Элемент 13</div>
                            <div class="edit"><i class="fa fa-user"></i></div>
                        </li>
                        <li class="dd-item dd3-item" data-id="14" data-sort="1" data-label="" data-slug="" data-robot="" data-style="" data-target="">
                            <div class="dd-handle dd3-handle">Drag</div>
                            <div class="dd3-content">Элемент 14</div>
                        </li>
                        <li class="dd-item dd3-item" data-id="15" data-sort="1" data-label="" data-slug="" data-robot="" data-style="" data-target="">
                            <div class="dd-handle dd3-handle">Drag</div>
                            <div class="dd3-content">Элемент 15</div>
                            <ol class="dd-list">
                                <li class="dd-item dd3-item" data-id="16" data-sort="1" data-label="" data-slug="" data-robot="" data-style="" data-target="">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Элемент 16</div>
                                </li>
                                <li class="dd-item dd3-item" data-id="17" data-sort="1" data-label="" data-slug="" data-robot="" data-style="" data-target="">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Элемент 17</div>
                                </li>
                                <li class="dd-item dd3-item" data-id="18" data-sort="1" data-label="" data-slug="" data-robot="" data-style="" data-target="">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Элемент 18</div>
                                </li>
                            </ol>
                        </li>
                  --}}
                    </ol>
                </div>
            </div>

        </div>


        <div class="modal fade" id="menuEdit" tabindex="-1" role="dialog">
            <form class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" v-html="label"></h4>
                    </div>
                    <div class="modal-body">


                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control" v-model="label" placeholder="О нас">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" v-model="slug" placeholder="/about">
                        </div>
                        <div class="form-group">
                            <label>Разрешить поисковым роботам переход</label>

                            <select class="form-control" v-model="robot">
                                <option value="follow" selected>follow</option>
                                <option value="nofollow">nofollow</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Класс</label>
                            <input type="text" class="form-control" v-model="style" placeholder="/about">
                        </div>
                        <div class="form-group">
                            <label>Link Target</label>
                            <select class="form-control" v-model="target">
                                <option value="_self" selected>Загружает страницу в текущее окно.</option>
                                <option value="_blank">Загружает страницу в новое окно браузера.</option>
                            </select>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" v-on:click="remove()" class="btn btn-default" data-dismiss="modal">Удалить
                            элемент
                        </button>
                        <button type="button" v-on:click="save()" class="btn btn-primary">Сохранить изменения</button>
                    </div>
                </div>
            </form>
        </div>


        <div class="modal fade" id="menuCreate" tabindex="-1" role="dialog">
            <form class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" v-html="label"></h4>
                    </div>
                    <div class="modal-body">


                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control" v-model="label" placeholder="О нас">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" v-model="slug" placeholder="/about">
                        </div>
                        <div class="form-group">
                            <label>Разрешить поисковым роботам переход</label>

                            <select class="form-control" v-model="robot">
                                <option value="follow" selected>follow</option>
                                <option value="nofollow">nofollow</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Класс</label>
                            <input type="text" class="form-control" v-model="style" placeholder="/about">
                        </div>
                        <div class="form-group">
                            <label>Link Target</label>
                            <select class="form-control" v-model="target">
                                <option value="_self" selected>Загружает страницу в текущее окно.</option>
                                <option value="_blank">Загружает страницу в новое окно браузера.</option>
                            </select>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" v-on:click="add()" class="btn btn-primary">Сохранить изменения</button>
                    </div>
                </div>
            </form>
        </div>


    </div>









    <script>
        window.onload = function () {

            menu = new Vue({
                el: '#menu-vue',
                data: {
                    count: 0,
                    id: '',
                    label: '',
                    slug: '',
                    robot: '',
                    style: '',
                    target: '',
                },
                methods: {
                    load: function (object) {
                        this.id = object.id;
                        this.label = object.label;
                        this.slug = object.slug;
                        this.robot = object.robot;
                        this.style = object.style;
                        this.target = object.target;
                    },
                    create: function () {
                        $('#menuCreate').modal('show');
                    },
                    add: function () {
                        $(".dd > .dd-list").append("<li class='dd-item dd3-item' data-id='" + this.count + "'> " +
                            "<div class='dd-handle dd3-handle'>Drag</div><div class='dd3-content'>" + this.label + "</div> " +
                            "<div class='edit'><i class='fa fa-user'></i></div>" +
                            "</li>");


                        $('li[data-id=' + this.count + ']').data({
                            'label': this.label,
                            'slug': this.slug,
                            'robot': this.robot,
                            'style': this.style,
                            'target': this.target,
                        });

                        this.count--;
                        this.clear();
                        $('#menuCreate').modal('hide');
                    },
                    edit: function (element) {
                        var data = $(element).parent().data();
                        data.label = $(element).prev().text();

                        $('#menuEdit').modal('show');

                        this.load(data);
                    },
                    save: function () {


                        $('li[data-id=' + this.id + ']').data({
                            'label': this.label,
                            'slug': this.slug,
                            'robot': this.robot,
                            'style': this.style,
                            'target': this.target,
                        });
                        $('li[data-id=' + this.id + '] > .dd3-content').html(this.label);


                        this.clear();
                        $('#menuEdit').modal('hide');

                    },
                    remove: function () {
                        $('li[data-id=' + this.id + ']').remove();
                        $('#menuEdit').modal('hide');
                        this.clear();
                    },
                    clear: function () {
                        this.label = '';
                        this.slug = '';
                        this.robot = '';
                        this.style = '';
                        this.target = '';
                    },
                    send: function () {
                        //Отправка данных
                        this.$http.update('/dashboard/tools/menu').then(function () {

                        });
                    }

                }

            });


            $('.dd').nestable({});

            $('.dd-item').each(function (i, item) {
                $(item).data('sort', i);
            });

            $('.dd').on('click', '.edit', function () {
                menu.edit(this);
            });


            $('.menu-save').click(function () {
                menu.send();
            });


        };
    </script>

@stop
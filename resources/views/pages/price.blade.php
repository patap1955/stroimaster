@extends('layouts.master')
@section('title', $page->title)
@section('description', $page->description)
@section('keywords', $page->keywords)
@section('content')
    <main class="col-xs-12" role="main">
        <div class="row">
            <div class="col-xs-12">
                <article class="post-2573 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div id="pl-2573" class="panel-layout">
                            <hr>
                            <h1>СтройМастер<small> @yield('title')</small></h1>
                            <hr>
                        </div>
                        <div class="bs-example">
                            <h3> </h3>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th style="width: 60%">Наименование</th>
                                    <th style="width: 15%">Ед.Измерения</th>
                                    <th style="width: 15%">Цена за ед.</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Шпатлевка стен</td>
                                    <td>м2</td>
                                    <td>200</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </main>
@endsection


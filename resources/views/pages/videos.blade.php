@extends('layouts.app')

@section('content')

<div class="page-content-main">

    <div class="intersection"></div>

    <div class="videos-main">
    
        <div class="ytube-video cirikovac">
            <div class="video-details">
                <h2 class="video-title">Ćirikovac</h2>
                <p class="ep-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Facere eaque minima illum reiciendis dolorem enim similique pariatur sint architecto?
                    Fugit, autem iure. Ad fugiat ipsum maxime doloremque similique asperiores sit!</p>
            </div>
            <div id="cirikovac"></div>
        </div>

        <hr>
        
        <div class="ytube-video prugovo">
            <div class="video-details">
                <h2 class="video-title">Prugovo</h2>
                <p class="ep-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Facere eaque minima illum reiciendis dolorem enim similique pariatur sint architecto?
                    Fugit, autem iure. Ad fugiat ipsum maxime doloremque similique asperiores sit!</p>
            </div>
            <div id="prugovo"></div>
        </div>

    </div>

</div>

<script type="text/javascript" src="/js/ytube.js"></script>


@endsection
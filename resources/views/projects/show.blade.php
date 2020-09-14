@extends('layouts.app')

@section('content')

<div class="page-content-main">

    <div class="intersection"></div>

    <h1>{{$project->project_name}}</h1>

    <div class="show-main">

        <table class="project-info">
            <tr>
                <td class="project-info-header">Lokacija:</td>
                <td class="project-info-data">{{$project->location}}</td>
            </tr>
            <tr>
                <td class="project-info-header">Investitor:</td>
                <td class="project-info-data">{{$project->investor_name}}</td>
            </tr>
            <tr>
                <td class="project-info-header">Tip Gradnje:</td>
                <td class="project-info-data">{{$project->build_type}}</td>
            </tr>
            @if ($project->surface_area != NULL) 
                <tr>
                    <td class="project-info-header">Površina:</td>
                    <td class="project-info-data">{{$project->surface_area}}</td>
                </tr>
            @endif
            <tr>
                <td class="project-info-header">Godina Gradnje:</td>
                <td class="project-info-data">{{$project->construction_date}}</td>
            </tr>
        </table>

        @if ($project->project_images_folder != NULL)
            <div class="images-container">
                @foreach ($project->getImages() as $image)
                    <div class="images">
                        <img src="../{{$image}}" onclick="display(this)" alt="">
                    </div>
                @endforeach
            </div>
            <div class="modal-container">
                @foreach ($project->getImages() as $image)
                    <div class="modal-images">
                        <img src="../{{$image}}" alt="">
                    </div>
                @endforeach
                <div id="close" onclick="closeModal()">&times;</div>
                <div id="next" onclick="next()">&#10095;</div>
                <div id="prev" onclick="previous()">&#10094;</div>
            </div>                     
        @endif
    </div>

</div>

<script type="text/javascript" src="/js/project-images.js"></script>
    
@endsection
@extends('layouts.app')

@section('content')

<div class="page-content-main">

    <div class="intersection"></div>

    <div class="projects-main">

        @if (count($projects) > 0)

            <h1 class="project-status">Aktivni Projekti</h1>

            <?php global $count; $count = 0; ?>

            @foreach ($projects as $project)
                
                @if ($project->status == 1)

                    <h2 class="project-title"><a href="/projects/{{$project->id}}">{{$project->project_name}}</a></h2>

                    <div class="projects-container <?php echo (($count++)%2)? "reverse":""; ?>">
                        
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
                        <div>
                            @if ($project->project_images_folder != NULL)
                                <div class="slideshow-container">
                                    @foreach ($project->getImages() as $key=>$image)
                                        @if ($key < 4)
                                            <div class="project-image fade">
                                                <img src={{$image}} alt="">
                                            </div>
                                        @endif
                                    @endforeach
                                </div>                      
                            @endif
                        </div>
                    </div>
                    
                @endif
            
            @endforeach

            <h1 class="project-status">Gotovi Projekti</h1>

            
            <?php global $count; $count = 0; ?>

            @foreach ($projects as $project)
                
                @if ($project->status == 0)

                    <h2 class="project-title"><a href="/projects/{{$project->id}}">{{$project->project_name}}</a></h2>

                    <div class="projects-container <?php echo (($count++)%2)? "reverse":""; ?>">

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

                        <div>
                            @if ($project->project_images_folder != NULL)
                                <div class="slideshow-container">
                                    @foreach ($project->getImages() as $key=>$image)
                                        @if ($key < 4)
                                            <div class="project-image fade">
                                                <img src={{$image}} alt="">
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        </div>

                    </div>
                    
                @endif
            
            @endforeach
            
        @endif

    </div>

</div>

@endsection
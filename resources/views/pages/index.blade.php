@extends('layouts.app')

@section('content')

<div class="page-content-main">

    <div class="intersection"></div>

    <div class="quote-container">
        <blockquote class="quote">
            <p>Arhitektura treba da govori o svom vremenu i mestu, ali da čezne za bezvremenošću.</p>
            <footer>- Frank Gehry</footer>
        </blockquote>
        <!--<q>Architecture should speak of its time and place, but yearn for timelessness.</q>
        <i>- Frank Gehry</i>-->
    </div>

    <div class="page-content">

        <div class="article-container fade-in" id="about">
            <h1>O Nama</h1>
            <p><span class="company-name">SZGR Partenon</span> je građevinska firma osnovana, od strane Vladana Marjanovića,
            sa namerom da se nastavi porodična tradicija koju je započeo njegov otac,
            građevinski tehničar iz ugledne crnotravske porodice Marjanović.</p>
            <footer class="index-link"><a href="/about">Saznajte više...</a></footer>
        </div>

        <hr>

        <div class="article-container fade-in" id="services">
            <h1>Delatnost i usluge</h1>
            <p><span class="company-name">SZGR Partenon</span> pruža sve vrste usluga koje obuhvataju izgradnju i održavanje
                objekata u oblasti visokogradnje i niskogradnje.</p>
            <footer class="index-link"><a href="/services">Saznajte više...</a></footer>
        </div>

        <hr>

        <div class="article-container fade-in" id="projects">
            <h1>Projekti</h1>
            <p>Svaki novi projekat je prilika i zadovoljstvo da pokažemo
                svoje veštine koje smo temeljno gradili od osnivanja firme.</p>
            <p>Neki od naših projekata:</p>

            <div class="projects-index">

                @for ($i = 0; $i < 2; $i++)

                    <div class="projects-container-index">

                        <h3>{{$projects[$i]->project_name}}</h3>
                                
                        <table class="project-info-index">
                            <tr>
                                <td class="project-info-header">Lokacija:</td>
                                <td class="project-info-data">{{$projects[$i]->location}}</td>
                            </tr>
                            <tr>
                                <td class="project-info-header">Investitor:</td>
                                <td class="project-info-data">{{$projects[$i]->investor_name}}</td>
                            </tr>
                            <tr>
                                <td class="project-info-header">Tip Gradnje:</td>
                                <td class="project-info-data">{{$projects[$i]->build_type}}</td>
                            </tr>
                            @if ($projects[$i]->surface_area != NULL) 
                                <tr>
                                    <td class="project-info-header">Površina:</td>
                                    <td class="project-info-data">{{$projects[$i]->surface_area}}</td>
                                </tr>
                            @endif
                            <tr>
                                <td class="project-info-header">Godina Gradnje:</td>
                                <td class="project-info-data">{{$projects[$i]->construction_date}}</td>
                            </tr>
                            <tr>
                                <td class="project-info-header">Status:</td>
                                <td class="project-info-data">{{($projects[$i]->status)?"U izgradnji":"Završen"}}</td>
                            </tr>
                        </table>

                    </div>
                    
                @endfor

            </div>

            <footer class="index-link"><a href="/projects">Saznajte više...</a></footer>
        </div>

        <hr>

        <div class="article-container fade-in" id="contact">
            <h1>Kontakt</h1>
            <p>Ukoliko želite da sarađujete sa nama, ili imate pitanja o uslugama koje pružamo,
                možete nas kontaktirati putem formulara koji se nalazi na našoj kontakt stranici.</p>
            <p>Biće nam zadovoljstvo da Vas čujemo, i odgovorimo na sva pitanja koje imate za nas.</p>
            <footer class="index-link"><a href="/contact">Saznajte više...</a></footer>
        </div>

    </div>

</div>

@endsection
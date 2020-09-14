@extends('layouts.app')

@section('content')

<div class="page-content-main">

    <div class="intersection"></div>
    
    <div class="contact-main">

        <div id="contact-form">
            <h3>Kontaktirajte nas koristeći obrazac ispod</h3>
            @include('inc.contact-form')
        </div>

        <div id="contact-info">
            <h3>Osnovne kontakt informacije</h3>
            <table id="tbl-contact-info">
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td class="tbl-field-name">Naziv firme:</td>
                    <td class="tbl-field-data">SZGR Partenon</td>
                </tr>
                <tr>
                    <td class="tbl-field-name">Adresa:</td>
                    <td class="tbl-field-data">Vardarska 16/4 12000 Požarevac</td>
                </tr>
                <tr>
                    <td class="tbl-field-name">Radno Vreme:</td>
                    <td class="tbl-field-data">Pon-Pet 8:00-16:00</td>
                </tr>
                <tr>
                    <td class="tbl-field-name">Mobilni Telefon:</td>
                    <td class="tbl-field-data">060/10-15-100</td>
                </tr>
                <tr>
                    <td class="tbl-field-name">Telefon/Faks:</td>
                    <td class="tbl-field-data">012/405-057</td>
                </tr>
                <tr>
                    <td class="tbl-field-name">Е-Mail:</td>
                    <td class="tbl-field-data"><a href="mailto:partenon.pozarevac@gmail.com">partenon.pozarevac@gmail.com</a></td>
                </tr>
            </table>
        </div>

    </div>

</div>

@endsection
@extends('front-end.main')

@section('content')

    <div class="container-fluid">
        <div id="page-1">
            <div id="{{trans('app.main')}}">
                <div id="elektroMarkt">
                    <h4 class="logo-title">{{trans('app.inspired_by')}} </h4>
                    <div id="elektroMarktLogo"></div>
                </div>
                <div id="mainTitle">
                    {{trans('app.main_title')}}
                </div>
                {{--<div id="mainTitleDescription">{{trans('app.header_description')}}</div>--}}
            </div>
        </div>
    </div>

    {{--About--}}
    <div id="mainAbout">
        <div id="{{trans('app.about')}}">
            <div id="mainTitle">
                {{trans('app.about')}}
            </div>
        </div>
        <div id="aboutDescriptionMain">
            <div id="aboutDescriptionCentral">
            @if(isset($aboutMedia['video']))
                <div id="aboutVideo">
                    <video id="my-video" class="video-js" controls preload="auto">
                        {{--poster="{{asset('images/the-lab-on-steam-archery.jpg')}}" data-setup="{}">--}}
                        <source src="{{asset($aboutMedia['video'][0])}}" type='video/mp4'>
                        {{--<source src="MY_VIDEO.webm" type='video/webm'>--}}
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                </div>
            @elseif(isset($aboutMedia['image']))
                <img style="width:70px" src={{asset($aboutMedia['image']['0'])}}>
            @endif

            @foreach($pages as $page)
                @if(isset($page['pages_categories_id']) && $page['name']=='Apie')
                    @foreach($page['translations'] as $translations)
                        <div class="paragraph">
                            <p>"{{$translations['description_long']}}"</p>
                        </div>
                    @endforeach

                @endif
            @endforeach
            </div>
        </div>
    </div>

    {{--Virtual rooms--}}
    <div id="{{trans('app.rooms')}}">
        <div id="VRRooms">
            <div id="mainTitleRooms">
                <div id="mainTitle">
                    {{--{{trans('Virtualus kambariai')}}--}}
                </div>
            </div>
            {{--<div id="mainMainExperience">--}}
                @foreach($pages as $page)
                    @foreach($pagesLang as $translations)
                        @if($page['id'] == $translations['pages_id'])
                            @if(isset($page['pages_categories_id']) && isset($page['resource_image']['path']) &&  $page['pages_categories_id']== 'vr_categories_id')
            {{--navigating from menu ropdown on click --}}
                            <div id="{{trans($translations['slug'])}}">
                                <div id="experiencesMain">
            {{--counting loops for interchannging colors in experiance div--}}
                                        @if($loop->iteration %2 == 0)
                                            <div class="experienceWhite">
                                        @else
                                            <div class="experienceBlack">
                                        @endif
                                                <div id="descriptionMain">
                                                    <div class="description">
                                                        <div id="experienceName">
                                                            <p>{{$translations['title']}}</p>
                                                        </div>
                                                        {{$translations['description_short']}}
                                                    </div>
                                                </div>
                                        <div class="experienceImage">
                                            <a href="{{route('app.experience.show', ['language'=>$locale,'slug'=>trans($translations['slug'])])}}"><img src="{{asset($page['resource_image']['path'])}}"></a>
                                        </div>
                                       </div>
                                </div>
                             </div>
                            @endif
                        @endif
                    @endforeach
                @endforeach
        </div>
    </div>
</div>

    {{--tickets--}}
        <div id="mainTickets">
            <div id="{{trans('app.tickets')}}">
                <div id="mainTitle">
                    {{trans('app.tickets')}}
                </div>

                <div id="mainTicketBody">

                    <div id="ticketDescription">

                        <p>5 Patirčių kaina:</p>
                        <p>6 Eurai</p>

                        <a class="btn btn-success btn-sm" href="{{route('app.usersReservations.create')}}"><i class="fa fa-pencil fa-sm" aria-hidden="true"></i>Make reservation</a>
                    </div>

                </div>
            </div>
        </div>

    {{--time and location--}}
    <div id="mainTimeLocation">
        <div id="{{trans('app.time-and-location')}}">
            <div class="headingBold">
                {{trans('app.time-and-location')}}
            </div>
            <div class="paragraph">
                <p>Paroda veiks nuo kovo mėn. 1 d. iki gegužės mėn. 31d., Darbo laikas: darbo dienomis nuo 11 val.
                    iki 22 val., savaitgaliais nuo 10 val. iki 22 val. Paroda vyksta, Vilniuje PC “Akropolis”,
                    2-ame aukšte, prie knygyno “Pegasas”. Bilietus galite įsigyti tiek parodos kasoje, tiek internetu."</p>
            </div>

            <div id="googleMap"></div>

        </div>
    </div>

    {{--contacts--}}
    <div id="mainContacts">
        <div id="{{trans('app.contacts')}}">
            <div class="heading">
                {{trans('app.contacts')}}
            </div>
        </div>
    </div>

    {{--sponsors--}}
<div id="mainSponsors">
    @foreach($pages as $page)
        {{--{{dd($pages)}}--}}
        @foreach($pagesLang as $translations)
            @if($page['id'] == $translations['pages_id'])
               @if($page['categories']['name'] == 'remejai_kategorija')

                    <div class="headingBold">{{$translations['title']}}</div>
            @endif
            @endif
        @endforeach
    @endforeach
        @if(isset($aboutMedia['image']))

            <div>
                <div class="heading sponsors"><img style="width:400px; height:80px" src={{asset($aboutMedia['image']['elektromarkt_logo'])}}></div>
            </div>

            <div>
                <div class="heading sponsors"><img style="width:187px; height:80px" src={{asset($aboutMedia['image']['delfi_logo'])}}></div>
            </div>

            <div class="heading sponsors">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2"><img style="width:187px; height:60px; margin:15px " src={{asset($aboutMedia['image']['akropolis_logo'])}}></div>
                        <div class="col-lg-2"><img style="width:187px; height:90px; margin:15px" src={{asset($aboutMedia['image']['litexpo_logo'])}}></div>
                        <div class="col-lg-2"><img style="width:187px; height:60px; margin:15px" src={{asset($aboutMedia['image']['telesoftas_logo'])}}></div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <div class="heading sponsors"><img style="width:187px; height:60px; margin:15px" src={{asset($aboutMedia['image']['inida_logo'])}}></div>
        @endif
</div>
@endsection

<script>
    function myMap() {

        var mapProp= {
            center:new google.maps.LatLng(54.711203,25.261813),
            zoom:16
        };

        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
            position: mapProp['center'],
            map: map,
            title:"Hello World!"
        });
    }
</script>
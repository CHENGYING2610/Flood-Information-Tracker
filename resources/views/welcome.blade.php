@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row" width="100%">
        <div id="welheading" class="wel1">
            <h1>Welcome to Flood Information Tracker</h1>
        </div>



        <div id="welheading" class="wel1">
            <h2>Get Started</h2>
        </div>
        <div class="row">
            <div class="col-3 getstarted"><a href="#map"><button>Flood Maps</button></a></div>
            <div class="col-3 getstarted"><a href="#contact"><button>Emergency Contacts</button></a></div>
            <div class="col-3 getstarted"><a href="#shelter"><button>Shelters</button></a></div>
            <div class="col-3 getstarted"><a href="#sops"><button>Additional Information</button></a></div>
        </div>




        <div class="spacer"></div>
        <div id="map" class="wel1">
            <h1>Flood Maps</h1>
        </div>
        <div class="row">
            <div class="col-6">
                <h3><a href="https://publicinfobanjir.water.gov.my/?lang=en#">Public Info Banjir</a></h3>
                <iframe src="https://publicinfobanjir.water.gov.my/?lang=en#" width="100%" height="1000"></iframe>
            </div>
            <div class="col-6">
                <h3><a href="http://infobanjirjps.selangor.gov.my/index.html">Info Banjir JPS Selangor</a></h3>
                <iframe src="http://infobanjirjps.selangor.gov.my/index.html" width="100%" height="1000"></iframe>
            </div>
        </div>
    </div>



    <div class="spacer"></div>
    <div id="contact" class="wel1">
        <h1 style="font-size:50px">Emergency Contacts</h1>
    </div>
    <div class="contactdata">
        @guest
        @foreach($contacts as $contact)
        <div class="row NewsGrid">
            <div class="col-8">
                <h1>{{$contact['name']}}</h1>
                <h3><b>Phone Number:</b>{{$contact['number']}}</h3>

            </div>
            <div class="col-2">
                @auth
                @if (auth()->user()->role == "admin")
                <a href="{{route('deletecontact',[$id=$contact['id']])}}"><button>DELETE</button></a>
                @endif
                @endauth
            </div>
        </div>
        @endforeach
        @else
        @if(Route::has('login'))
        <div>
            <h1 style="font-size:40px">Emergency Contacts at {{Auth::user()->state}}</h1>
        </div>
        @foreach($contacts as $contact)
        @auth
        @if(auth()->user()->state == $contact['state'])
        <div class="row NewsGrid">
            <div class="col-8">
                <h1>{{$contact['name']}}</h1>
                <h3><b>Phone Number:</b>{{$contact['number']}}</h3>

            </div>
            <div class="col-2">
                @auth
                @if (auth()->user()->role == "admin")
                <a href="{{route('deletecontact',[$id=$contact['id']])}}"><button>DELETE</button></a>
                @endif
                @endauth
            </div>
        </div>
        @endif
        @endauth
        @endforeach
        @endif
        
        @endguest
        

        <div class="row">
            @auth
            @if (auth()->user()->role == "admin")
            <a href="{{ route('createcontact') }}"><button>ADD</button></a>
            @endif
            @endauth
        </div>
        <div class="spacer2"></div>
        <div class="row">
            <a href="{{route('contactlist')}}">
                <h3 style="text-align:center">View All contact</h3>
            </a>
        </div>
    </div>






    <div class="spacer"></div>
    <div id="shelter" class="wel1">
        <h1 style="font-size:50px">Shelter</h1>
    </div>
    <div class="shelterdata">
        @guest
        @foreach($shelters as $shelter)
        <div class="row NewsGrid">
            <div class="col-8">
                <h1>{{$shelter['name']}}</h1>
                <h5><b>Phone Number: </b>{{$shelter['number']}}</h5>
                <h5><b>Email Address/website: </b> {{$shelter['email']}}</h5>
                <h5><b>Address: </b> {{$shelter['address']}}</h5>
                <h5><b>Max Pax: </b> {{$shelter['maxpax']}}</h5>
                <div class="row" style="height:auto;"><?php echo stripslashes($shelter['description']) ?></div>
            </div>
            <div class="col-2">
                @auth
                @if (auth()->user()->role == "admin")
                <a href="{{route('deleteshelter',[$id=$shelter['id']])}}"><button>DELETE</button></a>
                @endif
                @endauth
            </div>
        </div>
        <div class="spacer2"></div>
        @endforeach
        
        @else
        @if(Route::has('login'))
        <div>
            <h1 style="font-size:40px">shelter at {{Auth::user()->state}}</h1>
        </div>
        @foreach($shelters as $shelter)
        @auth
        @if(auth()->user()->state == $shelter['state'])
        <div class="row NewsGrid">
            <div class="col-8">
                <h1>{{$shelter['name']}}</h1>
                <h5><b>Phone Number: </b>{{$shelter['number']}}</h5>
                <h5><b>Email Address/website: </b> {{$shelter['email']}}</h5>
                <h5><b>Address: </b> {{$shelter['address']}}</h5>
                <h5><b>Max Pax: </b> {{$shelter['maxpax']}}</h5>
                <div class="row" style="height:auto;"><?php echo stripslashes($shelter['description']) ?></div>
            </div>
            <div class="col-2">
                @auth
                @if (auth()->user()->role == "admin")
                <a href="{{route('deleteshelter',[$id=$shelter['id']])}}"><button>DELETE</button></a>
                @endif
                @endauth
            </div>
        </div>
        @endif
        @endauth
        <div class="spacer2"></div>
        @endforeach
        @endif
        @endguest
        <div class="row">
            @auth
            @if (auth()->user()->role == "admin")
            <a href="{{ route('createshelter') }}"><button>ADD</button></a>
            @endif
            @endauth
        </div>

        <div class="spacer2"></div>
        <div class="row">
            <a href="{{ route('shelter') }}">
                <h3 style="text-align:center">View All shelter</h3>
            </a>
        </div>
    </div>





    <div class="spacer"></div>
    <div id="sops" class="wel1">
        <h1 style="font-size:50px">Additional Information</h1>
    </div>
    <div class="wel2">
        <h1 style="font-size:50px">Useful Guidelines</h1>
    </div>
    <div class="sopsdata">
        @foreach($sops as $sop)
        <div class="row NewsGrid">
            <div class="col-8">
                <h1>{{$sop['title']}}</h1>
                <div class="row" style="height:auto;">
                    <?php echo stripslashes($sop['details']) ?>
                </div>
            </div>
            <div class="col-2">
                @auth
                @if (auth()->user()->role == "admin")
                <a href="{{route('deletesop',[$id=$sop['id']])}}"><button>DELETE</button></a>
                @endif
                @endauth
            </div>
        </div>
        <div class="spacer2"></div>
        @endforeach
        <div class="row">
            @auth
            @if (auth()->user()->role == "admin")
            <a href="{{ route('createsop') }}"><button>ADD</button></a>
            @endif
            @endauth
        </div>
    </div>
    <div class="spacer2"></div>





    <div class="wel2">
        <h1 style="font-size:50px">Facebook Pages</h1>
    </div>
    <div class="row" style="height:auto;">

        <div class="col-6">
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpublicinfobanjir&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=3149519401957216"
                width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
        <div class="col-6">
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FJPSNegeriSelangor%3Flang%3Den&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=3149519401957216"
                width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
    <div class="spacer2"></div>



    <!-- <div class="wel2">
        <h1 style="font-size:50px">Instagrams</h1>
    </div>
    <div class="row" style="height:auto;">
        <div class="col-6">
            <div class="embedsocial-hashtag" data-ref="7801d7c43b5a384c1f048132f759c0c3ad3e789e"><a class="feed-powered-by-es feed-powered-by-es-feed-new" href="https://embedsocial.com/social-media-aggregator/" target="_blank" title="Widget by EmbedSocial">Widget by EmbedSocial<span>→</span></a></div>
            <script>
                (function(d, s, id) {
                    var js;
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "https://embedsocial.com/cdn/ht.js";
                    d.getElementsByTagName("head")[0].appendChild(js);
                }(document, "script", "EmbedSocialHashtagScript"));
            </script>
        </div>
    </div>
    <div class="spacer2"></div> -->




    <div class="wel2">
        <h1 style="font-size:50px">Twitter</h1>
    </div>
    <div class="row" style="height:auto;">
        <div class="col-6">
            <a class="twitter-timeline" data-height="500" href="https://twitter.com/iBanjir?ref_src=twsrc%5Etfw">Tweets
                by iBanjir</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-6">
            <a class="twitter-timeline" data-height="500"
                href="https://twitter.com/metmalaysia?ref_src=twsrc%5Etfw">Tweets by metmalaysia</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-6">
            <a class="twitter-timeline" data-height="500"
                href="https://twitter.com/misostest?ref_src=twsrc%5Etfw">Tweets by misostest</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>


    <div class="spacer"></div>
    <div class="fab-container">
        <div class="button iconbutton">
            <a href="#welheading">&uarr;</a>
        </div>
    </div>
</div>

@endsection
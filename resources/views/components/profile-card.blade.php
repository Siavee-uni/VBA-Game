<div class="profile border-slime">
    <figure>
        <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/55758/random-user-31.jpg" alt="" />
    </figure>
    <header>
        <h1 class="color-slime">{{$user->name}}
            <small>Level {{$user->level}}</small></h1>
            <div class="level-bar mt-2">
                <div class="underlay" style="background-position:{{$exp}}%, -{{$exp}}%; width:{{$exp}}%;">
                    <div class="overlay" style="background-position:-{{$exp}}%, {{$exp}}%; width:{{$exp}}%; "></div>
                </div>
                <div class="frame"></div>
            </div>
    </header>

    <div class="toggle">
        <input type="checkbox" class="view_details" id="view_details">
        <label for="view_details" title="tap here to view full profile">☰</label>
    </div>
    <main>
        {{--<dl>
            <dt>Full name</dt>
            <dd>Maria Josephina Gonzalez</dd>
            <dt>Date of birth</dt>
            <dd>August 27, 1987</dd>
            <dt>Hometown</dt>
            <dd>Barcelona, Spain</dd>
            <dt>Occupation</dt>
            <dd>Client Happiness Manager</dd>
            <dt>Loves</dt>
            <dd>Skydiving, Tennis, Romantic dinners</dd>
            <dt>Hates</dt>
            <dd>Taxes, bosses instead of leaders</dd>
            <dt>Social</dt>
            <dd>
                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            </dd>
        </dl>--}}
    </main>

</div> <!-- end profile -->

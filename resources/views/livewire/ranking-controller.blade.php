<div class="ranking-container">
    <div class="card">
        <section class="card-info card-section">
            <i class="ion-navicon menu"></i>
            <i class="ion-ios-search search"></i>

            <div class="avatar row">
                <img src="/images/avatar-beard.png" alt="avatar with beard" />
            </div>

            <section class="user row">
                <h1 class="user-header">
                    {{$user->name}}
                    <h2 class="sub header">
                        400 hours played
                    </h2>
                </h1>
            </section>

            <section class="statistics">
                <article class="statistic">
                    <h4 class="statistic-title">
                        Rank
                    </h4>
                    <h3 class="statistic-value">
                        2
                    </h3>
                </article>

                <article class="statistic">
                    <h4 class="statistic-title">
                        Score
                    </h4>
                    <h3 class="statistic-value">
                        1,034
                    </h3>
                </article>
            </section>

            <div class="dial">
                <h2 class="dial-title">
                    {{$user->level}}
                </h2>
                <h3 class="dial-value">
                    Level
                </h3>
            </div>
        </section>
        <section class="card-details card-section">

            <nav class="menu">
                <article class="menu-item menu-item-active">
                    Global Ranking
                </article>
                <article class="menu-item">
                    Kurs
                </article>
            </nav>

            <dl class="leaderboard">
                <div>
                @foreach ($users as $user)
                <dt>
                    <article class="progress">
                        <section class="progress-bar" style="width: {{$user->exp}}%;"></section>
                    </article>
                </dt>
                <dd>
                    <div class="leaderboard-name">{{$user->name}}</div>
                    <div class="leaderboard-value">Lv {{$user->level}}</div>
                </dd>
                    <dt>
                        <article class="progress">
                            <section class="progress-bar" style="width: {{$user->exp}}%;"></section>
                        </article>
                    </dt>
                    <dd>
                        <div class="leaderboard-name">{{$user->name}}</div>
                        <div class="leaderboard-value">Lv {{$user->level}}</div>
                    </dd>
                @endforeach
                </div>
            </dl>
        </section>
    </div>
</div>

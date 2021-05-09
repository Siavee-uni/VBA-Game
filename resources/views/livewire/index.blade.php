<div class="grid justify-center">
    <div style="margin: 1em" class="content flex-column-center">
        <div class="color-slime" style="font-size:5rem" ng-repeat="item in items">VBA Game</div>
    </div>
    <x-menu-button name="Profil" wireClick="logout" buttonSize="1,1m"/>
    <livewire:tutorial-menu-button name="Tutorial" buttonSize="1,3rem"/>
    <x-menu-button name="Herausforderung" wireClick="logout" buttonSize="1,1m"/>
    <x-menu-button name="Rangliste" wireClick="logout" buttonSize="1,1m"/>
    <x-menu-button name="Logout" wireClick="logout" buttonSize="1,1m"/>
</div>

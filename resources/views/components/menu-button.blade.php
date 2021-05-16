<div wire:click="{{$wireClickFunction}}" class="content-container" style="font-size:{{$buttonSize}} {{ $attributes }}">
    <div class="content flex-column-center">
        <div class="item" style="font-size:{{$buttonSize}}" ng-repeat="item in items">{{ $name }}</div>
    </div>
</div>
